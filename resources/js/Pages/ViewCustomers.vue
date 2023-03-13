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
    customers: Object,
});

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
    <NewLayout title="ViewCustomers">
        <template #content>
            <div
                class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8"
            >
                <div class="p-3 mb-2 bg-light text-dark">View Customers</div>

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
                                                ><input
                                                    type="search"
                                                    class="form-control"
                                                    placeholder="Search.."
                                                    aria-controls="DataTables_Table_0"
                                            /></label>
                                        </div>
                                        <div
                                            class="dt-buttons btn-group flex-wrap"
                                        >
                                            <div class="btn-group">
                                                <button
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
                                                </button>
                                            </div>
                                            <a href="/admin/customers/new">
                                            <button 
                                                class="btn btn-secondary add-new btn-primary"
                                                style=" background-color: #685dd8;"
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
                                                        >Add Customers</span
                                                    ></span
                                                >
                                            </button>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="customers">
                            <table
                                class="datatables-users table border-top dataTable no-footer dtr-column"
                                id="DataTables_Table_0"
                                aria-describedby="DataTables_Table_0_info"
                                style="width: 1395px"
                            >
                                <thead>
                                    <tr>
                                        <th
                                            class="control sorting_disabled dtr-hidden"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 0px; display: none"
                                            aria-label=""
                                        ></th>
                                        <!-- <th
                                            class="sorting sorting_desc"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 352px"
                                            aria-label="User: activate to sort column ascending"
                                            aria-sort="descending"
                                        >
                                            Id
                                        </th> -->
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 173px"
                                            aria-label="Role: activate to sort column ascending"
                                        >
                                            Name
                                        </th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 117px"
                                            aria-label="Plan: activate to sort column ascending"
                                        >
                                            Email
                                        </th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 213px"
                                            aria-label="Billing: activate to sort column ascending"
                                        >
                                            Address
                                        </th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 111px"
                                            aria-label="Status: activate to sort column ascending"
                                        >
                                            Mobile_number
                                        </th>
                                        <th
                                            class="sorting_disabled"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 163px"
                                            aria-label="Actions"
                                        >
                                            Whatsapp_number
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr class="odd" v-for="(row,index,key) in productsdata" :key="row.id"> -->
                                    <tr class="odd" v-for="(row,index,key) in customers" v-blind:key="row.id">
                                        <!-- <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <img
                                                            src="../Pages/img/avatars/2.png"
                                                            alt="Avatar"
                                                            class="rounded-circle"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Zsazsa
                                                            McCleverty</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >zmcclevertye@soundcloud.com</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-chart-pie-2 ti-sm"
                                                    ></i></span
                                                >Maintainer</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Enterprise</span
                                            >
                                        </td>
                                        <td>Auto Debit</td>
                                        <td>
                                            <span
                                                class="badge bg-label-success"
                                                text-capitalized=""
                                                >Active</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td> -->
                                        <td>{{ row.name }}</td>
                                        <td>{{ row.email }}</td>
                                        <td>{{ row.address }}</td>
                                        <td>{{ row.mobile_number }}</td>
                                        <td>{{ row.whatsapp_number }}</td>
                                    </tr>
                                    <!-- <tr class="even">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <img
                                                            src="../Pages/img/avatars/7.png"
                                                            alt="Avatar"
                                                            class="rounded-circle"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Yoko Pottie</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >ypottiec@privacy.gov.au</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-user ti-sm"
                                                    ></i></span
                                                >Subscriber</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Basic</span
                                            >
                                        </td>
                                        <td>Auto Debit</td>
                                        <td>
                                            <span
                                                class="badge bg-label-secondary"
                                                text-capitalized=""
                                                >Inactive</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="odd">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <img
                                                            src="../Pages/img/avatars/6.png"
                                                            alt="Avatar"
                                                            class="rounded-circle"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Wesley
                                                            Burland</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >wburlandj@uiuc.edu</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-info w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-edit ti-sm"
                                                    ></i></span
                                                >Editor</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Team</span
                                            >
                                        </td>
                                        <td>Auto Debit</td>
                                        <td>
                                            <span
                                                class="badge bg-label-secondary"
                                                text-capitalized=""
                                                >Inactive</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="even">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-secondary"
                                                            >VK</span
                                                        >
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Vladamir
                                                            Koschek</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >vkoschek17@abc.net.au</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-circle-check ti-sm"
                                                    ></i></span
                                                >Author</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Team</span
                                            >
                                        </td>
                                        <td>Manual - Paypal</td>
                                        <td>
                                            <span
                                                class="badge bg-label-success"
                                                text-capitalized=""
                                                >Active</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="odd">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-danger"
                                                            >TW</span
                                                        >
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Tyne Widmore</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >twidmore12@bravesites.com</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-warning w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-user ti-sm"
                                                    ></i></span
                                                >Subscriber</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Team</span
                                            >
                                        </td>
                                        <td>Manual - Cash</td>
                                        <td>
                                            <span
                                                class="badge bg-label-warning"
                                                text-capitalized=""
                                                >Pending</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="even">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-info"
                                                            >TB</span
                                                        >
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Travus
                                                            Bruntjen</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >tbruntjeni@sitemeter.com</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-device-laptop ti-sm"
                                                    ></i></span
                                                >Admin</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Enterprise</span
                                            >
                                        </td>
                                        <td>Manual - Cash</td>
                                        <td>
                                            <span
                                                class="badge bg-label-success"
                                                text-capitalized=""
                                                >Active</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="odd">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <img
                                                            src="../Pages/img/avatars/1.png"
                                                            alt="Avatar"
                                                            class="rounded-circle"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Stu Delamaine</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >sdelamainek@who.int</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-circle-check ti-sm"
                                                    ></i></span
                                                >Author</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Basic</span
                                            >
                                        </td>
                                        <td>Auto Debit</td>
                                        <td>
                                            <span
                                                class="badge bg-label-warning"
                                                text-capitalized=""
                                                >Pending</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="even">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-primary"
                                                            >SO</span
                                                        >
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Saunder
                                                            Offner</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >soffner19@mac.com</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-chart-pie-2 ti-sm"
                                                    ></i></span
                                                >Maintainer</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Enterprise</span
                                            >
                                        </td>
                                        <td>Auto Debit</td>
                                        <td>
                                            <span
                                                class="badge bg-label-warning"
                                                text-capitalized=""
                                                >Pending</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="odd">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-success"
                                                            >SM</span
                                                        >
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Stephen
                                                            MacGilfoyle</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >smacgilfoyley@bigcartel.com</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-chart-pie-2 ti-sm"
                                                    ></i></span
                                                >Maintainer</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Company</span
                                            >
                                        </td>
                                        <td>Manual - Paypal</td>
                                        <td>
                                            <span
                                                class="badge bg-label-warning"
                                                text-capitalized=""
                                                >Pending</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="even">
                                        <td
                                            class="control"
                                            tabindex="0"
                                            style="display: none"
                                        ></td>
                                        <td class="sorting_1">
                                            <div
                                                class="d-flex justify-content-start align-items-center user-name"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div
                                                        class="avatar avatar-sm me-3"
                                                    >
                                                        <img
                                                            src="../Pages/img/avatars/9.png"
                                                            alt="Avatar"
                                                            class="rounded-circle"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="text-body text-truncate"
                                                        ><span
                                                            class="fw-semibold"
                                                            >Skip
                                                            Hebblethwaite</span
                                                        ></a
                                                    ><small class="text-muted"
                                                        >shebblethwaite10@arizona.edu</small
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-truncate d-flex align-items-center"
                                                ><span
                                                    class="badge badge-center rounded-pill bg-label-secondary w-px-30 h-px-30 me-2"
                                                    ><i
                                                        class="ti ti-device-laptop ti-sm"
                                                    ></i></span
                                                >Admin</span
                                            >
                                        </td>
                                        <td>
                                            <span class="fw-semibold"
                                                >Company</span
                                            >
                                        </td>
                                        <td>Manual - Cash</td>
                                        <td>
                                            <span
                                                class="badge bg-label-secondary"
                                                text-capitalized=""
                                                >Inactive</span
                                            >
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex align-items-center"
                                            >
                                                <a
                                                    href="javascript:;"
                                                    class="text-body"
                                                    ><i
                                                        class="ti ti-edit ti-sm me-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body delete-record"
                                                    ><i
                                                        class="ti ti-trash ti-sm mx-2"
                                                    ></i></a
                                                ><a
                                                    href="javascript:;"
                                                    class="text-body dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"
                                                    ><i
                                                        class="ti ti-dots-vertical ti-sm mx-1"
                                                    ></i
                                                ></a>
                                                <div
                                                    class="dropdown-menu dropdown-menu-end m-0"
                                                >
                                                    <a
                                                        href="app-user-view-account.html"
                                                        class="dropdown-item"
                                                        >View</a
                                                    ><a
                                                        href="javascript:;"
                                                        class="dropdown-item"
                                                        >Suspend</a
                                                    >
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                            <!-- <div class="row mx-2">
                                <div class="col-sm-12 col-md-6">
                                    <div
                                        class="dataTables_info"
                                        id="DataTables_Table_0_info"
                                        role="status"
                                        aria-live="polite"
                                    >
                                        Showing 1 to 10 of 50 entries
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div
                                        class="dataTables_paginate paging_simple_numbers"
                                        id="DataTables_Table_0_paginate"
                                    >
                                        <ul class="pagination">
                                            <li
                                                class="paginate_button page-item previous disabled"
                                                id="DataTables_Table_0_previous"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="DataTables_Table_0"
                                                    data-dt-idx="previous"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >Previous</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item active"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="DataTables_Table_0"
                                                    data-dt-idx="0"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >1</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="DataTables_Table_0"
                                                    data-dt-idx="1"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >2</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="DataTables_Table_0"
                                                    data-dt-idx="2"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >3</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="DataTables_Table_0"
                                                    data-dt-idx="3"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >4</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="DataTables_Table_0"
                                                    data-dt-idx="4"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >5</a
                                                >
                                            </li>
                                            <li
                                                class="paginate_button page-item next"
                                                id="DataTables_Table_0_next"
                                            >
                                                <a
                                                    href="#"
                                                    aria-controls="DataTables_Table_0"
                                                    data-dt-idx="next"
                                                    tabindex="0"
                                                    class="page-link"
                                                    >Next</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- Offcanvas to add new user -->
                    <div
                        class="offcanvas offcanvas-end"
                        tabindex="-1"
                        id="offcanvasAddUser"
                        aria-labelledby="offcanvasAddUserLabel"
                    >
                        <div class="offcanvas-header">
                            <h5
                                id="offcanvasAddUserLabel"
                                class="offcanvas-title"
                            >
                                Add User
                            </h5>
                            <button
                                type="button"
                                class="btn-close text-reset"
                                data-bs-dismiss="offcanvas"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
                            <form
                                class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework"
                                id="addNewUserForm"
                                onsubmit="return false"
                                novalidate="novalidate"
                            >
                                <div class="mb-3 fv-plugins-icon-container">
                                    <label
                                        class="form-label"
                                        for="add-user-fullname"
                                        >Full Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="add-user-fullname"
                                        placeholder="John Doe"
                                        name="userFullname"
                                        aria-label="John Doe"
                                    />
                                    <div
                                        class="fv-plugins-message-container invalid-feedback"
                                    ></div>
                                </div>
                                <div class="mb-3 fv-plugins-icon-container">
                                    <label
                                        class="form-label"
                                        for="add-user-email"
                                        >Email</label
                                    >
                                    <input
                                        type="text"
                                        id="add-user-email"
                                        class="form-control"
                                        placeholder="john.doe@example.com"
                                        aria-label="john.doe@example.com"
                                        name="userEmail"
                                    />
                                    <div
                                        class="fv-plugins-message-container invalid-feedback"
                                    ></div>
                                </div>
                                <div class="mb-3">
                                    <label
                                        class="form-label"
                                        for="add-user-contact"
                                        >Contact</label
                                    >
                                    <input
                                        type="text"
                                        id="add-user-contact"
                                        class="form-control phone-mask"
                                        placeholder="+1 (609) 988-44-11"
                                        aria-label="john.doe@example.com"
                                        name="userContact"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label
                                        class="form-label"
                                        for="add-user-company"
                                        >Company</label
                                    >
                                    <input
                                        type="text"
                                        id="add-user-company"
                                        class="form-control"
                                        placeholder="Web Developer"
                                        aria-label="jdoe1"
                                        name="companyName"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="country"
                                        >Country</label
                                    >
                                    <div class="position-relative">
                                        <select
                                            id="country"
                                            class="select2 form-select select2-hidden-accessible"
                                            data-select2-id="country"
                                            tabindex="-1"
                                            aria-hidden="true"
                                        >
                                            <option
                                                value=""
                                                data-select2-id="2"
                                            >
                                                Select
                                            </option>
                                            <option value="Australia">
                                                Australia
                                            </option>
                                            <option value="Bangladesh">
                                                Bangladesh
                                            </option>
                                            <option value="Belarus">
                                                Belarus
                                            </option>
                                            <option value="Brazil">
                                                Brazil
                                            </option>
                                            <option value="Canada">
                                                Canada
                                            </option>
                                            <option value="China">China</option>
                                            <option value="France">
                                                France
                                            </option>
                                            <option value="Germany">
                                                Germany
                                            </option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">
                                                Indonesia
                                            </option>
                                            <option value="Israel">
                                                Israel
                                            </option>
                                            <option value="Italy">Italy</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">
                                                Korea, Republic of
                                            </option>
                                            <option value="Mexico">
                                                Mexico
                                            </option>
                                            <option value="Philippines">
                                                Philippines
                                            </option>
                                            <option value="Russia">
                                                Russian Federation
                                            </option>
                                            <option value="South Africa">
                                                South Africa
                                            </option>
                                            <option value="Thailand">
                                                Thailand
                                            </option>
                                            <option value="Turkey">
                                                Turkey
                                            </option>
                                            <option value="Ukraine">
                                                Ukraine
                                            </option>
                                            <option
                                                value="United Arab Emirates"
                                            >
                                                United Arab Emirates
                                            </option>
                                            <option value="United Kingdom">
                                                United Kingdom
                                            </option>
                                            <option value="United States">
                                                United States
                                            </option></select
                                        ><span
                                            class="select2 select2-container select2-container--default"
                                            dir="ltr"
                                            data-select2-id="1"
                                            style="width: 352px"
                                            ><span class="selection"
                                                ><span
                                                    class="select2-selection select2-selection--single"
                                                    role="combobox"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-country-container"
                                                    ><span
                                                        class="select2-selection__rendered"
                                                        id="select2-country-container"
                                                        role="textbox"
                                                        aria-readonly="true"
                                                        ><span
                                                            class="select2-selection__placeholder"
                                                            >Select
                                                            Country</span
                                                        ></span
                                                    ><span
                                                        class="select2-selection__arrow"
                                                        role="presentation"
                                                        ><b
                                                            role="presentation"
                                                        ></b></span></span></span
                                            ><span
                                                class="dropdown-wrapper"
                                                aria-hidden="true"
                                            ></span
                                        ></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="user-role"
                                        >User Role</label
                                    >
                                    <select id="user-role" class="form-select">
                                        <option value="subscriber">
                                            Subscriber
                                        </option>
                                        <option value="editor">Editor</option>
                                        <option value="maintainer">
                                            Maintainer
                                        </option>
                                        <option value="author">Author</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="user-plan"
                                        >Select Plan</label
                                    >
                                    <select id="user-plan" class="form-select">
                                        <option value="basic">Basic</option>
                                        <option value="enterprise">
                                            Enterprise
                                        </option>
                                        <option value="company">Company</option>
                                        <option value="team">Team</option>
                                    </select>
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light"
                                >
                                    Submit
                                </button>
                                <button
                                    type="reset"
                                    class="btn btn-label-secondary waves-effect"
                                    data-bs-dismiss="offcanvas"
                                >
                                    Cancel
                                </button>
                                <input type="hidden" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </NewLayout>

   

</template>


