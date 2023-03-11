<script setup>
import NewLayout from '@/Layouts/NewLayout.vue';
// import route from 'vendor/tightenco/ziggy/src/js';
import { Link } from '@inertiajs/vue3'
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
                <div class="p-3 mb-2 bg-light text-dark">New Customers</div>
            
            <div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Everything customers-related in one place</h5>
      <div class="card-body">
        <p class="card-text">
          Manage customer details, see customer order history, and group customers into segments.
        </p>
        <p class="demo-inline-spacing">
          
          <Link :href="route('addcustomers')" class="btn btn-primary me-1 waves-effect waves-light collapsed">
            Add Customer
        </Link>
    
        </p>
     
      </div>
    </div>
  </div>
 
</div>
</div>
        </template>
    </NewLayout>
</template>
