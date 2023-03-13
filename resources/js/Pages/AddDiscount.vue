<script setup>
import NewLayout from "@/Layouts/NewLayout.vue";
import { ref, onMounted } from "vue";
import { useForm, router } from "@inertiajs/vue3";

const form = useForm({
    project_name: "",
    sitemap_path: "",
    csrf: "",
});

const props = defineProps({
    categories: Object,
});


// const submit = () => {

//     form.transform(data => ({
//         ...data,
//     })).post(route('projects.store'));
// };

// onMounted(() => {

// let dashboardJS = document.getElementById('dashboard-js')
// if (dashboardJS != null) {
//     dashboardJS.remove()
// }

// let dashboardScript = document.createElement('script')
// dashboardScript.setAttribute('src', '/public/vuexy-vendor-assets/js/dashboard.js')
// dashboardScript.setAttribute('id', 'dashboard-js')
// document.body.appendChild(dashboardScript)

onMounted(() => {
    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

});
 

// });
</script>

<template>
    <NewLayout title="AddDiscount">
        <template #content>
            <div
                class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8"
            >
                <div class="p-3 mb-2 bg-light text-dark">Add Discount</div>

            <!-- <v-if >
                <div class="alert alert-success">{{ message }}</div>
            </v-if> -->

            <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-4 h-100 rounded">
                            <div class="mb-3 fv-plugins-icon-container">
                                <!-- <label for="firstName" class="form-label">Title</label> -->

                                <form
                                    method="POST"
                                    action="/admin/products/new"
                                    enctype="multipart/form-data"
                                >
                                    <input
                                        type="hidden"
                                        name="_token"
                                        :value="form.csrf"
                                    />

                                    <label for="firstName" class="form-label"
                                        >Discount Amount</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="name"
                                        placeholder="₹.00"
                                        autofocus=""
                                    />
                                    <br /><br />
                                   
                                    <label for="firstName" class="form-label"
                                        >Product Name</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="name"
                                        placeholder="Product Name"
                                        autofocus=""
                                    />
                                    <br /><br />

                                    <div id="categories">

                                    <label for="firstName" class="form-label"
                                        >Catagory</label
                                    >
                                    <select name="categories" class="form-control" id="categories">
                                        
                                    <option v-for="catagory in categories" :value="catagory.id">{{ catagory.name }}</option>
                                    
                                    </select>
                                    <br /><br />
                                </div>


                                    <label for="firstName" class="form-label"
                                        >Price</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="price"
                                        placeholder="Price"
                                        autofocus=""
                                    />
                                    <br />
                                    <br />


                                    <a href="">
                                        <button
                                            type="submit"
                                            class="btn btn-primary waves-effect waves-light"
                                            id="position-bottom-start"
                                            style="background-color: #7367f0"
                                        >
                                            Apply
                                        </button>
                                    </a>
                                </form>

                                <div
                                    class="fv-plugins-message-container invalid-feedback"
                                ></div>
                            </div>

                            
                        </div>
                    </div>
                </div>

                            </div>
        </template>
    </NewLayout>
</template>
