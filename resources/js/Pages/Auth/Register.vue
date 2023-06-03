<script setup>
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import HeaderWrap from '@/Components/SiteHeader/HeaderWrap.vue';
import FooterWrap from '@/Components/Footer/FooterWrap.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
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
                <h1>Register Now</h1>
                
                <center><hr></center>
              </div>
            </div>
        </div>
    </div>
    

  </section>
  <!-- /HOME -->

<Head title="Register" />


      <!-- GENERAL SUBPAGE | Register -->
  <section class="srcj-subpage register" id="srcjSubpage">
    <div class="container">
        <div class="register-wrapper">
            <h2 class="text-center mb-std">Create an account</h2>
            <form class="row general-form form-register" @submit.prevent="submit">
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="First Name"
                        id="first_name"
                        v-model="form.first_name"
                        required
                        autofocus
                        autocomplete="first_name"
                    >
                    <InputError class="mt-2" :message="form.errors.first_name" />
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="Last Name"
                        id="last_name"
                        v-model="form.last_name"
                        required
                        autofocus
                        autocomplete="last_name"
                    >
                    <InputError class="mt-2" :message="form.errors.last_name" />
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="Email"
                        id="email"
                        v-model="form.email"
                        required
                        autocomplete="username"
                    >
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" placeholder="Phone Number"
                        id="phone"
                        v-model="form.phone"
                        required
                        autocomplete="phone"
                    >
                    <InputError class="mt-2" :message="form.errors.phone" />
                </div>
                <div class="form-group col-lg-6">
                    <input class="form-control" type="password" placeholder="Password"
                        id="password"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                    >
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <div class="form-group col-lg-6">

                    <input class="form-control" type="password" placeholder="Confirm Password"
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                    >
                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>
                <div class="form-group col-lg-12 text-center">
                    <a :href="route('/')" class="btn-srcj transblack">Back</a>
                    

                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Register
                    </PrimaryButton>
                </div>
                <div class="form-group col-lg-12 text-center mar-off">
                    I have an account? <a class="fwt600" :href="route('login')">Login Now</a>
                </div>
            </form>
        </div>

    </div>
  </section>
  <!-- /GENERAL SUBPAGE | Register -->

  <FooterWrap />
</template>
