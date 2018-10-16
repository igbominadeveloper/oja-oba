<template>
<div class="section">
  <!-- Container -->
  <div class="container">
      <!-- Authentication Layout -->
      <div class="columns account-header is-auth">
          <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
              <!-- Title -->
              <div class="auth-title">
                  <router-link to="/" tagName="div"
                  class="button feather-button is-small primary-button upper-button raised is-hidden-mobile">
                    <span>Home</span>
                  </router-link>
                  <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
              </div>
              <!-- Card -->
              <div class="flat-card is-auto is-auth-form">
                  <div class="columns is-gapless is-flex-mobile">
                      <!-- Image Columns -->
                      <div class="column is-6 has-text-centered image-column is-padded">
                          <div class="store-wrapper">
                              <img src="assets/images/logo/nephos-white.svg" alt="">
                              <div class="title">
                                  Nephos
                              </div>
                              <div class="subtitle">An unforgetable Customer Experience</div>
                          </div>
                          <div class="nephos-overlay"></div>
                      </div>
                      <!-- Login/Register form -->
                      <div class="column is-6 is-mobile-padded">
                          <div class="tabs-wrapper animated-tabs">
                              <!-- Tabs -->
                              <div class="tabs is-form-tabs">
                                  <ul>
                                    <li @click="isActive = true">
                                      <a>Login</a>
                                    </li>
                                    <li @click="isActive = false">
                                      <a>Register</a>
                                    </li>
                                  </ul>
                              </div>
                              <!-- Login Form -->
                              <div id="login" class="navtab-content" :class="{'is-active' : isActive}">
                                <form @submit.prevent="login" @keydown="form.errors.clear($event.target.name)">
                                    <!-- Form Control -->
                                    <div class="control">
                                        <label class="auth-label">Email*</label>
                                        <input type="text" name="email" class="input" placeholder="Email Address" v-model="form.email">
                                    </div>
                                    <span class="help is-danger" v-if="form.errors.hasAny('email')" v-text="form.errors.get('mail')"></span>
                                    <!-- Form Control -->
                                    <div class="control">
                                        <label class="auth-label">Password*</label>
                                        <input type="password" name="password" class="input" placeholder="password" v-model="form.password">
                                    </div>
                                    <span class="help is-danger" v-if="form.errors.hasAny('password')" v-text="form.errors.get('password')"></span>
                                    <!-- Form Control -->
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="house" type="checkbox" class="d-checkbox" checked="">
                                            <span></span>
                                            <small>Remember me?</small>
                                        </label>
                                    </div>
                                    <!-- Form Submit -->
                                    <div class="button-wrapper">
                                        <button type="submit" class="button feather-button is-small primary-button upper-button raised" :disabled="form.errors.any()">
                                            <span>Login</span>
                                        </button>
                                        <a class="forgotten">Forgot Password ?</a>
                                    </div>
                                </form>
                              </div>

                              <!-- Register Form -->
                              <div id="register" class="navtab-content" :class="{'is-active' : !isActive}">
                                  <form>
                                      <!-- Form Control -->
                                      <div class="control">
                                          <label class="auth-label">Email*</label>
                                          <input type="email" class="input" placeholder="">
                                      </div>
                                      <!-- Form Control -->
                                      <div class="control">
                                          <label class="auth-label">Password*</label>
                                          <input type="password" class="input" placeholder="">
                                      </div>
                                      <!-- Form Control -->
                                      <div class="control">
                                          <label class="auth-label">Confirm Password*</label>
                                          <input type="password" class="input" placeholder="">
                                      </div>
                                      <!-- Form Submit -->
                                      <div class="button-wrapper">
                                          <button type="submit" class="button feather-button is-small primary-button upper-button raised">
                                              <span>Register</span>
                                          </button>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <!-- Card -->
          </div>
      </div>
      <!-- Authentication Layout -->
  </div>
  <!-- /Container -->
</div>
</template>
<script>
import Form from '../../Form.js'
  export default{
    data(){
      return {
        isActive: true,
        form: new Form({
          email:'',
          password:''
        })
      }
    },
    methods:{
      login(){
        this.form.submit()
      }
    }
  }
</script>