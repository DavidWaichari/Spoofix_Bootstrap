<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const domain_risk_rating = ref({})
const domain = ref({})

const loadData = async () =>{
        const response = await axios.get(`/api/spoofed_domains_details/${route.params.spoof_id}/risk_ratings`);
        const response2 = await axios.get(`/api/spoofed_domains/${route.params.spoof_id}`);
        domain_risk_rating.value = response.data.data.domain_risk_rating
        domain.value = response2.data.data.spoofed_domain
      };


onMounted(() => {
  loadData()
});

</script>

<template>
    <div class="card bg-white">
        <div class="card-header">
        <h3 class="card-title">Risk Rating</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body" style="padding: 2px;">
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Webflow Rating
                </p>
                <p class="w-100 m-1">     
                  {{domain_risk_rating.webflow_rating}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Domain Rating
                </p>
                <p class="w-100 m-1">
                  {{domain_risk_rating.domain_rating}}                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Interface Rating
                </p>
                <p class="w-100 m-1">
                  {{domain_risk_rating.interface_rating}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Age
                </p>
                <p class="w-100 m-1">
                  {{domain_risk_rating.age}}
                </p>
              </div>
            </div>
            <div class="card" style="background-color: #fffae6;">
              <div class="card-header">
                <p class="w-100 m-1">
                  Status
                </p>
                <p class="w-100 m-1">
                  <button type="button" class="btn btn-danger  ml-2 rounded-button btn-sm">
                    {{domain_risk_rating.status}}
                  </button>
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