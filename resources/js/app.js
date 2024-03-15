import './bootstrap';
import router from '@/router'
import axiosPlugin from './axiosPlugin';
import Vue3EasyDataTable from 'vue3-easy-data-table';
import 'vue3-easy-data-table/dist/style.css';




import { createApp } from 'vue';

const app = createApp({})


app.use(router)
app.use(axiosPlugin)
app.component('EasyDataTable', Vue3EasyDataTable);

app.mount('#app')