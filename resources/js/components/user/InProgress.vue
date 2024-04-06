<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">In progress</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">In progress</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
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
          <template #item-operation="item">
            <div class="operation-wrapper">
              <button type="button" class="btn btn-block btn-outline-warning btn-md rounded-button" @click="downloadAttachments(item)" v-if="item.has_attachments">Download</button>
              <p  v-else>Unavailable</p>
              <!-- <button class="btn btn-warning btn-rounded" @click="downloadAttachments(item)">View</button> -->
            </div>
          </template>
        </EasyDataTable>
      </div>
    </section>
  </div>
</template>

<script lang="ts" setup>
  import { defineComponent, ref, reactive, onMounted} from "vue";
  import { Header, Item } from "vue3-easy-data-table";
  import axios from 'axios';
  import { useRoute, useRouter } from 'vue-router';

  const route = useRoute();
  const router = useRouter();


      const headers: Header[] = [
        { text: "My domain", value: "domain.name", sortable: true },
        { text: "Domain reported", value: "spoof_domain.name" , sortable: true },
        { text: "Abuse type", value: "abuse_type" , sortable: true },
        { text: "Notes", value: "notes" , sortable: true },
        { text: "Carbon copy(cc)", value: "carbon_copy" , sortable: true },
        { text: "Status", value: "status", sortable: true },
        { text: "Attachments", value: "operation"},
      ];
      const items: Item[] = ref([]);
      const loading = ref(true);
      
      const loadData = async () =>{
        const response = await axios.get(`/api/report_forms/user`);
        items.value = response.data.data.user_report_forms;
        loading.value = false;
        // console.log(response)
      };

      onMounted(() => {
       loadData()
    });

      const downloadAttachments = async (item) => {
        try {
        const response = await axios.get(`/api/download_report_form_attachment/${item.id}`, {
            responseType: 'blob', // Set response type to blob
        });

          // Create a blob URL for the file
          const blob = new Blob([response.data]);

          // Create a link element to trigger the download
          const link = document.createElement('a');
          link.href = window.URL.createObjectURL(blob);
          link.download = 'reportform.zip'; // Specify the download filename
          link.click();

          } catch (error) {
              console.error('Error downloading attachments:', error);
              // Handle error if needed
          }
      };
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
  
