<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const domain_page_statistics = ref({})
const domain = ref({})

const loadData = async () =>{
        const response = await axios.get(`/api/spoofed_domains_details/${route.params.spoof_id}/page_statistics`);
        const response2 = await axios.get(`/api/spoofed_domains/${route.params.spoof_id}`);
        domain_page_statistics.value = response.data.data.domain_page_statistic
        domain.value = response2.data.data.spoofed_domain
      };


onMounted(() => {
  loadData()
});


</script>

<template>
    <div class="card bg-white">
        <div class="card-header">
        <h3 class="card-title">Page Statistics</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="padding: 2px;">
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Secure Sockets Layer
                </p>
                <p class="w-100 m-1">
                  {{domain_page_statistics.secure_sockets_layer}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Server Os
                </p>
                <p class="w-100 m-1">
                  {{domain_page_statistics.server_os}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Security Headers
                </p>
                <p class="w-100 m-1">
                  {{domain_page_statistics.security_headers}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Console Messages
                </p>
                <p class="w-100 m-1"> 
                  {{domain_page_statistics.console_messages}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Cookies
                </p>
                <p class="w-100 m-1">
                  {{domain_page_statistics.cookies}}
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