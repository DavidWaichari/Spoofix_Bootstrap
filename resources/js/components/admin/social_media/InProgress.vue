<template>
    <div>
  <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <h4>In progress spoofing accounts</h4>
                </div>
            </div>
          <EasyDataTable
            show-index
            buttons-pagination
            :headers="headers"
            :items="items"
            :loading="loading"
            :theme-color="'#42b883'"
            :rows-items="[10, 25, 50,100,500,1000]"
            :rows-per-page="5"
            table-class-name="customize-table"
          >
            <template #loading>
              <h1>Loading...</h1>
            </template>
            <template #item-action="item">
              <div class="action-wrapper">
                <a  target="_blank" :href="item.link" type="button" class="btn btn-outline-primary btn-sm  rounded-button mr-2" >Visit Account</a>
                <button type="button" class="btn btn-sm btn-outline-warning  rounded-button mr-2"  @click.prevent="showReportModal(item)">Take down</button>
              </div>
            </template>
          </EasyDataTable>
        </div>
      </section>
      <!-- /.content -->
    </div>

     <!-- Modal -->
    <div class="modal" id="modal-warning" style="display: block;" v-if="show_takedown_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <form  @submit.prevent="takeDownAccount">
            <div class="modal-header bg-black">
              <h4 class="modal-title text-warning">Take down account</h4>
              <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" @click="closeTakeDownModal">×</span>
              </button>
            </div>
            <div class="modal-body">
                <h4>Are you sure you <strong>{{ selected_account.name }}</strong> has been taken down?</h4>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn  btn-warning rounded-button" @click="closeTakeDownModal">No</button>
              <button type="submit" class="btn btn-warning rounded-button" >Yes</button>
            </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </template>
  
  <script lang="ts" setup>
    import { defineComponent, ref, reactive, onMounted} from "vue";
    import { Header, Item } from "vue3-easy-data-table";
    import axios from 'axios';
    import { useRoute, useRouter } from 'vue-router';
  
    const route = useRoute();
    const router = useRouter();

    const show_takedown_modal = ref(false);
    const social_media_accounts = ref([]);
    const selected_account = ref({});

    

    const showReportModal =  (account) => {
        selected_account.value = account;
        show_takedown_modal.value = true;
    }

    const closeTakeDownModal =  () => {
        selected_account.value = {};
        show_takedown_modal.value = false;
    }

    const takeDownAccount = async() =>{
        await axios.get(`/api/social_media_spoofing_accounts/${selected_account.value.id}/take_down`);
        loadData();
        closeTakeDownModal();
    }

        const headers: Header[] = [
          { text: "Name", value: "name", sortable: true },
          { text: "Account type", value: "account_type" , sortable: true },
          { text: "Account details", value: "account_details" , sortable: true },
          { text: "Date opened", value: "date_opened" , sortable: true },
          { text: "Status", value: "status" , sortable: true },
          { text: "Added on", value: "created_at", sortable: true },
          { text: "Action", value: "action"},
        ];
        const items: Item[] = ref([]);
        const loading = ref(true);
        
        const loadData = async () =>{
          const response = await axios.get(`/api/social_media_spoofing_accounts/inprogress`);
          const socialres = await axios.get(`/api/social_media_accounts`);
          items.value = response.data.data.social_media_spoofing_accounts;
          social_media_accounts.value = socialres.data.data.social_media_accounts;
          loading.value = false;
          // console.log(response)
        };
  
        onMounted(() => {
         loadData()
      });
    </script>
    
    <style>
    .operation-wrapper .operation-icon {
      width: 20px;
      cursor: pointer;
    }
    .player-wrapper {
      padding: 5px;
      display: flex;
      align-items: center;
      justify-items: center;
    }
    .avator {
      margin-right: 10px;
      display: inline-block;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: inset 0 2px 4px 0 rgb(0 0 0 / 10%);
    }
    .customize-table {
  
    --easy-table-border: 1px solid #445269;
    --easy-table-row-border: 1px solid #445269;
  
    --easy-table-header-font-size: 16px;
    --easy-table-header-height: 50px;
    --easy-table-header-font-color: #c1cad4;
    --easy-table-header-background-color: #2d3a4f;
  
    --easy-table-header-item-padding: 10px 15px;
  
    --easy-table-body-even-row-font-color: #fff;
    --easy-table-body-even-row-background-color: #4c5d7a;
  
    --easy-table-body-row-font-color: #c0c7d2;
    --easy-table-body-row-background-color: #2d3a4f;
    --easy-table-body-row-height: 30px;
    --easy-table-body-row-font-size: 16px;
  
    --easy-table-body-row-hover-font-color: #2d3a4f;
    --easy-table-body-row-hover-background-color: #f5e9a3;
  
    --easy-table-body-item-padding: 5px 10px;
  
    --easy-table-footer-background-color: #2d3a4f;
    --easy-table-footer-font-color: #c0c7d2;
    --easy-table-footer-font-size: 14px;
    --easy-table-footer-padding: 0px 10px;
    --easy-table-footer-height: 50px;
  
    --easy-table-rows-per-page-selector-width: 70px;
    --easy-table-rows-per-page-selector-option-padding: 10px;
    --easy-table-rows-per-page-selector-z-index: 1;
  
  
    --easy-table-scrollbar-track-color: #2d3a4f;
    --easy-table-scrollbar-color: #2d3a4f;
    --easy-table-scrollbar-thumb-color: #4c5d7a;;
    --easy-table-scrollbar-corner-color: #2d3a4f;
  
    --easy-table-loading-mask-background-color: #2d3a4f;
  }
    </style>
    
  