<script setup>
import NewLayout from '@/Layouts/NewLayout.vue';
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3'

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
              <div class="p-3 mb-2 bg-light text-dark">Catagories</div>
          
          <div class="row">
<div class="col-12">
  <div class="card mb-4">
    <h5 class="card-header">First up: what are you selling?</h5>
    <div class="card-body">
      <p class="card-text">
          Before you open your store, first you need some products.
      </p>
      <p class="demo-inline-spacing">
        
        <Link :href="route('addcatagories')" class="btn btn-primary me-1 waves-effect waves-light collapsed">
          Add your catagories
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

