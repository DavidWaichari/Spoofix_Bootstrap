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
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-requested-tab" data-toggle="pill" href="#custom-tabs-one-requested" role="tab" aria-controls="custom-tabs-one-requested" aria-selected="false">Requested accounts <span class="badge bg-purple float-right">65</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-one-all-tab" data-toggle="pill" href="#custom-tabs-one-all" role="tab" aria-controls="custom-tabs-one-all" aria-selected="true">All accounts <span class="badge bg-purple float-right">65</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-active-tab" data-toggle="pill" href="#custom-tabs-one-active" role="tab" aria-controls="custom-tabs-one-active" aria-selected="false">Active accounts <span class="badge bg-purple float-right">65</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-inactive-tab" data-toggle="pill" href="#custom-tabs-one-inactive" role="tab" aria-controls="custom-tabs-one-inactive" aria-selected="false">Inactive accounts <span class="badge bg-purple float-right">65</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-spoofing-tab" data-toggle="pill" href="#custom-tabs-one-spoofing" role="tab" aria-controls="custom-tabs-one-spoofing" aria-selected="false">Spoofing accounts <span class="badge bg-purple float-right">65</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-reported-tab" data-toggle="pill" href="#custom-tabs-one-reported" role="tab" aria-controls="custom-tabs-one-reported" aria-selected="false">Reported accounts <span class="badge bg-purple float-right">65</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-takendown-tab" data-toggle="pill" href="#custom-tabs-one-takendown" role="tab" aria-controls="custom-tabs-one-takendown" aria-selected="false">Taken Down accounts <span class="badge bg-purple float-right">65</span></a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-one-requested" role="tabpanel" aria-labelledby="custom-tabs-one-requested-tab">
                     <RequestedAccounts></RequestedAccounts>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-all" role="tabpanel" aria-labelledby="custom-tabs-one-all-tab">
                     <AllAccounts></AllAccounts>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-active" role="tabpanel" aria-labelledby="custom-tabs-one-active-tab">
                     <ActiveAccounts></ActiveAccounts>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-inactive" role="tabpanel" aria-labelledby="custom-tabs-one-inactive-tab">
                     <InActiveAccounts></InActiveAccounts>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-spoofing" role="tabpanel" aria-labelledby="custom-tabs-one-spoofing-tab">
                     <SpoofingAccounts></SpoofingAccounts>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-reported" role="tabpanel" aria-labelledby="custom-tabs-one-reported-tab">
                     <ReportedAccounts></ReportedAccounts>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-takendown" role="tabpanel" aria-labelledby="custom-tabs-one-takendown-tab">
                     <TakenDownAccounts></TakenDownAccounts>
                  </div>
                </div>
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
import {ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import RequestedAccounts from './Requested.vue';
import AllAccounts from './All.vue';
import ActiveAccounts from './Active.vue';
import InActiveAccounts from './Inactive.vue';
import SpoofingAccounts from './Spoofing.vue';
import ReportedAccounts from './Reported.vue';
import TakenDownAccounts from './TakenDown.vue';
import Inactive from './Inactive.vue';


const route = useRoute();
const router = useRouter();
</script>