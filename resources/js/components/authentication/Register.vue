<template>
    <div class="login-page" style="min-height: 400px;">
        <div class="register-box" style="min-width:400px">
  <div class="card card-outline card-primary">
    <div class="card-header text-center bg-black">
        <span class="brand-text font-weight-bold text-xl" style="font-size: 40px !important"><span class="text-warning">Spoo</span><span style="color: white;">fix</span></span>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>
        <p v-for="error in errors" class="text-danger text-center">{{ error }}</p>
      <form @submit.prevent="register" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Organization" name="organization" v-model="form.organization">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" v-model="form.name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" v-model="form.email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Domains[e.g xyz.com,abc.com]" name="domains" v-model="form.domains">
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
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" v-model="form.password_confirmation">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <RouterLink to="/login" class="text-center">I already have a membership</RouterLink>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
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
                'name':'',
                'email':'',
                'password': '',
                'password_confirmation':'',
                'organization':'',
                'domains':'',
            },
            'errors':{}
        }
    },
    methods:{
        async register(){
            try {
                const response = await axios.post('/api/auth/register', this.form);
                
                // Extract the token from the response
                const token = response.data.data.token;
                const user = response.data.data.user

                // Save the token to local storage
                localStorage.setItem('token', token);
                localStorage.setItem('user', JSON.stringify(user));                 // Redirect or perform other actions after successful register
                this.$router.push('/user/dashboard');
            } catch (error) {
                console.error('register failed:', error.response.data.errors);
                this.errors = error.response.data.errors
             }
        }
    }
}
</script>