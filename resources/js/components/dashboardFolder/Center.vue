<template>
    <div>
        <div class="center-header container-fluid d-flex justify-content-between align-items-center">
            <div class="container pt-3">
                <p class="text-dark fw-light mb-0 pb-0">Lorem, ipsum dolor.</p>
                <h5 class="text-dark mt-0 pt-0">Lorem, ipsum.</h5>
            </div>

            <div class="container pt-3 d-flex align-items-center">
                <div><router-link to="#" class="btn btn-success me-5">Click</router-link></div>
                <div><i class="bi bi-sun fs-4 ms-5 me-4 lg:ps-5 lg:ms-5 xl:ps-5"></i></div>
                <div><i class="bi bi-list fs-4"></i></div>
            </div>
        </div>


        <div class="center-body mt-3">
            <div class="card card1 d-flex flex-row gap-3 bg-primary p-2 rounded ms-2 me-2">
                        <div class="container">
                            <h5 class="text-light fw-light mb-0 pb-0">Lorem ipsum dolor sit amet.</h5>
                            <p class="text-light fw-lighter">Lorem, ipsum dolor sit amet consectetur adipisicing elit.  </p>
                            <button class="btn btn-light ps-3 pe-3">Click</button>
                        </div>

                        <div class="container container">
                             <img src="../../../images/bg2.jpg" alt="" class="rounded img-fluid">
                        </div>
            </div>



            <div class="container mt-3">
                <h5 class="text-dark fw-lighter">Lorem, ipsum.</h5>
            </div>

            <div class="main-container d-flex flex-row mt-3">
                <div class="container main-container-left d-flex flex-column gap-3">
                    <div class=" container1 networth bg-primary p-2">networth</div>
                    <div class=" container2 networth bg-primary p-2">networth</div>
                </div>

                <div class="container main-container-right">
                    <div class="container">Chart</div>
                </div>
            </div>

            
        </div>
    </div>
</template>

<script src="../../jsFolder/dashboardJs/center.js"></script>
<style scoped>
@import '../../../css/dashboardCss/center.css';
</style>