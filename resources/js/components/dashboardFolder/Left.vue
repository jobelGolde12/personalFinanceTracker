<template>
    <div>
        
        <div class="container p-2 left-header">
            <h5 class="fw-light text-dark">Finance tracker</h5>
        </div>


        <div class="left-body mt-5">

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/dashboard/" class="text-decoration-none text-dark text-uppercase">
                    <i class="bi bi-house-fill fs-5"></i>
                    Home
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/netWorth" class="text-decoration-none text-dark text-uppercase">
                    <i class="bi bi-reception-4 fs-5"></i> 
                    Networth
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="" class="text-decoration-none text-dark text-uppercase">
                    <i class="bi bi-bell-fill fs-5"></i>
                    notification
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="" class="text-decoration-none text-dark text-uppercase">
                    <i class="bi bi-person-fill fs-5"></i>
                    Profile 
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="" class="text-decoration-none text-dark text-uppercase">
                    <i class="bi bi-gear-fill fs-5"></i>
                    Settings
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="" class="text-decoration-none text-dark text-uppercase">
                    <i class="bi bi-info-circle-fill fs-5"></i>
                    About
                </router-link>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    name: 'left'
}
</script>

<style scoped>
@import '../../../css/dashboardCss/left.css';
</style>