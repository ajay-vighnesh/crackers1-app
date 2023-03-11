<script setup>
import NewLayout from '@/Layouts/NewLayout.vue';
import Pagination from '@/Components/CustomGPT/Pagination.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Link, useForm } from '@inertiajs/vue3';
import SnackBar from '@/Components/CustomGPT/SnackBar.vue';

import { onMounted } from 'vue';

defineProps({
    projects: Object,
    snackBar: Object,
});

onMounted(() => {
    setTimeout(select2JS, 100)
    setTimeout(formSelectsJS, 300)

    function select2JS() {
        let select2JS = document.getElementById('select2-js')
        if (select2JS != null) {
            select2JS.remove()
        }

        let select2Script = document.createElement('script')
        select2Script.setAttribute('src', '/vuexy-vendor-assets/libs/select2/select2.js')
        select2Script.setAttribute('id', 'select2-js')
        document.body.appendChild(select2Script)
    }

    function formSelectsJS() {
        let formSelectJS = document.getElementById('form-selects-js')
        if (formSelectJS != null) {
            formSelectJS.remove()
        }

        let formSelectScript = document.createElement('script')
        formSelectScript.setAttribute('src', '/vuexy-vendor-assets/js/forms-selects.js')
        formSelectScript.setAttribute('id', 'form-selects-js')
        document.body.appendChild(formSelectScript)
    }
});

function onSortChange(changeEvent) {
    console.log(changeEvent.target.value)
}

const submit = () => {
    form.get(route('/'));
};

const time_ago = (time) => {

  switch (typeof time) {
    case 'number':
      break;
    case 'string':
      time = +new Date(time);
      break;
    case 'object':
      if (time.constructor === Date) time = time.getTime();
      break;
    default:
      time = +new Date();
  }
  var time_formats = [
    [60, 'Seconds', 1], // 60
    [120, 'Minute', 60], // 60*2
    [3600, 'Minutes', 60], // 60*60, 60
    [7200, 'Hour', 3600], // 60*60*2
    [86400, 'Hours', 3600], // 60*60*24, 60*60
    [172800, 'Yesterday', 'Tomorrow'], // 60*60*24*2
    [604800, 'Days', 86400], // 60*60*24*7, 60*60*24
    [1209600, 'Last week', 'Next week'], // 60*60*24*7*4*2
    [2419200, 'Weeks', 604800], // 60*60*24*7*4, 60*60*24*7
    [4838400, 'Last month', 'Next month'], // 60*60*24*7*4*2
    [29030400, 'Months', 2419200], // 60*60*24*7*4*12, 60*60*24*7*4
    [58060800, 'Last year', 'Next year'], // 60*60*24*7*4*12*2
    [2903040000, 'Years', 29030400], // 60*60*24*7*4*12*100, 60*60*24*7*4*12
    [5806080000, 'Last century', 'Next century'], // 60*60*24*7*4*12*100*2
    [58060800000, 'Centuries', 2903040000] // 60*60*24*7*4*12*100*20, 60*60*24*7*4*12*100
  ];
  var seconds = (+new Date() - time) / 1000,
    token = 'ago',
    list_choice = 1;

  if (seconds == 0) {
    return 'Just now'
  }
  if (seconds < 0) {
    seconds = Math.abs(seconds);
    token = 'from now';
    list_choice = 2;
  }
  var i = 0,
    format;
  while (format = time_formats[i++])
    if (seconds < format[0]) {
      if (typeof format[2] == 'string')
        return {duration: format[list_choice]};
      else
        return {duration: Math.floor(seconds / format[2]), unit: format[1], token};
    }
  return {};
}
</script>

