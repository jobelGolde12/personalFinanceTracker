<template>
<div class="login-body bg-light d-flex justify-content-center align-items-center">
    <form class="form" @submit.prevent="submitForm">
        <h4 class="text-dark fw-normal text-center">Login</h4>
        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" v-model="formData.username">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="password" v-model="formData.password">
            <i class="bi bi-eye me-2 pt-1 pointer hover" @click="toggleEyeFunc"></i>
            <i class="bi bi-eye-slash me-2 pt-1 pointer hover" @click="toggleEyeFunc"></i>

        </div>

        <button class="btn btn-success" type="submit" @click="loginFunc">Login</button>
        
        <div class="container text-center mt-2">
            <p class="text-muted">Didn't have an account? | <router-link to="/signup">signup</router-link></p>
        </div>

        
    </form>
</div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'login',
    data(){
        return{
            toggleEye: false,
            formData: {
                username: '',
                password: ''
            }
        }
    },
    methods: {
        toggleEyeFunc(){
            let passwordInput = document.getElementById('password')
            let eye = document.querySelector('.bi-eye')
            let eyeSlash = document.querySelector('.bi-eye-slash')

            if(passwordInput.type === 'password'){
                passwordInput.type = 'text'
                eye.style.display = 'block'
                eyeSlash.style.display = 'none'
            }else{
                passwordInput.type = 'password'
                eye.style.display = 'none'
                eyeSlash.style.display = 'block' 
            }
        },
        async loginFunc(){
           await  this.getToken();
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
        },
        async getToken(){
            await fetch('/sanctum/csrf-cookie', {
                method: 'GET',
                credentials: 'include',
                
            })
        }
       
    }
}
</script>

<style scoped>
.login-body {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
}
.form .input-group input{
    z-index:1;
}
.form .input-group .bi-eye, .form .input-group .bi-eye-slash{
    position: absolute;
    right: 0;
    z-index: 3;
}
.input-group .bi-eye{
    display: none;
}
.form .btn{
    position: relative;
    width: 100%;
    margin-top: .5rem;
}
</style>
