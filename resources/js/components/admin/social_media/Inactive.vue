<template>
    <div>
  <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
          <h4>Inactive accounts</h4>
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
                <button type="button" class="btn btn-sm btn-outline-warning  rounded-button mr-2" >Spoofing accounts</button>
                <button type="button" class="btn btn-sm btn-outline-danger  rounded-button mr-2" @click.prevent="activateAccount(item.id)">Activate</button>
              </div>
            </template>
          </EasyDataTable>
        </div>
      </section>
      <!-- /.content -->
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
          const response = await axios.get(`/api/social_media_accounts/inactive`);
          items.value = response.data.data.social_media_accounts;
          loading.value = false;
          // console.log(response)
        };

        const activateAccount = async(id) =>{
          const response = await axios.post(`/api/social_media_accounts/activate_account`,{
            account_id:id
          });
          loadData()
        }
  
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
    
  