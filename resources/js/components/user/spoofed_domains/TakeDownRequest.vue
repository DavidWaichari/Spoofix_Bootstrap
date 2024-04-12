<template>
  <div>
    <div class="content-header">
      <div class="container-fluid">
        <!-- Content Header (Page header) -->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Take Down Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Domains</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" style="background-color: #fef9c3; margin-bottom: 10px;">
          <div class="col-md-6">
            <p class="m-2">facebook.com</p>
          </div>
          <div class="col-md-6">
            <p class="text-danger m-2">High Risk</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header bg-black">
                <h3 class="card-title">Take Down Form</h3>
              </div>
              <!-- form start -->
              <form class="form-horizontal" @submit.prevent="submitForm" enctype="multipart/form-data">
                <div class="card-body bg-yellow">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Domain Name *</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="domain_id" @change="loadSpoofDomains" v-model="form.domain_id">
                        <option value="">...Choose domain to safeguard...</option>
                        <option v-for="domain in domains" :key="domain.id" :value="domain.id">{{domain.name}}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Report Domain *</label>
                    <div class="col-sm-8">
                      <select class="form-control" v-model="form.spoof_id">
                        <option value="">...Choose domain to report...</option>
                        <option v-for="domain in spoof_domains" :key="domain.id" :value="domain.id">{{domain.name}}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Abuse Type *</label>
                    <div class="col-sm-8">
                      <select class="form-control" v-model="form.abuse_type" name="abuse_type">
                        <option value="">...Choose abuse type...</option>
                        <option value="Spoofing">Spoofing</option>
                        <option value="Phishing">Phishing</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Additional Notes</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="5" placeholder="" v-model="form.notes" name="notes"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Carbon Copy (CC) the Request</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="john@example.com" v-model="form.carbon_copy" name="carbon_copy">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fileInput" class="col-sm-4 col-form-label">Attachments</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="fileInput" ref="fileInput" @change="handleFileChange" multiple name="media[]">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" v-model="form.is_confirmed" id="confirmCheckbox">
                        <label class="form-check-label" for="confirmCheckbox">I confirm that the website I am reporting is a fake, phishing, or spoofing site. I understand that false reports can harm legitimate websites and agree to report only suspicious websites that I am certain about. I take full responsibility for this report</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer bg-black">
                  <button type="button" class="btn btn-primary rounded-button" @click="resetForm">Cancel</button>
                  <button type="submit" class="btn btn-warning rounded-button float-right">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header bg-black">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn color-white"></i>
                  Details
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body bg-warning">
                <div class="callout callout-success">
                  <h5>I am a success callout!</h5>
                  <p>This is a green callout.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const spoof_domains = ref([]);
const form = ref({
  domain_id: '',
  spoof_id: '',
  abuse_type: '',
  notes: '',
  carbon_copy: '',
  is_confirmed: false,
  media: [], // Added for file attachment
});

const domains = ref([]);

onMounted(async () => {
  const response = await axios.get(`/api/user_domains/${localStorage.getItem('user_id')}`);
  domains.value = response.data.data.domains;
});

const loadSpoofDomains = async () => {
  const response = await axios.get(`/api/domains/${form.value.domain_id}/spoofed_domains`);
  spoof_domains.value = response.data.data.spoofed_domains;
};

const handleFileChange = (e) => {
  form.value.media = []; // Clear the media array before appending new files
  const files = e.target.files;
  for (let i = 0; i < files.length; i++) {
    form.value.media.push(files[i]);
  }
};

const submitForm = async () => {
  try {
    const formData = new FormData();

    // Append form fields
    for (const key in form.value) {
      if (Array.isArray(form.value[key])) {
        for (let i = 0; i < form.value[key].length; i++) {
          formData.append(key + '[]', form.value[key][i]);
        }
      } else {
        formData.append(key, form.value[key]);
      }
    }

    // Append attachments
    for (let i = 0; i < form.value.media.length; i++) {
      formData.append('media[]', form.value.media[i]);
    }

    const response = await axios.post('/api/report_forms', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });

    // Handle response
    console.log(response.data);
    if (response.data.status === 'success') {
      resetForm();
      router.push('/user/in_progress')
    } else {
      console.error('Error submitting form:', response.data.message);
    }
  } catch (error) {
    console.error('Error submitting form:', error);
  }
};

const resetForm = () => {
  form.value = {
    domain_id: '',
    spoof_id: '',
    abuse_type: '',
    notes: '',
    carbon_copy: '',
    is_confirmed: false,
    media: [],
  };
};

</script>
