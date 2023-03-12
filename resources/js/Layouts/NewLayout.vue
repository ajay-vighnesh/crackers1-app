<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue'

onMounted(() => {

    setTimeout(appendMenuJS, 100);
    setTimeout(appendMainJS, 500);

    function appendMenuJS() {
        let menuJS = document.getElementById('menu-js')
        if (menuJS != null) {
            menuJS.remove()
        }

        let menuScript = document.createElement('script')
        menuScript.setAttribute('src', '/vuexy-vendor-assets/js/menu.js')
        menuScript.setAttribute('id', 'menu-js')
        document.body.appendChild(menuScript)
    }

    function appendMainJS() {
        let mainJS = document.getElementById('main-js')
        if (mainJS != null) {
            // delete(menu)
            mainJS.remove()
        }

        let mainScript = document.createElement('script')
        mainScript.setAttribute('src', '/vuexy-vendor-assets/js/main.js')
        mainScript.setAttribute('id', 'main-js')
        document.body.appendChild(mainScript)
    }
})

defineProps({
    title: String,
    currentProjectId: Number,
});

const logout = () => {
    router.post(route('logout'));
};

</script>

<template>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <Head :title="title" />
        <div class="layout-container">
            <!-- Menu -->

            <aside ref="layoutMenu" id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <Link :href="route('admin')" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                fill="#7367F0" />
                            <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
                            <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                fill="#7367F0" />
                        </svg>
                    </span>
                    <span class="app-brand-text demo menu-text fw-bold">Crackers</span>
                    </Link>
                    <a href="#" @click="layoutMenuToggle" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Page -->
                    <li class="menu-item">
                        <Link :href="route('admindashboard')"
       class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Email">Home</div>
          </Link>
    </li>

    <li class="menu-item">
                        <Link :href="route('profile')"
       class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Email">Orders</div>
          </Link>
    </li>
    
      <!---->
    <!-- list inside -->
    
                      <!-- <li :class="[
                        'menu-item',
                        route().current('/admin/products/viewall') ? 'active open' : null,
                        route().current('/admin/products/new') ? 'active open' : null,
                    ]">
                        <a href="route('')" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                            <div>Products1</div>
                        </a>
                        <ul class="menu-sub">
                            <li :class="[
                                'menu-item',
                                route().current('admin') ? 'active' : null,
                            ]">
                                <Link :href="route('viewproducts')" class='menu-link'>
                                <div>View Products</div>
                                </Link>
                            </li>
                            <li :class="[
                                'menu-item',
                                route().current('admin') ? 'active' : null,
                            ]">
                                <Link :href="route('addproducts')" class="menu-link">
                                <div>Add Products</div>
                                </Link>

                            </li>
                        </ul>
                    </li>   -->

<!-- list inside -->
            <!---->  
            <li class="menu-item" style="">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Roles &amp; Permissions">Products</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
            <Link :href="route('viewproducts')"
           class="menu-link">
            <div data-i18n="Roles">View Products</div>
        </Link>
        </li>
        <li class="menu-item">
            <Link :href="route('addproducts')"
           class="menu-link">
            <div data-i18n="Permission">Add Products</div>
        </Link>
        </li>
        <li class="menu-item">
            <Link :href="route('addcollections')"
           class="menu-link">
            <div data-i18n="Permission">Collection</div>
        </Link>
        </li>
      </ul>
    </li>
            <!---->

                    <li class="menu-item">
                        <Link :href="route('products')"
       class="menu-link">
        <i class="menu-icon tf-icons ti ti-tag"></i>
        <div data-i18n="Email">Products</div>
          </Link>
    </li>
                    <li class="menu-item">
                        <Link :href="route('catagories')"
       class="menu-link">
        <i class="menu-icon tf-icons ti ti-tag"></i>
        <div data-i18n="Email">Catagories</div>
          </Link>
    </li>
    <!---->
    <!-- <li class="menu-item" style="">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Roles &amp; Permissions">Customers</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
            <Link :href="route('')"
           class="menu-link">
            <div data-i18n="Roles">View Customers</div>
        </Link>
        </li>
        <li class="menu-item">
            <Link :href="route('')"
           class="menu-link">
            <div data-i18n="Permission">Add Customers</div>
        </Link>
        </li>
      </ul>
    </li> -->
    <!---->

                    <!-- <li class="menu-item">
                        <Link :href="route('')"
       class="menu-link">
        <i class="menu-icon tf-icons ti ti-user"></i>
        <div data-i18n="Email">Customers</div>
          </Link>
    </li> -->

    <li class="menu-item">
        <Link :href="route('customers')" class="menu-link">
        <i class="menu-icon tf-icons ti ti-user"></i>
        <div data-i18n="Email">Customers</div>
        </Link>
    </li>
                    
    <li class="menu-item">
                        <Link :href="route('catagories')"
       class="menu-link">
        <i class="menu-icon tf-icons ti ti-discount"></i>
        <div data-i18n="Email">Discount</div>
          </Link>
    </li>
   
    <li class="menu-item" href="#" @click="logout">
                        <Link :href="route('catagories')"
       class="menu-link" >
       <i class="ti ti-logout me-2 ti-sm"></i>
        <div data-i18n="Email">Log out</div>
          </Link>
    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a @click="layoutMenuToggle" class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">
                            <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                <i class="ti ti-sm"></i>
                            </a>
                        </div>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item me-4">
                                <Link :href="route('admin')" class="btn btn-primary waves-effect waves-light">
                                <span class="ti-xs ti ti-plus me-2"></span>Create Project
                                </Link>
                            </li>
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar  me-2">
                                        <span class="avatar-initial rounded-circle bg-primary">

                                        </span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar  me-2">
                                                        <span
                                                            class="avatar-initial rounded-circle bg-primary">

                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <Link :href="route('admin')" class="dropdown-item">
                                        <i class="ti ti-user-check me-2 ti-sm"></i>
                                        <span class="align-middle">My Profile</span>
                                        </Link>
                                    </li>

                                    <li>
                                        <Link :href="route('admin')" class="dropdown-item">
                                        <i class="ti ti-cash me-2 ti-sm"></i>
                                        <span class="align-middle">Pricing</span>
                                        </Link>
                                    </li>
                                    <li>
                                        <a :href="route('admin')" class="dropdown-item">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>

                                            </span>
                                        </a>

                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" @click="logout">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <slot name="content"/>

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div @click="layoutMenuToggle" class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
</template>
