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
                    <RouterLink to="/admin/social_media_accounts/requested" class="nav-link">Requested accounts <span class="badge bg-purple float-right">65</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/all" class="nav-link">All accounts <span class="badge bg-purple float-right">65</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/active" class="nav-link">Active accounts <span class="badge bg-purple float-right">65</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/inactive" class="nav-link">Inactive accounts <span class="badge bg-purple float-right">65</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/spoofing_accounts" class="nav-link">Spoofing accounts <span class="badge bg-purple float-right">65</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/active" class="nav-link">Reported accounts <span class="badge bg-purple float-right">65</span></RouterLink>
                  </li>
                  <li class="nav-item">
                    <RouterLink to="/admin/social_media_accounts/active" class="nav-link">Taken Down accounts <span class="badge bg-purple float-right">65</span></RouterLink>
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

import {ref } from 'vue';



const route = useRoute();
const router = useRouter();
</script>