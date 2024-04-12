<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="m-0">Report Form</h1>
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
              Domain to safeguard: {{ domain.name }}
            </h3>
          </div>
          <div class="card-body">
            <h4>Domain to report: {{ spoof_domain.name }}</h4>
            <div class="row">
              <div class="col-5 col-sm-3 bg-warning p-2">
                <div class="nav flex-column nav-tabs h-100"   aria-orientation="vertical">
                  <button style="text-align: left" :class="organization.id === 1 ? 'nav-link  btn-btn-primary': 'nav-link btn-btn-primary'" v-for="organization in reporting_organizations" @click="selectOrganization(organization)">{{organization.name}}</button>
                </div> 
              </div>
              <div class="col-7 col-sm-9">
                <div id="app" class="container">
                  <div class="card card-warning card-tabs">
                    <div class="card-header p-0 pt-1">
                      <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3"><h3 class="card-title">Report to {{reporting_organization.name}}</h3></li>
                        <li class="nav-item">
                          <a class="nav-link" id="custom-tabs-two-form-tab" data-toggle="pill" href="#custom-tabs-two-form" role="tab" aria-controls="custom-tabs-two-form" aria-selected="false">Form</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="true">Email</a>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content" id="custom-tabs-two-tabContent">
                        <div class="tab-pane fade" id="custom-tabs-two-form" role="tabpanel" aria-labelledby="custom-tabs-two-form-tab">
                          <p>Guide to Report url to {{reporting_organization.name}}:</p>
                          <ol>
                            <li>Visit the <a type="button" :href="reporting_organization.form_url" v-if="reporting_organization.form_url" target="_blank">{{reporting_organization.name}} Report Form</a>.</li>
                            <li>Fill out the form with the following details:</li>
                            <ul>
                              <li>URL of the spoofy site: {{ spoof_domain.name }}</li>
                              <li>Description of the issue: <-- Please copy the below message-->></li>
                            </ul>
                            <li>Submit the form.</li>
                          </ol>
                          <p>Here's a template for the text to send to Google SafeBrowsing:</p>
                          <div class="alert alert-info alert-dismissible">
                            <div style="display: flex; flex-direction: row-reverse;">
                              <button type="button" class="close" @click="copyMessage" aria-hidden="true">
                                <i class="far fa-copy"></i>
                              </button>
                                <span v-if="copyStatus" class="text-success">Message copied!</span>
                            </div>
                            <h5><i class="icon fas fa-info"></i> Message template</h5>
                            
                            I would like to report the website {{ spoof_domain.name }} as a {{report_form.abuse_type}} site. This website is attempting to deceive users by imitating legitimate websites and may pose a threat to their security and privacy. Please investigate and take appropriate action.
                          </div>
                          <button class="btn btn-warning rounded-button" @click.prevent="showModal" v-if="reporting_organization.form_url"> Confirm Report</button>
                        </div>
                        <div class="tab-pane fade active show" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                          email template area
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
  </div>

  <!-- Modal -->
  <div class="modal" id="modal-warning" style="display: block;" v-if="show_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <form  @submit.prevent="reportDomain('Form')">
            <div class="modal-header bg-black">
              <h4 class="modal-title text-warning">Confirm reporting</h4>
              <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" @click="closeModal">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you reported {{ spoof_domain.name }} to {{ reporting_organization.name }} ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn  btn-warning rounded-button" @click="closeModal">No</button>
              <button type="submit" class="btn btn-warning rounded-button" >Yes</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';
import axios from 'axios';
import { useRoute } from 'vue-router';

const route = useRoute();

// Declare reactive variables
const domain = ref({});
const spoof_domain = ref({});
const description = ref('');
const report_form = ref({});
const reporting_organization = ref({});
const org_id = ref(route.params.org_id);
const reporting_organizations = ref([]);
const copyStatus = ref(false); // Variable to track copy status
const show_modal = ref(false)


// Function to load data
const loadData = async () => {
  try {
    const reportorgresponse = await axios.get(`/api/reporting_organizations`);
    reporting_organizations.value = reportorgresponse.data.data.reporting_organizations;

    // Fetch report form data
    const response = await axios.get(`/api/report_forms/${route.params.report_id}`);
    domain.value = response.data.data.report_form.domain;
    report_form.value = response.data.data.report_form;
    spoof_domain.value = response.data.data.report_form.spoof_domain;

    // Fetch reporting organization data
    const reportorgres = await axios.get(`/api/reporting_organizations/1`);
    reporting_organization.value = reportorgres.data.data.reporting_organization; // Corrected property name
  } catch (error) {
    console.error('Error loading data:', error);
  }
};


const selectOrganization = (org) =>{
  reporting_organization.value = org;
};

const copyMessage = () => {
  const message = `I would like to report the website ${spoof_domain.value.name} as a ${report_form.value.abuse_type} site. This website is attempting to deceive users by imitating legitimate websites and may pose a threat to their security and privacy. Please investigate and take appropriate action.`;
  navigator.clipboard.writeText(message).then(() => {
    copyStatus.value = true; // Set copyStatus to true when message is copied
    setTimeout(() => {
      copyStatus.value = false; // Reset copyStatus after a few seconds
    }, 5000); // Reset after 3 seconds
  }).catch((error) => {
    console.error('Error copying message:', error);
  });
};

const showModal = () =>{
  show_modal.value = true;
};

const closeModal = () =>{
  show_modal.value = false;
};

const reportDomain = async(mode) => {
  await axios.post(`/api/domain_reports`, {
    'reporting_org_id': reporting_organization.value.id,
    'report_form_id' : report_form.value.id,
    'reporting_mode': mode, //either Form or Email
  });

  loadData();
  show_modal.value = false
  form.value.name = ''
};
// Load data on component mount
onMounted(() => {
  loadData();
});
</script>
