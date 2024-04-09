<template>
    <div>
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-4">
              <h1 class="m-0">Report Form</h1>
            </div>
            <div class="col-sm-4">
              <button type="button" class="btn btn-warning ml-2 rounded-button " data-toggle="modal" data-target="#modal-warning" style="height: 100%; font-size: 12px;">
                    Select Domain
              </button>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Report Form</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <div class="card card-warning card-outline">
          <div class="card-header bg-black">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Domain to safeguard: {{domain.name}}
            </h3>
          </div>
          <div class="card-body">
            <h4>Domain to report: {{ spoof_domain.name }}</h4>
            <div class="row">
              <div class="col-5 col-sm-3 bg-warning p-2">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a :class="organization.id === 1 ? 'nav-link active': 'nav-link'" v-for="organization in reporting_organizations" :id="`vert-tabs-${organization.id}-tab`" data-toggle="pill" :href="`#vert-tabs-${organization.id}`" role="tab" :aria-controls="`vert-tabs-${organization.id}`" aria-selected="true">{{organization.name}}</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div v-for="organization in reporting_organizations" :key="organization.id" :class="organization.id === 1 ? 'tab-pane fade active show':'tab-pane fade'" :id="`vert-tabs-${organization.id}`" role="tabpanel" :aria-labelledby="`vert-tabs-${organization.id}-tab`">
                    <ReportDomainOrganization :org="organization" :domain="domain" :spoof_domain="spoof_domain"></ReportDomainOrganization>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        </div>
      </section>
    </div>

    <div class="modal fade" id="modal-warning" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-black">
              <h4 class="modal-title text-warning">Select Domain</h4>
              <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <select class="form-control"  name="report_id" v-model="reportform_id">
                <option value="">Select domain to report</option>
                <option v-for="form in report_forms" :value="form.id">{{form.spoof_domain.name}}</option>
              </select>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn  btn-warning rounded-button" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning rounded-button" data-dismiss="modal" @click="updateDomain">Confirm</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

  </template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import ReportDomainOrganization from './ReportDomainOrganization.vue';

// Declare reactive variables
const reporting_organizations = ref([]);
const domain = ref({});
const spoof_domain = ref({});
const reportform_id = ref('');
const report_forms = ref([]);

// Load data on component mount
onMounted(async () => {
  await loadData();
});

// Function to load data
const loadData = async () => {
  const response = await axios.get(`/api/reporting_organizations`);
  reporting_organizations.value = response.data.data.reporting_organizations;

  const reportFormsResponse = await axios.get(`/api/report_forms`);
  report_forms.value = reportFormsResponse.data.data.report_forms;
};

// Function to update domain
const updateDomain = async () => {
  const response = await axios.get(`/api/report_forms/${reportform_id.value}`);
  domain.value = response.data.data.report_form.domain;
  spoof_domain.value = response.data.data.report_form.spoof_domain;
};
</script>
