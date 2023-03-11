<script setup>
import PlainLayout from '@/Layouts/PlainLayout.vue';
// import route from 'vendor/tightenco/ziggy/src/js';
import { ref, onMounted } from 'vue';
import { useForm, router } from '@inertiajs/vue3';



const form = useForm({
    project_name: '',
    sitemap_path: '',
    csrf: '',
});

const submit = () => {

    form.transform(data => ({
        ...data,
    })).post(route('projects.store'));
};


onMounted(() => {

    let dashboardJS = document.getElementById('dashboard-js')
    if (dashboardJS != null) {
        dashboardJS.remove()    
    }

    let dashboardScript = document.createElement('script')
    dashboardScript.setAttribute('src', '/public/vuexy-vendor-assets/js/dashboard.js')
    dashboardScript.setAttribute('id', 'dashboard-js')
    document.body.appendChild(dashboardScript)


    form.csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

});


</script>

<template>
    
    <PlainLayout title="Memberslist">
        <template #content>
            <div class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8">
                <div class="p-3 mb-2 bg-light text-dark">Members List</div>
            
            <div class="row">
  <div class="col-12">
   
    <h1>Add members</h1>
                

    <form method="POST" action="/admin/products/add">

        <input type="hidden" name="_token" :value="form.csrf">

        

        <!-- <csrf-token-input /> -->
        
        <input type="text" name="name"  placeholder="Enter name"> <br> <br>
        <input type="text" name="email"  placeholder="Enter Email "> <br> <br>
        <input type="text" name="address"  placeholder="Enter address "> <br> <br>

        <button type="submit">Add Members</button>

    </form>


    <!-- <form method="POST" action="/profile">
        {{ csrf_field() }}
 
        
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <input type="text" name="name"  placeholder="Enter name"> <br> <br>
        <input type="text" name="email"  placeholder="Enter Email "> <br> <br>
        <input type="text" name="address"  placeholder="Enter address "> <br> <br>

</form> -->

  </div>
</div>
</div>
        </template>
    </PlainLayout>
</template>