<template>
    <NewLayout title="My Projects">
        <template #content>
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold pt-3">
                    <span class="text-muted fs-1-5 fw-light">My Projects</span>
                </h4>
                
                <SnackBar v-if="snackBar" :isSnackbarVisible="true" :status="snackBar.status">
                        {{ snackBar.message }}
                </SnackBar>

                <div class="d-flex justify-content-end mb-3" v-if="projects.data.length > 0">
                    <div class="col-md-2 col-6 me-md-2">
                        <select class="select2-icons form-select" data-minimum-results-for-search="Infinity">
                            <option data-icon="ti ti-calendar" selected>Last 7 days</option>
                            <option data-icon="ti ti-calendar" selected>Last 30 days</option>
                            <option data-icon="ti ti-calendar" selected>Last 90 Days</option>
                        </select>
                    </div>

                    <div class="col-md-2 col-6">
                        <select class="select2-icons form-select" data-minimum-results-for-search="Infinity" @change="onSortChange($event)">
                            <option selected value="newest">Newest first</option>
                            <option selected value="oldest">Oldest days</option>
                        </select>
                    </div>

                </div>

                <div v-if="projects.data.length > 0">

                    <div class="card mb-4" v-for="project in projects.data">
                        <div class="card-body">
                            <div class="d-flex flex-wrap justify-content-between pb-3">
                                <div class="d-flex">
                                    <svg width="50" height="39" viewBox="0 0 50 39" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="M0 0H50V39H0V0Z" fill="url(#pattern0)" />
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                height="1">
                                                <use xlink:href="#image0_266_3566"
                                                    transform="translate(0 -0.0105514) scale(0.00884956 0.0113456)" />
                                            </pattern>
                                            <image id="image0_266_3566" width="113" height="90"
                                                xlink:href="data:image/png;base64,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" />
                                        </defs>
                                    </svg>
                                    <div class="ms-2">
                                        <h1 class="fs-6 fw-medium mb-0">
                                            <b>{{ project.project_name }}</b>
                                        </h1>
                                        <p class="text-muted">{{ project.sitemap_path }}</p>
                                    </div>
                                </div>

                                <div class="mt-2 mt-md-0 d-flex align-items-center">

                                    <Link :href="route('projects.pages.show', project.id)"
                                        class="btn btn-primary waves-effect waves-light me-2 d-none d-lg-block">

                                    View Pages
                                    </Link>

                                    <Link :href="route('projects.ask-me-anything', project.id)"
                                        class="btn btn-primary waves-effect waves-light me-4 d-none d-lg-block">

                                    Ask Me Anything
                                    </Link>

                                    <div class="avatar me-2">
                                        <span class="avatar-initial rounded-circle bg-label-primary">
                                            <i class="tf-icons ti ti-calendar"></i>
                                        </span>
                                    </div>

                                    <span class="me-2">Last Updated</span>
                                      <span class="btn btn-primary waves-effect waves-light me-2 p-1 px-2">{{time_ago(new Date(project.updated_at)).duration ?? ''}}</span> {{time_ago(new Date(project.updated_at)).unit ?? ''}} {{time_ago(new Date(project.updated_at)).token ?? ''}}

                                </div>
                            </div>

                            <div class="d-flex flex-wrap mb-2 justify-content-end d-lg-none pb-3">

                                    <Link :href="route('projects.pages.show', project.id)"
                                        class="btn btn-primary waves-effect waves-light me-2 mb-1">

                                    View Pages
                                    </Link>

                                    <Link :href="route('projects.ask-me-anything', project.id)"
                                        class="btn btn-primary waves-effect waves-light me-2 mb-1">

                                    Ask Me Anything
                                    </Link>
                            </div>

                            <div class="border-bottom"></div>

                            <div class="d-flex flex-wrap mb-4 pb-4 border-bottom">
                                <div class="col-lg-12 col-md-12 mt-3 custom-border-end custom-border-bottom">
                                    <div class="card shadow-none">
                                        <div class="card-header ">
                                            <h5 class="card-title mb-0 fw-medium">Stats</h5>
                                        </div>
                                        <div class="card-body">
                                            <div v-if="project.stats" class="row gy-md-3">
                                                <div class="col-md-4 col-6">
                                                    <div class="d-flex align-items-center">
                                                        <div class="badge rounded-pill bg-label-danger me-3 p-2"><i
                                                                class="ti ti-chart-pie-2 ti-sm"></i></div>
                                                        <div class="card-info">
                                                            <h5 class="mb-0 fw-medium">{{ project.stats.pages_found }}
                                                            </h5>
                                                            <small>Found</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-6">
                                                    <div class="d-flex align-items-center">
                                                        <div class="badge rounded-pill bg-label-info me-3 p-2"><i
                                                                class="ti ti-users ti-sm"></i></div>
                                                        <div class="card-info">
                                                            <h5 class="mb-0 fw-medium">{{ project.stats.pages_crawled }}
                                                            </h5>
                                                            <small>Crawled</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-6 mt-3 mt-mb-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="badge rounded-pill bg-label-primary me-3 p-2"><i
                                                                class="ti ti-check ti-sm"></i></div>
                                                        <div class="card-info">
                                                            <h5 class="mb-0 fw-medium">{{ project.stats.pages_indexed }}
                                                            </h5>
                                                            <small>Indexed</small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div v-else> No stats available yet. Please check back again</div>
                                        </div>
                                    </div>
                                </div>


                            </div>




                        </div>

                    </div>
                    <div class="d-flex justify-content-end mt-6">
                        <Pagination :links="projects.links" :first_page_url="projects.first_page_url"
                            :last_page_url="projects.last_page_url" :current_page="projects.current_page"
                            :first_page="projects.first_page" :last_page="projects.last_page" />
                    </div>
                </div>

                <div class="card mb-4" style="background: #FBF5FF" v-else>
                    <div class="card-body">
                        <h1>Welcome to CustomGPT!</h1>

                        Thank you for using CustomGPT. We've crafted this service with a lot of care and attention. We hope to give you the power of ChatGPT, but with your content.

                        We ingest your content (via a sitemap) into a project in CustomGPT. We then build you your very own custom chatGPT-style bot trained on your data.

                        Need some more information? Be sure to check out <a href="/faq" class="dot-underline" target="_blank">our FAQ.</a>

                        Can't find what you're looking for? <a href="/contact-us" target="_blank">Contact support.</a>

                    </div>
                    <div class="card-footer">
                        <Link :href="route('projects.create')">
                            <PrimaryButton class="btn btn-primary mx-auto waves-effect waves-light border-none">
                                Create your first project
                            </PrimaryButton>
                        </Link>
                    </div>
                </div>


            </div>
        </template>
    </NewLayout>
</template>


