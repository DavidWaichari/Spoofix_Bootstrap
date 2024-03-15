<script setup>
  import { onMounted } from 'vue';

  onMounted(() => {
      // Assuming you have the google object available
      const mapProp = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 15,
      };

      const map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

      // Add a marker
      const marker = new google.maps.Marker({
        position: new google.maps.LatLng(51.508742, -0.120850),
        map: map,
        title: 'Marker Title', // You can customize the title
      });
    });

</script>

<template>
    <div class="card bg-white">
        <div class="card-header">
        <h3 class="card-title">Domain Location</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="padding: 2px;">
          <div id="googleMap" style="width:100%;height:300px;"></div> 
        </div>
        <!-- /.card-body -->
    </div>
</template>

<style scoped>
.card{
  margin-top: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
}
.card-header{
  display: flex; 
  padding: 4px
}
</style>