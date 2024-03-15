<template>
  <div class="card bg-white">
    <div class="card-header">
      <h3 class="card-title">Domain Location</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body" style="padding: 2px;">
      <div id="googleMap" style="width:100%;height:300px;"></div>
      <!-- <div id="googleMap" style="width:100%;height:300px;"></div> -->

    </div>
    <!-- /.card-body -->
  </div>
</template>

<script setup>
  import { onMounted, ref } from 'vue';
  import axios from 'axios';

  import { useRoute, useRouter } from 'vue-router';

  const route = useRoute();
  const router = useRouter();

  
  const domain_scan_detail = ref({})

  const initMap = async () => {
  try {
    // Fetch domain details
    const response = await axios.get(`/api/spoofed_domains_coordinates/${route.params.spoof_id}`);
    const domain_scan_detail = response.data.data.domain_scan_detail;

    // Convert latitude and longitude to integers
    const latitude = parseInt(domain_scan_detail.latitude, 10);
    const longitude = parseInt(domain_scan_detail.longitude, 10);

    // Use the google object to create a map
    const map = new google.maps.Map(document.getElementById("googleMap"), {
      center: { lat: latitude, lng: longitude },
      zoom: 12,
    });

    // Add a marker
    new google.maps.Marker({
      position: { lat: latitude, lng: longitude },
      map: map,
      title: 'Marker Title',
    });
  } catch (error) {
    console.error("Error fetching domain details:", error);
  }
};

  onMounted( () => {
     initMap();
  });
</script>

<style scoped>
  .card {
    margin-top: 0px;
    margin-bottom: 5px;
    margin-left: 0px;
  }

  .card-header {
    display: flex;
    padding: 4px;
  }
</style>
