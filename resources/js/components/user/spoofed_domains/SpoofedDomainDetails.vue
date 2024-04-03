<script setup>
import { RouterView } from 'vue-router';

import { RouterLink } from 'vue-router';
import {ref, onMounted} from 'vue';
import { useRoute, useRouter } from 'vue-router';
import axios from 'axios';


const route = useRoute();

const router = useRouter();

const spoof_domain = ref({})
const domain_risk_rating = ref({})

const domain_id = route.params.id;
const spoof_domain_id = route.params.spoof_id;


const loadData = async () =>{
      const response = await axios.get(`/api/spoofed_domains/${spoof_domain_id}`);
      spoof_domain.value = response.data.data.spoofed_domain

      const response2 = await axios.get(`/api/spoofed_domains_details/${spoof_domain_id}/risk_ratings`);
        
      domain_risk_rating.value = response2.data.data.domain_risk_rating
        
};


onMounted(() => {
  loadData()
});
</script>

<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Spoofed Domains Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Domains</li>
              <li class="breadcrumb-item active">Spoofed Domains</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" style="background-color: #fef9c3; margin-bottom: 10px;">
          <div class="col-md-6">
            <p class="m-2">{{spoof_domain.name}}</p>
          </div>
          <div class="col-md-6">
            <p class="text-danger m-2">{{domain_risk_rating.overall_rating}}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="card" style="background-color: #fef9c3;">
              <div class="card-header">
                <h4 class="card-title w-100 m-1">
                    Scan Details
                </h4>
                <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/details/scan_details`">
                  <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                    Details
                  </button>
                </RouterLink>
              </div>
            </div>
            <div class="card" style="background-color: #fef9c3;">
              <div class="card-header">
                <h4 class="card-title w-100 m-1">
                    Domain Details
                </h4>
                <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/details/domain_details`">
                  <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                    Details
                  </button>
                </RouterLink>
              </div>
            </div>
            <div class="card" style="background-color: #fef9c3;">
              <div class="card-header">
                <h4 class="card-title w-100 m-1">
                    Page Statistics
                </h4>
                <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/details/page_statistics`">
                  <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                    Details
                  </button>
                </RouterLink>
              </div>
            </div>
            
            <div class="card" style="background-color: #fef9c3;">
              <div class="card-header">
                <h4 class="card-title w-100 m-1">
                    Location
                </h4>
                <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/details/location`">
                  <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                    Details
                  </button>
                </RouterLink>
              </div>
            </div>
            <div class="card" style="background-color: #fef9c3;">
              <div class="card-header">
                <h4 class="card-title w-100 m-1">
                    Screenshots
                </h4>
                <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/details/screenshot`">
                  <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                    Details
                  </button>
                </RouterLink>
              </div>
            </div>
            <div class="card" style="background-color: #fef9c3;">
              <div class="card-header">
                <h4 class="card-title w-100 m-1">
                    HTTP Redirects
                </h4>
                <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/details/http_redirects`">
                  <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                    Details
                  </button>
                </RouterLink>
              </div>
            </div>
            <div class="card" style="background-color: #fef9c3;">
              <div class="card-header">
                <h4 class="card-title w-100 m-1">
                    Risk Rating
                </h4>
                <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/details/risk_rating`">
                  <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                    Details
                  </button>
                </RouterLink>
              </div>
            </div>
          </div>
          <div class="col-md-7">
           <RouterView></RouterView>
          </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2">
                <button type="button" class="btn btn-primary ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                  Mark Safe
                </button>
              </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                  Monitor
              </button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger ml-2 rounded-button " data-toggle="modal" data-target="#modal-warning" style="height: 100%; font-size: 12px;">
                    Request Take Down
                </button>
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                  << Previous Domain
              </button>            
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-warning ml-2 rounded-button " style="height: 100%; font-size: 12px;">
                  Next Domain >>
              </button>   
            </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="modal-warning" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-black">
              <h4 class="modal-title text-warning">Confirm Takedown</h4>
              <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to report this domain for takedown?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn  btn-warning rounded-button" data-dismiss="modal">Close</button>

              

              <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/take_down_request`">
                <button type="button" class="btn btn-warning rounded-button" data-dismiss="modal">Take Down</button>
              </RouterLink>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  </div>
</template>
<style scoped>
.card{
  margin-top: 0px;
  margin-bottom: 5px;
}
.card-header{
  display: flex; 
  padding: 4px
}
</style>

