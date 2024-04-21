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
import SocialMedia from '../components/user/social_media/SocialMediaList.vue';

// Admin Routes
import AdminLayout from '../components/admin/Layout.vue';
import AdminDashboard from '../components/admin/Dashboard.vue';
import TakeDownRequests from '../components/admin/spoofed_domains/TakeDownRequests.vue';
import ReportDomain from '../components/admin/report_forms/ReportDomain.vue';
import AdminCompleted from '../components/admin/Completed.vue';
import AdminInProgress from '../components/admin/InProgress.vue';
import AdminDomainsLayout from '../components/admin/domains/AdminDomainsLayout.vue';
import DomainsList from '../components/admin/domains/DomainsList.vue';
import AdminSocialMediaLayout from '../components/admin/social_media/SocialMediaLayout.vue';
import ActiveSocialMediaAccounts from '../components/admin/social_media/Active.vue';
import RequestedSocialMediaAccounts from '../components/admin/social_media/Requested.vue';










const routes = [
  {
    path: '/login',
    component: Login,
  },
  {
    path: '/register',
    component: Register,
  },
  // these are the user routes
  {
    path: '/user',
    component: UserLayout,
    children: [
        {
          path: '',
          redirect: '/user/dashboard',
        },
        {
          path: 'dashboard',
          component: UserDashboard,
        },
        {
          path: 'domains',
          component: UserDomainsLayout,
          children:[
            {
              path:'',
              component:UserDomains
            },
            {
              path: ':id/spoofed_domains',
              component: SpoofedDomains,
            },
            {
              path: ':id/spoofed_domains/:spoof_id/details',
              component: SpoofedDomainDetails,
              children:[
                {
                  path:'scan_details',
                  component: ScanDetails
                },
                {
                  path:'page_statistics',
                  component: PageStatistics
                },
                {
                  path:'domain_details',
                  component: DomainDetails
                },
                {
                  path:'location',
                  component: DomainLocation
                },
                {
                  path:'screenshot',
                  component: DomainScreenshot
                },
                {
                  path:'http_redirects',
                  component: HttpRedirects
                },
                {
                  path:'risk_rating',
                  component: RiskRating
                }
              ]
            },
            {
              path: ':id/spoofed_domains/:spoof_id/take_down_request',
              component: TakeDownRequest,
            },
          ]
        },
        {
          path: 'in_progress',
          component: InProgress,
        },
        {
          path: 'completed',
          component: Completed,
        },
        {
          path: 'social_media_accounts',
          component: SocialMedia,
        },
        {
          path: 'mailbox',
          component: MailBoxLayout,
          children:[
            {
              path: '',
              redirect: '/user/mailbox/inbox',
            },
            {
              path:'inbox',
              component: Inbox
            },
            {
              path:'compose',
              component: Compose
            },
            {
              path:'inbox/:id/read',
              component: ReadMail
            },
          ]

        },
        {
          path: 'report_form',
          component: TakeDownRequest,
        },
      ],
  },
  // Admin Routes
  {
    path: '/admin',
    component: AdminLayout,
    children: [
        {
          path: '',
          redirect: '/admin/dashboard',
        },
        {
          path: 'dashboard',
          component: AdminDashboard,
        },
        {
          path: 'take_down_requests',
          component: TakeDownRequests,
        },
        {
          path: 'completed',
          component: AdminCompleted,
        },
        {
          path: 'in_progress',
          component: AdminInProgress,
        },
        {
          path: 'report_form/:report_id',
          component: ReportDomain,
        },

        {
          path: 'domains',
          component: AdminDomainsLayout,
          children:[
            {
              path:'',
              component:DomainsList
            },
            {
              path: ':id/spoofed_domains',
              component: SpoofedDomains,
            },
            {
              path: ':id/spoofed_domains/:spoof_id/details',
              component: SpoofedDomainDetails,
              children:[
                {
                  path:'scan_details',
                  component: ScanDetails
                },
                {
                  path:'page_statistics',
                  component: PageStatistics
                },
                {
                  path:'domain_details',
                  component: DomainDetails
                },
                {
                  path:'location',
                  component: DomainLocation
                },
                {
                  path:'screenshot',
                  component: DomainScreenshot
                },
                {
                  path:'http_redirects',
                  component: HttpRedirects
                },
                {
                  path:'risk_rating',
                  component: RiskRating
                }
              ]
            },
            {
              path: ':id/spoofed_domains/:spoof_id/take_down_request',
              component: TakeDownRequest,
            },
          ]
        },
        {
          path:'social_media_accounts',
          component:AdminSocialMediaLayout,
        }
        
      ],
  },
  // Wildcard route to catch all undefined routes and redirect to /page_not_found
  // {
  //   path: '/:catchAll(.*)',
  //   redirect: () => {
  //     window.location.href = '/page_not_found';
  //   }
  // }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;