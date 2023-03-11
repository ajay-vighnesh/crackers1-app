<script setup>
import NewLayout from '@/Layouts/NewLayout.vue';
import { ref, onMounted } from 'vue';

onMounted(() => {

    let dashboardJS = document.getElementById('dashboard-js')
    if (dashboardJS != null) {
        dashboardJS.remove()    
    }

    let dashboardScript = document.createElement('script')
    dashboardScript.setAttribute('src', '/public/vuexy-vendor-assets/js/dashboard.js')
    dashboardScript.setAttribute('id', 'dashboard-js')
    document.body.appendChild(dashboardScript)

});
</script>

<template>
    <NewLayout title="Dashboard">
        <template #content>
            <div class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8">
                <div class="p-3 mb-2 bg-light text-dark">Welcome Admin!</div>
            </div>
        </template>
    </NewLayout>
</template>
