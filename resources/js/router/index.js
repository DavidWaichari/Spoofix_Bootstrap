import { createRouter, createWebHistory } from 'vue-router';
//authentication
import Register from '../components/authentication/Register.vue';
import Login from '../components/authentication/Login.vue';

// User Routes
import UserLayout from '../components/user/Layout.vue';
import UserDashboard from '../components/user/Dashboard.vue';
import Completed from '../components/user/Completed.vue';
import InProgress from '../components/user/InProgress.vue';

import MailBoxLayout from '../components/user/mailbox/MailBoxLayout.vue';
import Inbox from '../components/user/mailbox/Inbox.vue';
import Compose from '../components/user/mailbox/Compose.vue';
import ReadMail from '../components/user/mailbox/ReadMail.vue';


import UserDomains from '../components/user/domains/UserDomains.vue';
import UserDomainsLayout from '../components/user/domains/UserDomainsLayout.vue';
import SpoofedDomains from '../components/user/spoofed_domains/SpoofedDomainsList.vue';
import SpoofedDomainDetails from '../components/user/spoofed_domains/SpoofedDomainDetails.vue';
import ScanDetails from '../components/user/spoofed_domains/ScanDetails.vue';
import PageStatistics from '../components/user/spoofed_domains/PageStatistics.vue';
import DomainDetails from '../components/user/spoofed_domains/DomainDetails.vue';
import DomainLocation from '../components/user/spoofed_domains/DomainLocation.vue';
import DomainScreenshot from '../components/user/spoofed_domains/DomainScreenshot.vue';
import HttpRedirects from '../components/user/spoofed_domains/HttpRedirects.vue';
import RiskRating from '../components/user/spoofed_domains/RiskRating.vue';
import TakeDownRequest from '../components/user/spoofed_domains/TakeDownRequest.vue';

// Admin Routes
import AdminLayout from '../components/admin/Layout.vue';
import AdminDashboard from '../components/admin/Dashboard.vue';
import TakeDownRequests from '../components/admin/spoofed_domains/TakeDownRequests.vue';




const routes = [
  {
    path: '/login',
    name: 'Login',
    component: Login,
  },
  {
    path: '/register',
    name: 'Register',
    component: Register,
  },
  // these are the user routes
  {
    path: '/user',
    name: 'UserLayout',
    component: UserLayout,
    children: [
        {
          path: '',
          name:'UserHome',
          redirect: '/user/dashboard',
        },
        {
          path: 'dashboard',
          name: 'UserDashboard',
          component: UserDashboard,
        },
        {
          path: 'domains',
          name: 'UserDomainsLayout',
          component: UserDomainsLayout,
          children:[
            {
              path:'',
              name:'Domains',
              component:UserDomains
            },
            {
              path: ':id/spoofed_domains',
              name: 'SpoofedDomains',
              component: SpoofedDomains,
            },
            {
              path: ':id/spoofed_domains/:spoof_id/details',
              name: 'SpoofedDomainDetails',
              component: SpoofedDomainDetails,
              children:[
                {
                  path:'scan_details',
                  name:'ScanDetails',
                  component: ScanDetails
                },
                {
                  path:'page_statistics',
                  name:'PageStatistics',
                  component: PageStatistics
                },
                {
                  path:'domain_details',
                  name:'DomainDetails',
                  component: DomainDetails
                },
                {
                  path:'location',
                  name:'DomainLocation',
                  component: DomainLocation
                },
                {
                  path:'screenshot',
                  name:'DomainScreenshot',
                  component: DomainScreenshot
                },
                {
                  path:'http_redirects',
                  name:'HttpRedirects',
                  component: HttpRedirects
                },
                {
                  path:'risk_rating',
                  name:'RiskRating',
                  component: RiskRating
                }
              ]
            },
            {
              path: ':id/spoofed_domains/:spoof_id/take_down_request',
              name: 'TakeDownRequest',
              component: TakeDownRequest,
            },
          ]
        },
        {
          path: 'in_progress',
          name: 'InProgress',
          component: InProgress,
        },
        {
          path: 'completed',
          name: 'Completed',
          component: Completed,
        },
        {
          path: 'mailbox',
          name: 'MailBoxLayout',
          component: MailBoxLayout,
          children:[
            {
              path: '',
              name:'Mailbox',
              redirect: '/user/mailbox/inbox',
            },
            {
              path:'inbox',
              name:'Inbox',
              component: Inbox
            },
            {
              path:'compose',
              name:'Compose',
              component: Compose
            },
            {
              path:'inbox/:id/read',
              name:'ReadMail',
              component: ReadMail
            },
          ]

        },
        {
          path: 'report_form',
          name: 'ReportForm',
          component: TakeDownRequest,
        },
      ],
  },
  // Admin Routes
  {
    path: '/admin',
    name: 'AdminLayout',
    component: AdminLayout,
    children: [
        {
          path: '',
          name:'AdminHome',
          redirect: '/admin/dashboard',
        },
        {
          path: 'dashboard',
          name: 'AdminDashboard',
          component: AdminDashboard,
        },
        {
          path: 'take_down_requests',
          name: 'TakeDownRequests',
          component: TakeDownRequests,
        },
        
      ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;