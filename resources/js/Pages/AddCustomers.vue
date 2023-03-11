<script setup>
import NewLayout from "@/Layouts/NewLayout.vue";
import { ref, onMounted } from "vue";
import { useForm, router } from "@inertiajs/vue3";

const form = useForm({
    project_name: "",
    sitemap_path: "",
    csrf: "",
});

// const submit = () => {

//     form.transform(data => ({
//         ...data,
//     })).post(route('projects.store'));
// };

onMounted(() => {
    form.csrf = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
});

// });
</script>

<template>
    <NewLayout title="AddCustomers">
        <template #content>
            <div
                class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8"
            >
                <div class="p-3 mb-2 bg-light text-dark">Add Customers</div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card p-4 h-100 rounded">
                            <div class="mb-3 fv-plugins-icon-container">
                                <!-- <label for="firstName" class="form-label">Title</label> -->

                                <form
                                    method="POST"
                                    action="/admin/customers/new"
                                >
                                    <input
                                        type="hidden"
                                        name="_token"
                                        :value="form.csrf"
                                    />

                                    <label for="firstName" class="form-label"
                                        >Name</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="name"
                                        placeholder="Name"
                                        autofocus=""
                                    />
                                    <br /><br />

                                    <label for="firstName" class="form-label"
                                        >Email</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="email"
                                        name="email"
                                        placeholder="email"
                                        autofocus=""
                                    />
                                    <br />
                                    <br />

                                    <label for="firstName" class="form-label"
                                        >Address</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="address"
                                        placeholder="address"
                                        autofocus=""
                                    />
                                    <br />
                                    <br />

                                    <label for="firstName" class="form-label"
                                        >Mobile Number</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="number"
                                        name="mobile_Number"
                                        placeholder="123-456-789"
                                        autofocus=""
                                    />
                                    <br />
                                    <br />
                                    
                                    <label for="firstName" class="form-label"
                                        >Whatsapp_Number</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="number"
                                        name="whatsapp_Number"
                                        placeholder="123-456-789"
                                        autofocus=""
                                    />
                                    <br />
                                    <br />

                                    <!-- <input type="file" name="image" accept="image/*"> <br> <br> -->

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
