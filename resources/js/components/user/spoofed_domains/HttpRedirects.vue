<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const domain_http_redirect = ref({})
const domain = ref({})

const loadData = async () =>{
        const response = await axios.get(`/api/spoofed_domains_details/${route.params.spoof_id}/http_redirects`);
        const response2 = await axios.get(`/api/spoofed_domains/${route.params.spoof_id}`);
        domain_http_redirect.value = response.data.data.domain_http_redirect
        domain.value = response2.data.data.spoofed_domain
      };


onMounted(() => {
  loadData()
});


</script>

<template>
    <div class="card bg-white">
        <div class="card-header">
        <h3 class="card-title">HTTP Redirects</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="padding: 2px;">
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Http Redirects Url
                </p>
                <p class="w-100 m-1">     
                  {{domain_http_redirect.redirect_url}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Http Status Code
                </p>
                <p class="w-100 m-1">
                  {{domain_http_redirect.http_status_code}}               </p>
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