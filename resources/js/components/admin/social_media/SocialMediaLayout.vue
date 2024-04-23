<template>
    <div>
        <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Social Media</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Social Media</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <section class="content">
            <div class="card card-warning card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/requested" class="nav-link">Requested accounts <span class="badge bg-purple float-right">{{requested_accounts_count}}</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/all" class="nav-link">All accounts <span class="badge bg-purple float-right">{{all_accounts_count}}</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/active" class="nav-link">Active accounts <span class="badge bg-purple float-right">{{active_accounts_count}}</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/inactive" class="nav-link">Inactive accounts <span class="badge bg-purple float-right">{{inactive_accounts_count}}</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/spoofing_accounts" class="nav-link">Spoofing accounts <span class="badge bg-purple float-right">{{spoofing_accounts_count}}</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/inprogress" class="nav-link">In progress <span class="badge bg-purple float-right">{{inprogress_accounts_count}}</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/completed" class="nav-link">Completed <span class="badge bg-purple float-right">{{completed_accounts_count}}</span></RouterLink>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                  <RouterView></RouterView>
              </div>
              <!-- /.card -->
            </div>
      
      <!-- /.row -->
    </section>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
</template>

<script setup>
import { RouterLink, RouterView } from 'vue-router';
import { useRoute, useRouter } from 'vue-router';

import {ref, onMounted } from 'vue';
import axios from 'axios';

const requested_accounts_count = ref(0)
const all_accounts_count = ref(0)
const active_accounts_count = ref(0)
const inactive_accounts_count = ref(0)
const spoofing_accounts_count = ref(0)
const inprogress_accounts_count = ref(0)
const completed_accounts_count = ref(0)


onMounted( async() => {
  const response1 = await axios.get(`/api/social_media_accounts/account_requests`);
  requested_accounts_count.value = response1.data.data.social_media_accounts.length;
  const response2 = await axios.get(`/api/social_media_accounts`);
  all_accounts_count.value = response2.data.data.social_media_accounts.length;
  const response3 = await axios.get(`/api/social_media_accounts/active`);
  active_accounts_count.value = response3.data.data.social_media_accounts.length;
  const response4 = await axios.get(`/api/social_media_accounts/inactive`);
  inactive_accounts_count.value = response4.data.data.social_media_accounts.length;
  const response5 = await axios.get(`/api/social_media_spoofing_accounts`);
  spoofing_accounts_count.value = response5.data.data.social_media_spoofing_accounts.length;
  const response6 = await axios.get(`/api/social_media_spoofing_accounts/inprogress`);
  inprogress_accounts_count.value = response6.data.data.social_media_spoofing_accounts.length;
  const response7 = await axios.get(`/api/social_media_spoofing_accounts/completed`);
  completed_accounts_count.value = response7.data.data.social_media_spoofing_accounts.length;
        
});

const route = useRoute();
const router = useRouter();


</script>