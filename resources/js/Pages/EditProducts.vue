<script setup>
import NewLayout from "@/Layouts/NewLayout.vue";
import { ref, onMounted } from "vue";
import { useForm, router } from "@inertiajs/vue3";
import axios from "axios";


let form = ref({
    id: props.product.id,
    name: props.product.name,
    description: props.product.description,
    price: props.product.price,
    image: props.product.image,
});

const props = defineProps({
    product: Object,
});


onMounted(() => {
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

    console.log(props.product);
});

</script>

<template>
    <NewLayout title="Edit Products">
        <template #content>
            <div
                class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8"
            >
                <div class="p-3 mb-2 bg-light text-dark">Edit Products</div>

                <div class="row" id="#app">
                    <div class="col-lg-12">
                        <div class="card p-4 h-100 rounded">
                            <div class="mb-3 fv-plugins-icon-container">
                                <!-- <label for="firstName" class="form-label">Title</label> -->

                                <form
                                    method="POST"
                                    action="/admin/products/{id}/update"
                                >
                                    <!-- <input
                                        type="hidden"
                                        name="_token"
                                        :value="form.csrf"
                                    /> -->

                                    <label for="firstName" class="form-label"
                                        >Title</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="name"
                                        placeholder="Crackers Name"
                                        autofocus=""
                                        v-model="form.name"
                                    />
                                    <!-- <input v-model="form.name" /> -->

                                    <br /><br />

                                    <label for="firstName" class="form-label"
                                        >Description</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="description"
                                        placeholder="Description"
                                        autofocus=""
                                        v-model="form.description"
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
                                        v-model="form.price"
                                    />
                                    <br />
                                    <br />

                                    <img width="200" height="150" :src="'/storage/' +form.image" />
                                    <input
                                        class="form-control"
                                        type="file"
                                        id="photo"
                                        name="image"
                                        accept="image/*"
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
                                            Edit
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
