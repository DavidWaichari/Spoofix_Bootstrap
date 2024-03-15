<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const domain_details = ref({})

const loadData = async () =>{
        const response = await axios.get(`/api/spoofed_domains_details/${route.params.spoof_id}/details`);
        domain_details.value = response.data.data.domain_detail
      };


onMounted(() => {
  loadData()
});


</script>
<template>
    <div class="card bg-white">
        <div class="card-header">
        <h3 class="card-title">Domain Details</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="padding: 2px;">
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Whois Server

                </p>
                <p class="w-100 m-1">     
                  {{domain_details.whois_server}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Country
                </p>
                <p class="w-100 m-1">
                  {{domain_details.country}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Organization
                </p>
                <p class="w-100 m-1">
                  {{domain_details.organization_name}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Registration Date
                </p>
                <p class="w-100 m-1">
                  {{domain_details.creation_date}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Updation Date
                </p>
                <p class="w-100 m-1">
                  {{domain_details.updated_date}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Expiry Date
                </p>
                <p class="w-100 m-1">
                  {{domain_details.expiry_date}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Registrar
                </p>
                <p class="w-100 m-1">
                  {{domain_details.registrar}}
                </p>
              </div>
            </div>
           
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Referal Urls
                </p>
                <p class="w-100 m-1">
                  {{domain_details.referal_url}}
                </p>
              </div>
            </div>
            
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  City
                </p>
                <p class="w-100 m-1"> 
                  {{domain_details.city}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Name Servers
                </p>
                <p class="w-100 m-1">
                  {{domain_details.name_servers}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Address
                </p>
                <p class="w-100 m-1">
                  {{domain_details.address}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  State
                </p>
                <p class="w-100 m-1">
                  {{domain_details.state}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Registrant Postal Code
                </p>
                <p class="w-100 m-1">
                  {{domain_details.registrant_postal_code}}
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