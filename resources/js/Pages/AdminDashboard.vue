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
            <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">

                        <div class="col-lg-12 mb-4">
                    <img src="../Pages/img/backgrounds/slider-2.jpg" alt="">
  </div>
                
  <!-- <div class="col-lg-6 mb-4">
                    <img src="../Pages/img/backgrounds/slider-2.jpg" alt="">
  </div> -->
                    </div>

                    <h1 class="fs-4">Our Catagories </h1>

                <div class="row">
                    <!-- Sales last year -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card zoom">
						<figure><img src="../Pages/img/backgrounds/c1.jpg" class="img-fluid" alt="Rockets" title="Rockets"></figure>
						<div class="card-body flex-column bg-white">
							<h2 itemprop="name" class="cardtitle text-center sansita heading5">Sparklers</h2>
						</div>
					</div>
                        </div>
                    </div>

                    <!-- Sales last year -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card zoom">
						<figure><img src="../Pages/img/backgrounds/c3.jpg" class="img-fluid" alt="Rockets" title="Rockets"></figure>
						<div class="card-body flex-column bg-white">
							<h2 itemprop="name" class="cardtitle text-center sansita heading5">Rockets</h2>
						</div>
					</div>
                        </div>
                    </div>

                    <!-- Sales last year -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card zoom">
						<figure><img src="../Pages/img/backgrounds/c4.jpg" class="img-fluid" alt="Rockets" title="Rockets"></figure>
						<div class="card-body flex-column bg-white">
							<h2 itemprop="name" class="cardtitle text-center sansita heading5">Lars</h2>
						</div>
					</div>
                        </div>
                    </div>

                    <!-- Sales last year -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card zoom">
						<figure><img src="../Pages/img/backgrounds/c7.jpg" class="img-fluid" alt="Rockets" title="Rockets"></figure>
						<div class="card-body flex-column bg-white">
							<h2 itemprop="name" class="cardtitle text-center sansita heading5">Chakkars</h2>
						</div>
					</div>
                        </div>
                    </div>

                    <!-- Revenue Growth -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card zoom">
						<figure><img src="../Pages/img/backgrounds/c8.jpg" class="img-fluid" alt="Rockets" title="Rockets"></figure>
						<div class="card-body flex-column bg-white">
							<h2 itemprop="name" class="cardtitle text-center sansita heading5">Rockets</h2>
						</div>
					</div>
                        </div>
                    </div>
                   
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card zoom">
						<figure><img src="../Pages/img/backgrounds/c9.jpg" class="img-fluid" alt="Rockets" title="Rockets"></figure>
						<div class="card-body flex-column bg-white">
							<h2 itemprop="name" class="cardtitle text-center sansita heading5">Rockets</h2>
						</div>
					</div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header pb-0 ">
                                <div class="card-title mb-0">
                                    <h5 class="mb-0">Chatbot Status</h5>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class=" rounded p-3 mt-2">
                                    <div class="row gap-4 gap-sm-0">
                                        <div class="col-12 col-sm-4">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="badge rounded bg-label-primary p-1">
                                                    <i class="ti ti-currency-dollar ti-sm"></i>
                                                </div>
                                                <h6 class="mb-0">Earnings</h6>
                                            </div>
                                            <h4 class="my-2 pt-1">$545.69</h4>
                                            <div class="progress w-75" style="height: 4px">
                                                <div class="progress-bar" role="progressbar" style="width: 65%"
                                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="badge rounded bg-label-info p-1"><i
                                                        class="ti ti-chart-pie-2 ti-sm"></i></div>
                                                <h6 class="mb-0">Profit</h6>
                                            </div>
                                            <h4 class="my-2 pt-1">$256.34</h4>
                                            <div class="progress w-75" style="height: 4px">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="badge rounded bg-label-danger p-1">
                                                    <i class="ti ti-brand-paypal ti-sm"></i>
                                                </div>
                                                <h6 class="mb-0">Expense</h6>
                                            </div>
                                            <h4 class="my-2 pt-1">$74.19</h4>
                                            <div class="progress w-75" style="height: 4px">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sales last year -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title mb-0">Sales</h5>
                                <small class="text-muted">Last Year</small>
                            </div>
                            <div id="pagesIndexed"></div>
                            <div class="card-body pt-0">
                                <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                    <h4 class="mb-0">175k</h4>
                                    <small class="text-danger">-16.2%</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sales last year -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title mb-0">Sales</h5>
                                <small class="text-muted">Last Year</small>
                            </div>
                            <div id="pagesIndexed"></div>
                            <div class="card-body pt-0">
                                <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                    <h4 class="mb-0">175k</h4>
                                    <small class="text-danger">-16.2%</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sales last year -->
                    <div class="col-xl-2 col-md-4 col-6 mb-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5 class="card-title mb-0">Sales</h5>
                                <small class="text-muted">Last Year</small>
                            </div>
                            <div id="pagesIndexed"></div>
                            <div class="card-body pt-0">
                                <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                    <h4 class="mb-0">175k</h4>
                                    <small class="text-danger">-16.2%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </NewLayout>
</template>
