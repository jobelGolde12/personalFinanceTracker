<template>
<div class="login-body bg-light d-flex justify-content-center align-items-center">

    <form @submit.prevent="submitForm" class="form">
        <h4 class="text-dark fw-normal text-center">Signup</h4>

        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
            <input type="text" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" v-model="email">
        </div>

        <div class="input-group mb-2">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" v-model="username">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="password" v-model="password">
            <i class="bi bi-eye me-2 pt-1 pointer hover" @click="toggleEyeFunc"></i>
            <i class="bi bi-eye-slash me-2 pt-1 pointer hover" @click="toggleEyeFunc"></i>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
            <input type="password" class="form-control" placeholder="Confirm password" aria-label="confirm password" aria-describedby="basic-addon1" id="confirmPassword">
            <i class="bi bi-eye eye2 me-2 pt-1 pointer hover" @click="toggleEyeFunc2"></i>
            <i class="bi bi-eye-slash eye-close2 me-2 pt-1 pointer hover" @click="toggleEyeFunc2"></i>
        </div>

        <button class="btn btn-success">Signup</button>

        <div class="container text-center mt-2">
            <p class="text-muted">Already have an account? | <router-link to="/login">login</router-link>
            </p>
        </div>

    </form>

    <router-link to="/dashboard">Dashboard</router-link>

    <!-- This is execute when preparing the signup  -->
    <Loading v-if="loading" />
</div>
</template>

        
<script>
import Loading from '../Loading.vue';
export default {
    name: 'signup',
    data() {
        return {
            toggleEye: false,
            email: '',
            username: '',
            password: '',
            loading: false
        }
    },
    components: {
        Loading
    },
    methods: {
        toggleEyeFunc() {
            let passwordInput = document.getElementById('password')
            let eye = document.querySelector('.bi-eye')
            let eyeSlash = document.querySelector('.bi-eye-slash')

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text'
                eye.style.display = 'block'
                eyeSlash.style.display = 'none'
            } else {
                passwordInput.type = 'password'
                eye.style.display = 'none'
                eyeSlash.style.display = 'block'
            }
        },

        toggleEyeFunc2() {
            let passwordInput = document.getElementById('confirmPassword')
            let eye = document.querySelector('.eye2')
            let eyeSlash = document.querySelector('.eye-close2')

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text'
                eye.style.display = 'block'
                eyeSlash.style.display = 'none'
            } else {
                passwordInput.type = 'password'
                eye.style.display = 'none'
                eyeSlash.style.display = 'block'
            }
        },
        async submitForm() {
            const data = {
                email: this.email,
                name: this.username,
                password: this.password
            };

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            if (!csrfToken) {
                console.error('CSRF token not found');
                return;
            } else {
                console.log('CSRF FOUND');
            }

            this.loading = true;

            try {
                const res = await fetch('http://127.0.0.1:8000/signup', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                });

                if (!res.ok) {
                    if (res.headers.get('content-type').includes('text/html')) {
                        const text = await res.text();
                        console.error('Received HTML response instead of JSON:', text);
                    }
                    throw new Error('Network response was not ok');
                }

                const userData = {
                    email: this.email,
                    username: this.username,
                    password: this.password
                };
                const fetchData = await res.json();
                console.log('Signup successfully');
                // this.$router.push({
                //     name: 'dashboard',
                //     params: {
                //         username: userData.username
                //     },
                //     query: { user: JSON.stringify(userData) }
                // })
            } catch (err) {
                console.log('An Error Occurred ' + err);
            } finally {
                this.loading = false;
            }
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

.form .input-group input {
    z-index: 1;
}

.form .input-group .bi-eye,
.form .input-group .bi-eye-slash {
    position: absolute;
    right: 0;
    z-index: 3;
}

.input-group .bi-eye {
    display: none;
}

.form .btn {
    position: relative;
    width: 100%;
    margin-top: .5rem;
}
</style>
