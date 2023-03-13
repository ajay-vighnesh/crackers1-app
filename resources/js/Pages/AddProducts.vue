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


onMounted(() => {

    const recaptchaScript = document.createElement("script");
    recaptchaScript.setAttribute(
        "src",
        "https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js",
        "https://unpkg.com/axios/dist/axios.min.js"
    );
    document.head.appendChild(recaptchaScript);

    let dataTablesJS = document.getElementById("datatables-js");
    if (dataTablesJS != null) {
        dataTablesJS.remove();
    }

    let dataTablesScript = document.createElement("script");
    dataTablesScript.setAttribute(
        "src",
        "/vuexy-vendor-assets/libs/datatables-bs5/datatables-bootstrap5.js"
    );
    dataTablesScript.setAttribute("id", "datatables-js");
    document.body.appendChild(dataTablesScript);

    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    // console.log(productsdata);


    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
        
});
 

// });
</script>

<template>
    <NewLayout title="AddProducts">
        <template #content>
            <div
                class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8"
            >
                <div class="p-3 mb-2 bg-light text-dark">Add Products</div>

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
                                        >Title</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="name"
                                        placeholder="Crackers Name"
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
                                        >Description</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="description"
                                        placeholder="Description"
                                        autofocus=""
                                    />
                                    <br />
                                    <br />

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

                                    <input
                                        class="form-control"
                                        type="file"
                                        id="photo"
                                        name="image"
                                        accept="image/*"
                                    />
                                    <br />
                                    <br />
                                    <!-- <input class="form-control" name="photo" type="file" id="photo"> <br> <br> -->

                                    <a href="">
                                        <button
                                            type="submit"
                                            class="btn btn-primary waves-effect waves-light"
                                            id="position-bottom-start"
                                            style="background-color: #7367f0"
                                        >
                                            Save
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
