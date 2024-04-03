<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const domain_scan_details = ref({})
const domain = ref({})

const loadData = async () =>{
        const response = await axios.get(`/api/spoofed_domains_details/${route.params.spoof_id}/scan_details`);
        const response2 = await axios.get(`/api/spoofed_domains/${route.params.spoof_id}`);
        console.log(response)
        domain_scan_details.value = response.data.data.domain_scan_detail
        domain.value = response2.data.data.spoofed_domain
      };


onMounted(() => {
  loadData()
});


</script>

<template>
    <div class="card bg-white">
        <div class="card-header">
        <h3 class="card-title">Scan Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="padding: 2px;">
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Domain Name
                </p>
                <p class="w-100 m-1">
                    {{domain.name}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    First Seen
                </p>
                <p class="w-100 m-1">
                  {{domain.created_at}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Last Seen
                </p>
                <p class="w-100 m-1">
                  {{domain.created_at}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Country Registered
                </p>
                <p class="w-100 m-1">
                  {{domain_scan_details.country_registered}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Server Country
                </p>
                <p class="w-100 m-1">
                  {{domain_scan_details.server_country}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Server Region
                </p>
                <p class="w-100 m-1">
                  {{domain_scan_details.server_region}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Server City
                </p>
                <p class="w-100 m-1">
                  {{domain_scan_details.server_city}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    IP Address
                </p>
                <p class="w-100 m-1">
                  {{domain_scan_details.ip_address}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Organization
                </p>
                <p class="w-100 m-1">
                    {{domain_scan_details.organization}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Logitude
                </p>
                <p class="w-100 m-1">
                  {{domain_scan_details.longitude}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                    Latitude
                </p>
                <p class="w-100 m-1">
                  {{domain_scan_details.latitude}}
                </p>
              </div>
            </div>
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