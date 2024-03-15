<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Domains</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Domains</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card p-0" style="background-color: #fef9c3;"  v-for="domain in domains" :key="domain.id">
              <div class="card-header p-1">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="p-1">
                      {{ domain.name }}
                    </h4>
                  </div>
                  <div class="col-md-6 ">
                    <RouterLink :to="`/user/domains/${domain.id}/spoofed_domains`">
                      <button type="button" class="btn btn-warning ml-2 rounded-button float-right" style="height: 100%; font-size: 12px;">
                        View Spoofing Sites
                      </button>
                    </RouterLink>
                  </div>
                </div>
              </div>
            </div> 
      </div>
    </section>
    <!-- /.content -->
  </div>
</template>

<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const domains = ref([])

const loadData = async () =>{
    const response = await axios.get(`/api/user_domains/${localStorage.getItem('user_id')}`);
    console.log(response)
    domains.value = response.data.data.domains
};


onMounted(() => {
  loadData()
});


</script>


<style>
.rounded-button {
  border-radius: 20px;
}
</style>
