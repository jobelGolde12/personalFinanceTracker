<template>
    <div>
        
        <div class="container p-2 left-header">
            <h5 class="fw-light">Finance tracker</h5>
        </div>


        <div class="left-body mt-5">

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/dashboardDefault" class="text-decoration-none text-dark">
                    <i class="bi bi-house"></i>
                    Home
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/netWorth" class="text-decoration-none text-dark">
                    <i class="bi bi-house"></i>
                    Networth
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/dashboardDefault" class="text-decoration-none text-dark">
                    <i class="bi bi-house"></i>
                    notification
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/dashboardDefault" class="text-decoration-none text-dark">
                    <i class="bi bi-house"></i>
                    Home
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/dashboardDefault" class="text-decoration-none text-dark">
                    <i class="bi bi-house"></i>
                    Home
                </router-link>
            </div>

            <div class="link link1 bg- p-2 mb-2">
                <router-link to="/dashboardDefault" class="text-decoration-none text-dark">
                    <i class="bi bi-house"></i>
                    Home
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