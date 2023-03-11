<script setup>
import NewLayout from "@/Layouts/NewLayout.vue";
import { ref, onMounted } from "vue";
import { useForm, router } from "@inertiajs/vue3";
import axios from "axios";

// import { Vue } from "vue";


// export default {
//     data() {
//         return {
//                     name: '',
//                     description: '',
//                     price: '',
//                     image: ''
//                 };
//             },
//             methods:{
//                 async edit() {
//                     try{
//                         await axios.post('');

//                     }
//                 }
//             }
//         }

// new Vue({
//   el: '#products',
//   data: [] ,
//     return :{
//         errorList: '',
//         model: {
//                 products: {
//                     name: '',
//                     description: '',
//                     price: '',
//                     image: ''
//                 }
//             }
//   }
// })

// new //

let form = ref({
    id:'',
    name:'',
    description:'',
    price:'',
    image:''
})

onMounted(async () => {
    getsingleProducts()
})

const props = defineProps({
    id:{
        type:String,
        default:''
    }
})

const getsingleProducts = async () => {
    let response = await axios.get('/admin/products/{id}/edit/${props.id}')
    form.value = response.data.products
}
// //

// const form = useForm({
//     project_name: "",
//     sitemap_path: "",
//     csrf: "",
// });

// const props = defineProps({
//     products: Object,
// });

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

    // console.log(this.$route.params.id);
    // this.getProductsData(this.$route.id);
});

// });
</script>

<template>
    <NewLayout title="Edit Products">
        <template #content>
            <div
                class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8"
            >
                <div class="p-3 mb-2 bg-light text-dark">Edit Products</div>

                <div class="row" id="products">
                    <div class="col-lg-12">
                        <div class="card p-4 h-100 rounded">
                            <div class="mb-3 fv-plugins-icon-container">
                                <!-- <label for="firstName" class="form-label">Title</label> -->

                                <form
                                    method="POST"
                                    action="'/admin/products/{id}/edit'"
                                >
                                    <!-- <input
                                        type="hidden"
                                        name="_token"
                                        :value="form.csrf"
                                    /> -->

                                    <label for="firstName" class="form-label"
                                        >Title</label
                                    >
                                    <input class="form-control rounded w-100" type="text" name="name" placeholder="Crackers Name" autofocus="" v-model="form.name">
                                    
                                    <br /><br />

                                    <label for="firstName" class="form-label"
                                        >Description</label
                                    >
                                    <input
                                        class="form-control rounded w-100"
                                        type="text"
                                        name="description"
                                        placeholder="Description"
                                        autofocus="" v-model="form.description"
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
                                        autofocus="" v-model="form.price"
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
