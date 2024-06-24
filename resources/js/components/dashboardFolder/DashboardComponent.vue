<template>
    <div class="dashboard-main-container">
        <leftComponent class="left bg-light" />
        <centerComponent class="center bg-light" />
        <rightComponent class="right"/>
    </div>
</template>

<script>

import leftComponent from '../../components/dashboardFolder/Left.vue'
import centerComponent from '../../components/dashboardFolder/Center.vue'
import rightComponent from '../../components/dashboardFolder/Right.vue'

export default{
    name: 'dashboard',
    components: {
        leftComponent, centerComponent, rightComponent
    }
}
</script>
<style scoped>
@import '../../../css/dashboardCss/dashboard.css';
</style>