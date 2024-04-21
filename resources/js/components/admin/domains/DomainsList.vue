<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0">Domains</h1>
          </div>
          <div class="col-sm-4">
            <!-- <button type="button" class="btn btn-warning ml-2 rounded-button float-right" style="height: 100%; font-size: 12px;" @click.prevent="showModal">
               Add Domain
            </button> -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
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
    <!-- Modal -->
    <div class="modal" id="modal-warning" style="display: block;" v-if="show_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <form  @submit.prevent="addDomain">
            <div class="modal-header bg-black">
              <h4 class="modal-title text-warning">Add Domain</h4>
              <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" @click="closeModal">×</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="text" class="form-control" placeholder="Enter valid domain" name="name" v-model="form.name" required>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn  btn-warning rounded-button" @click="closeModal">Close</button>
              <button type="submit" class="btn btn-warning rounded-button" >Submit</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.content -->
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { useRoute, useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();
const show_modal = ref(false)
const domains = ref([]);
const form = ref({
  name: ''
});

const loadData = async () => {
  const response = await axios.get(`/api/domains`);
  domains.value = response.data.data.domains;
};

const addDomain = async() => {
  await axios.post(`/api/domains`, form.value);
  loadData();
  show_modal.value = false
  form.value.name = ''
};
const showModal = () =>{
  show_modal.value = true;
};

const closeModal = () =>{
  show_modal.value = false;
};

onMounted(() => {
  loadData();
});
</script>

<style>
.rounded-button {
  border-radius: 20px;
}
</style>
