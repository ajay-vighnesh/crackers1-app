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
                <div class="p-3 mb-2 bg-light text-dark">Our Catagories!</div>
            </div>

<!---->
<div class="row mb-5 max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8">
    <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Flower Pots</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c1.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Sound Crackers</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c1.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Lars</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c4.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>
<div class="row mb-5 max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8">
    <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Sparkles</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c1.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Fancy</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c1.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Rockets</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c3.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>
<div class="row mb-5 max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8">
    <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Bijili Crackers</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c1.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Ground Chakkar</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c7.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">Chakkar</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid d-flex mx-auto my-4 rounded" src="../Pages/img/backgrounds/c8.jpg" alt="Card image cap">
        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
        <a href="javascript:void(0);" class="card-link">Card link</a>
        <a href="javascript:void(0);" class="card-link">Another link</a>
      </div>
    </div>
  </div>
</div>
<!---->

        </template>
    </NewLayout>
</template>
