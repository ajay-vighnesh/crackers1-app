<script setup>
import NewLayout from "@/Layouts/NewLayout.vue";
import { ref, onMounted } from "vue";
import { useForm, router } from "@inertiajs/vue3";
import PrimaryButton from '@/Components/PrimaryButton.vue';

// end //
const form = useForm({
    project_name: "",
    sitemap_path: "",
    csrf: "",

});

const props = defineProps({
    categories: Object,
});

const submit = (categories_id) => {
    form.delete(route('categories.delete', categories_id ), {
    });
};

// const productsdata = ref(null)

// function  getProductsData(){
//                     axios.get('/view/allproducts').then((response)=>{

//                         productsdata.value = response.data;

//                     }).catch((error)=>{
//                         console.log(error)
//                     });
//                 }
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
    // getProductsData();

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
});

// });
</script>

<template>
    <NewLayout title="ViewCategories">
        <template #content>
            <div
                class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8"
            >
                <div class="p-3 mb-2 bg-light text-dark">View Categories</div>

                <div class="card">
                    <div class="card-datatable table-responsive">
                        <div
                            id="DataTables_Table_0_wrapper"
                            class="dataTables_wrapper dt-bootstrap5 no-footer"
                        >
                            <div class="row me-2">
                                <div class="col-md-2">
                                    <div class="me-3">
                                        <div
                                            class="dataTables_length"
                                            id="DataTables_Table_0_length"
                                        >
                                            <label
                                                >
                                                <!-- <select
                                                    name="DataTables_Table_0_length"
                                                    aria-controls="DataTables_Table_0"
                                                    class="form-select"
                                                >
                                                    <option value="10">
                                                        10
                                                    </option>
                                                    <option value="25">
                                                        25
                                                    </option>
                                                    <option value="50">
                                                        50
                                                    </option>
                                                    <option value="100">
                                                        100
                                                    </option>
                                                </select> -->
                                                </label
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div
                                        class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"
                                    >
                                        <div
                                            id="DataTables_Table_0_filter"
                                            class="dataTables_filter"
                                        >
                                            <label
                                                >
                                                <!-- <input
                                                    type="search"
                                                    class="form-control"
                                                    placeholder="Search.."
                                                    aria-controls="DataTables_Table_0"
                                            /> -->
                                        </label>
                                        </div>
                                        <div
                                            class="dt-buttons btn-group flex-wrap"
                                        >
                                            <div class="btn-group">
                                                <!-- <button
                                                    class="btn btn-secondary buttons-collection dropdown-toggle btn-label-secondary mx-3"
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_0"
                                                    type="button"
                                                    aria-haspopup="dialog"
                                                    aria-expanded="false"
                                                > 
                                                    <span
                                                        ><i
                                                            class="ti ti-screen-share me-1 ti-xs"
                                                        ></i
                                                        >Export</span
                                                    ><span
                                                        class="dt-down-arrow"
                                                    ></span>
                                                </button> -->
                                            </div>
                                            <a href="/admin/categories/new">
                                                <button
                                                    class="btn btn-secondary add-new btn-primary"
                                                    style="
                                                        background-color: #685dd8;
                                                    "
                                                    tabindex="0"
                                                    aria-controls="DataTables_Table_0"
                                                    type="button"
                                                    data-bs-toggle="offcanvas"
                                                    data-bs-target="#offcanvasAddUser"
                                                >
                                                    <span
                                                        ><i
                                                            class="ti ti-plus me-0 me-sm-1 ti-xs"
                                                        ></i
                                                        ><span
                                                            class="d-none d-sm-inline-block"
                                                            >Add Categories</span
                                                        ></span
                                                    >
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="categories">
                                <table
                                    class="datatables-users table border-top dataTable no-footer dtr-column"
                                    id="DataTables_Table_0"
                                    aria-describedby="DataTables_Table_0_info"
                                    style="width: 1395px"
                                >
                                    <thead>
                                        <tr id="userFormModel">
                                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 17px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 324px;" aria-label="Id: activate to sort column ascending">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 324px;" aria-label="Name: activate to sort column ascending">Catagory Name</th>
                                            <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 307px;" aria-label="Email: activate to sort column ascending">Description</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 110px;" aria-label="Date: activate to sort column ascending">Price</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107px;" aria-label="Salary: activate to sort column ascending">Image</th> -->
                                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 95px;" aria-label="Actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr class="odd" v-for="(row,index,key) in productsdata" :key="row.id"> -->
                                        <tr
                                            class="odd"
                                            v-for="(
                                                row, index, key
                                            ) in categories"
                                            v-blind:key="row.id"
                                        >
                                            
                                            <td><td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td></td>
                                            <td>{{ row.id }}</td>
                                            <td>{{ row.name }}</td>
                  <!-- <td><div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="text-primary ti ti-dots-vertical"></i></a><ul class="dropdown-menu dropdown-menu-end m-0" style=""><li><a href="javascript:;" class="dropdown-item">Details</a></li><li><a href="javascript:;" class="dropdown-item">Archive</a></li><div class="dropdown-divider"></div><li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li></ul></div><a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i class="text-primary ti ti-pencil"></i></a></td> -->
                                            <!-- <td><button><a href="javascript:void(0)" @click="('openEditWindow', row)" class="btn btn-secondary">Edit</a></button></td> -->
                                            <td>
                                                <!-- <a href="{{ url('viewproducts/' . $item->name) }}" class="btn btn-success mx-2">
                                                    Edit
                                                </a> -->

                                                <a :href="row.id+'/edit'" class="btn btn-success mx-2"> Edit </a> </td>
                                                
                                                <td>
                                                    <form @submit.prevent="submit(row.id)">

                                                    <!-- <a :href="row.id+'/delete'" class="btn btn-danger mx-2"> Delete </a> -->
                                                    <PrimaryButton> Delete</PrimaryButton>
                                                    </form>
                                                </td>

                                                <!-- <RouterLink :to="{ path: '/products/'+row.id+'/edit' }" class="btn btn-success mx-2">
                                                    Edit
                                                </RouterLink> -->

                                                
                                                <!-- <button class="btn btn-success" @click="edit(row)"><i class="ti ti-edit"></i>Edit</button> -->
                                            <!-- </td> -->
                                            <td>
                                                <!-- <button type="button" class="btn btn-danger mx-2">
                                                    Delete
                                                </button> -->
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Offcanvas to add new user -->
                </div>
            </div>
        </template>
    </NewLayout>
</template>
