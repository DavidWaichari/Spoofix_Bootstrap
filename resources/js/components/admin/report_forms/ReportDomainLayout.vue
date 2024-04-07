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
              <button type="button" class="btn btn-danger ml-2 rounded-button " data-toggle="modal" data-target="#modal-warning" style="height: 100%; font-size: 12px;">
                    Request Take Down
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
              Domain to safeguard: facebook.com
            </h3>
          </div>
          <div class="card-body">
            <h4>Domain to report: faceeebook.com</h4>
            <div class="row">
              <div class="col-5 col-sm-3 bg-warning p-2">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-google-safe-browsing-tab" data-toggle="pill" href="#vert-tabs-google-safe-browsing" role="tab" aria-controls="vert-tabs-google-safe-browsing" aria-selected="false">Google Safe Browsing  <i class="fas fa-check"></i></a>
                  <a class="nav-link" id="vert-tabs-microsoft-tab" data-toggle="pill" href="#vert-tabs-microsoft" role="tab" aria-controls="vert-tabs-microsoft" aria-selected="false">Microsoft <i class="fas fa-times"></i></a>
                  <a class="nav-link" id="vert-tabs-cloudfare-tab" data-toggle="pill" href="#vert-tabs-cloudfare" role="tab" aria-controls="vert-tabs-cloudfare" aria-selected="false">Cloudfare</a>
                  <a class="nav-link " id="vert-tabs-phishing-database-tab" data-toggle="pill" href="#vert-tabs-phishing-database" role="tab" aria-controls="vert-tabs-phishing-database" aria-selected="true">Phishing Database</a>
                  <a class="nav-link " id="vert-tabs-global-cyber-tab" data-toggle="pill" href="#vert-tabs-global-cyber" role="tab" aria-controls="vert-tabs-global-cyber" aria-selected="true">Global Cyber Alliance</a>
                  <a class="nav-link " id="vert-tabs-fortguard-tab" data-toggle="pill" href="#vert-tabs-fortguard" role="tab" aria-controls="vert-tabs-fortguard" aria-selected="true">Fortguard</a>
                  <a class="nav-link " id="vert-tabs-bright-cloud-tab" data-toggle="pill" href="#vert-tabs-bright-cloud" role="tab" aria-controls="vert-tabs-bright-cloud" aria-selected="true">BrightCloud</a>
                  <a class="nav-link " id="vert-tabs-crdf-tab" data-toggle="pill" href="#vert-tabs-crdf" role="tab" aria-controls="vert-tabs-crdf" aria-selected="true">CRDF</a>
                  <a class="nav-link " id="vert-tabs-netcraft-tab" data-toggle="pill" href="#vert-tabs-netcraft" role="tab" aria-controls="vert-tabs-netcraft" aria-selected="true">Netcraft</a>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade active show" id="vert-tabs-google-safe-browsing" role="tabpanel" aria-labelledby="vert-tabs-google-safe-browsing-tab">
                     <GoogleSafeBrowsing></GoogleSafeBrowsing>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-microsoft" role="tabpanel" aria-labelledby="vert-tabs-microsoft-tab">
                     <Microsoft></Microsoft>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-cloudfare" role="tabpanel" aria-labelledby="vert-tabs-cloudfare-tab">
                     <Cloudfare></Cloudfare>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-phishing-database" role="tabpanel" aria-labelledby="vert-tabs-phishing-database-tab">
                     <PhishingDatabase></PhishingDatabase>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-global-cyber" role="tabpanel" aria-labelledby="vert-tabs-global-cyber-tab">
                     <GlobalCyberAlliance></GlobalCyberAlliance>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-fortguard" role="tabpanel" aria-labelledby="vert-tabs-fortguard-tab">
                     <Fortguard></Fortguard>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-bright-cloud" role="tabpanel" aria-labelledby="vert-tabs-bright-cloud-tab">
                     <BrightCloud></BrightCloud>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-crdf" role="tabpanel" aria-labelledby="vert-tabs-crdf-tab">
                     <CRDF></CRDF>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-netcraft" role="tabpanel" aria-labelledby="vert-tabs-netcraft-tab">
                     <Netcraft></Netcraft>
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
              <h4 class="modal-title text-warning">Confirm Takedown</h4>
              <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to report this domain for takedown?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn  btn-warning rounded-button" data-dismiss="modal">Close</button>

              

              <RouterLink :to="`/user/domains/${domain_id}/spoofed_domains/${spoof_domain_id}/take_down_request`">
                <button type="button" class="btn btn-warning rounded-button" data-dismiss="modal">Take Down</button>
              </RouterLink>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

  </template>
 <script setup>
 import GoogleSafeBrowsing from './GoogleSafeBrowsing.vue';
 import Microsoft from './Microsoft.vue';
 import BrightCloud from './BrightCloud.vue';
 import Cloudfare from './Cloudfare.vue';
 import CRDF from './CRDF.vue';
 import Fortguard from './Fortguard.vue';
 import GlobalCyberAlliance from './GlobalCyberAlliance.vue';
 import Netcraft from './Netcraft.vue';
 import PhishingDatabase from './PhishingDatabase.vue';
</script>
  