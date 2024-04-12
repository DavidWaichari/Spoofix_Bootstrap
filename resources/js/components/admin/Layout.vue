<template>
    <div>
      <!-- Navbar -->
      <<nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link p-0 m-0" data-toggle="dropdown" href="#">
              <div class="user-panel mt-0 p-0 mb-0 d-flex">
              <div class="image">
                <img :src="'/admin-site/dist/img/user2-160x160.jpg'" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                {{user.name}} [Admin] 
              </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
              <span class="dropdown-item dropdown-header">Welcome David</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
               Profile
                <span class="float-right text-muted text-sm">
                  <i class="fas fa-user mr-2"></i> 
                </span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
               Logout
                <span class="float-right text-muted text-sm">
                  <i class="fas fa-lock mr-2"></i> 
                </span>
              </a>
            </div>
          </li>
        </ul>
  
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#">
              <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- /.navbar -->
  
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="text-center m-0">
          <span class="d-block mx-auto text-warning font-weight-bold" style="font-size: 40px;">Spoo<span style="color: white;">fix</span></span>
        </div>     <!-- Sidebar -->
        <div class="sidebar mt-1">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false">
              <li class="nav-item">
                <RouterLink to="/admin/dashboard" class="nav-link" active-class="active-nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p class="text-lg">Dashboard</p>
                </RouterLink>
              </li>
              <li class="nav-item">
                <RouterLink to="/admin/take_down_requests" class="nav-link" active-class="active-nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p class="text-lg">Requests</p>
                </RouterLink>
              </li>
              <li class="nav-item">
                <RouterLink to="/user/domains" class="nav-link" active-class="active-nav-link">
                  <i class="nav-icon fas fa-list"></i>
                  <p class="text-lg">Domains</p>
                </RouterLink>
              </li>
              <li class="nav-item">
                <RouterLink to="/user/in_progress" class="nav-link" active-class="active-nav-link">
                  <i class="nav-icon fas fa-spinner"></i>
                  <p class="text-lg">In Progress</p>
                </RouterLink>
              </li>
              <li class="nav-item">
                <RouterLink to="/admin/completed" class="nav-link" active-class="active-nav-link">
                  <i class="nav-icon fas fa-check"></i>
                  <p class="text-lg">Completed</p>
                </RouterLink>
              </li>
              <li class="nav-item">
                <RouterLink to="/user/mailbox" class="nav-link" active-class="active-nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p class="text-lg">MailBox</p>
                </RouterLink>
              </li>
              <li class="nav-item">
                <RouterLink to="/user/domains" class="nav-link" active-class="active-nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p class="text-lg">Users</p>
                </RouterLink>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <router-view></router-view>
      </div>
      <!-- /.content-wrapper -->
  
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
  
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
  </template>
  
  <script setup>
  import { RouterLink } from 'vue-router';
  import { ref } from 'vue';
  
  const isDropdownOpen = ref(false);
  const user = JSON.parse(localStorage.getItem('user'));

  const toggleDropdown = () => {
    isDropdownOpen.value = !isDropdownOpen.value;
  };
  </script>
  
  <style scoped>
  .active-nav-link {
    color: rgb(255,193,7) !important;
    font-weight: bold !important;
  }
  </style>
  