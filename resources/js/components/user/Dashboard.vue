<template>
    <div>
        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
</template>

<script setup>
import {ref, onMounted} from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';
import VueApexCharts from "vue3-apexcharts";


const route = useRoute();
const router = useRouter();
const domains = ref([]);
const inprogress = ref([]);
const completed = ref([]);

const series = ref([])
const chartOptions = {
    labels: ['In progress', 'completed', 'Take downs'], // Your custom labels here
};



const loadData = async () =>{
    const domainsres = await axios.get(`/api/user_domains/${localStorage.getItem('user_id')}`);
    const report_formsres = await axios.get(`/api/report_forms/user`);
    const completedres = await axios.get(`/api/report_forms/user_completed`);
    
    domains.value = domainsres.data.data.domains
    inprogress.value = report_formsres.data.data.user_report_forms;
    completed.value = completedres.data.data.user_completed_report_forms;

    series.value = [inprogress.value.length, completed.value.length,0]

};


onMounted(() => {
  loadData()
});


</script>