<template>
   <div class="login-page" style="min-height: 400px;">
        <div class="register-box" style="min-width:400px">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center bg-black">
        <span class="brand-text font-weight-bold text-xl" style="font-size: 40px !important"><span class="text-warning">Spoo</span><span style="color: white;">fix</span></span>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <p class="text-danger text-center">{{ error }}</p>
      <form method="post" @submit.prevent="login">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" v-model="form.email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" v-model="form.password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <RouterLink to="/register" class="text-center">Register a new membership</RouterLink>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
</div>
</template>

<script>
import axios from 'axios';

export default{
    data(){
        return{
            form:{
                'email':'',
                'password': ''
            },
            'error':''
        }
    },
    methods:{
        async login(){
          try {
          const response = await axios.post('/api/auth/login', this.form);
          
          // Extract the token and user from the response
          const token = response.data.data.token;
          const user = response.data.data.user;

          // Save the token and user to local storage
          localStorage.setItem('token', token);
          localStorage.setItem('user', JSON.stringify(user)); // Serialize user object to JSON string
          localStorage.setItem('user_id', user.id);
          
          // Redirect or perform other actions after successful login
          this.$router.push('/user/dashboard');
          } catch (error) {
              console.error('Login failed:', error.response.data.message);
              this.error = error.response.data.message;
          }
        }
    }
}
</script>