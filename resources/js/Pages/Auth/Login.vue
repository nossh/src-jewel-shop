<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import HeaderWrap from '@/Components/SiteHeader/HeaderWrap.vue';
import FooterWrap from '@/Components/Footer/FooterWrap.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    copy: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};


</script>

<template>

    <HeaderWrap />

      <!-- HOME -->
  <section class="srcj-home sp abt" id="srcjHome">
    <img src="imgs/products/hb-proddet.jpg" class="img-srcj"/>
   
    <div class="homesp-inner">
        <div class="container-fluid">
            <div class="hsiteminner-inner">
              <div>
                <h1>Login</h1>

                <center><hr></center>
                
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->

        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        

        <!-- GENERAL SUBPAGE | Log in -->
          <section class="srcj-subpage login" id="srcjSubpage">
            <div class="login-wrapper">
                <h4 class="text-center mb-std">Login</h4>
                <form class="general-form form-login" @submit.prevent="submit">
                    <div class="form-group ">
                        <input class="form-control" type="text" placeholder="Email"
                        id="email"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                        >
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Password"
                        id="password"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                        >
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                

                    <div class="form-group flxbx hspsbtw">
                        <!-- <label class="cb-container">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> -->
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                        <div>
                            <a class="fwt600" v-if="canResetPassword"
                                :href="route('password.request')"
                            >
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Login
                        </PrimaryButton>
                    </div>
                    <div class="form-group text-center mar-off">
                        Don't have an account? <a class="fwt600" :href="route('register')">Register Now</a>
                    </div>
                </form>
            </div>
          </section>
          <!-- /GENERAL SUBPAGE | Log in -->

    <FooterWrap v-bind:copy="copy" />
</template>
