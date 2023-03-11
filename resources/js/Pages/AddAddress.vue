<script setup>
import NewLayout from '@/Layouts/NewLayout.vue';
import { ref, onMounted } from 'vue';
import { useForm, router } from '@inertiajs/vue3';


const form = useForm({
    project_name: '',
    sitemap_path: '',
    csrf: '',
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
    let dataTablesJS = document.getElementById('datatables-js')
    if (dataTablesJS != null) {
        dataTablesJS.remove()
    }

    let dataTablesScript = document.createElement('script')
    dataTablesScript.setAttribute('src', '/vuexy-vendor-assets/libs/datatables-bs5/datatables-bootstrap5.js')
    dataTablesScript.setAttribute('id', 'datatables-js')
    document.body.appendChild(dataTablesScript)

    form.csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content')

});

// });
</script>

<template>
    <NewLayout title="AddAddress">
        <template #content>
            <div class="max-w-7xl mx-auto container-xxl py-3 mb-4 sm:px-6 lg:px-8">
                <div class="p-3 mb-2 bg-light text-dark">Add Address</div>
          

            <div class="row">
                <div class="col-lg-12">
    <div class="card p-4 h-100 rounded">
      
        <div class="mb-3 fv-plugins-icon-container">
              <!-- <label for="firstName" class="form-label">Title</label> -->

              <form  method="POST" action="/admin/address/new">

            <input type="hidden" name="_token" :value="form.csrf">

            <label for="firstName" class="form-label">Customer Name</label>
              <input class="form-control rounded w-100" type="text" name="name" placeholder="Customer Name" autofocus=""> <br><br>

              <label for="firstName" class="form-label">Address1</label>
              <input class="form-control rounded w-100" type="text" name="Address1" placeholder="Address" autofocus=""> <br> <br>
              
              <label for="firstName" class="form-label">Address2</label>
              <input class="form-control rounded w-100" type="text" name="Address2" placeholder="Address" autofocus=""> <br> <br>

              <!-- <label for="firstName" class="form-label">Price</label>
              <input class="form-control rounded w-100" type="text" name="price" placeholder="Price" autofocus=""> <br> <br> -->
              
            
              <a href="">
              <button type="submit" class="btn btn-primary waves-effect waves-light" id="position-bottom-start" style="background-color: #7367f0;">Save</button>
              </a>

              </form>
              
            <div class="fv-plugins-message-container invalid-feedback"></div></div>
        
            <!-- <div class="mb-3 fv-plugins-icon-container">
                <label for="firstName" class="form-label">Description</label>
      <div class="">
        <div id="snow-toolbar" class="ql-toolbar ql-snow bg-white border border-dark rounded">
          <span class="ql-formats">
            <span class="ql-font ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="serif"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="monospace"></span></span></span><select class="ql-font" style="display: none;"><option selected="selected"></option><option value="serif"></option><option value="monospace"></option></select>
            <span class="ql-size ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item" data-value="small"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="large"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="huge"></span></span></span><select class="ql-size" style="display: none;"><option value="small"></option><option selected="selected"></option><option value="large"></option><option value="huge"></option></select>
          </span>
          <span class="ql-formats" style="stroke: #6f6b7d;">
            <button class="ql-bold" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button>
            <button class="ql-italic" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button>
            <button class="ql-underline" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button>
            <span class="ql-color ql-picker ql-color-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-2"><svg viewBox="0 0 18 18"> <line class="ql-color-label ql-stroke ql-transparent" x1="3" x2="15" y1="15" y2="15"></line> <polyline class="ql-stroke" points="5.5 11 9 3 12.5 11"></polyline> <line class="ql-stroke" x1="11.63" x2="6.38" y1="9" y2="9"></line> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-2"><span tabindex="0" role="button" class="ql-picker-item ql-primary ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#e60000" style="background-color: rgb(230, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ff9900" style="background-color: rgb(255, 153, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#ffff00" style="background-color: rgb(255, 255, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#008a00" style="background-color: rgb(0, 138, 0);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#0066cc" style="background-color: rgb(0, 102, 204);"></span><span tabindex="0" role="button" class="ql-picker-item ql-primary" data-value="#9933ff" style="background-color: rgb(153, 51, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffff" style="background-color: rgb(255, 255, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#facccc" style="background-color: rgb(250, 204, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffebcc" style="background-color: rgb(255, 235, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffffcc" style="background-color: rgb(255, 255, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce8cc" style="background-color: rgb(204, 232, 204);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#cce0f5" style="background-color: rgb(204, 224, 245);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ebd6ff" style="background-color: rgb(235, 214, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#bbbbbb" style="background-color: rgb(187, 187, 187);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#f06666" style="background-color: rgb(240, 102, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffc266" style="background-color: rgb(255, 194, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#ffff66" style="background-color: rgb(255, 255, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66b966" style="background-color: rgb(102, 185, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#66a3e0" style="background-color: rgb(102, 163, 224);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#c285ff" style="background-color: rgb(194, 133, 255);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#888888" style="background-color: rgb(136, 136, 136);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#a10000" style="background-color: rgb(161, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b26b00" style="background-color: rgb(178, 107, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#b2b200" style="background-color: rgb(178, 178, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#006100" style="background-color: rgb(0, 97, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#0047b2" style="background-color: rgb(0, 71, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#6b24b2" style="background-color: rgb(107, 36, 178);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#444444" style="background-color: rgb(68, 68, 68);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#5c0000" style="background-color: rgb(92, 0, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#663d00" style="background-color: rgb(102, 61, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#666600" style="background-color: rgb(102, 102, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#003700" style="background-color: rgb(0, 55, 0);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#002966" style="background-color: rgb(0, 41, 102);"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="#3d1466" style="background-color: rgb(61, 20, 102);"></span></span></span><select class="ql-color" style="display: none;"><option selected="selected"></option><option value="#e60000"></option><option value="#ff9900"></option><option value="#ffff00"></option><option value="#008a00"></option><option value="#0066cc"></option><option value="#9933ff"></option><option value="#ffffff"></option><option value="#facccc"></option><option value="#ffebcc"></option><option value="#ffffcc"></option><option value="#cce8cc"></option><option value="#cce0f5"></option><option value="#ebd6ff"></option><option value="#bbbbbb"></option><option value="#f06666"></option><option value="#ffc266"></option><option value="#ffff66"></option><option value="#66b966"></option><option value="#66a3e0"></option><option value="#c285ff"></option><option value="#888888"></option><option value="#a10000"></option><option value="#b26b00"></option><option value="#b2b200"></option><option value="#006100"></option><option value="#0047b2"></option><option value="#6b24b2"></option><option value="#444444"></option><option value="#5c0000"></option><option value="#663d00"></option><option value="#666600"></option><option value="#003700"></option><option value="#002966"></option><option value="#3d1466"></option></select>

          </span>
          <span class="ql-formats" style="stroke: #6f6b7d;">
            
            
          </span>

          <span>
            <select id="cars" name="cars" class="border-0"> 
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
          </span>

          <span class="ql-formats" style="stroke: #6f6b7d;">
            <button class="ql-header" value="1" type="button"><svg viewBox="0 0 18 18"> <path class="ql-fill" d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm6.06787,9.209H14.98975V7.59863a.54085.54085,0,0,0-.605-.60547h-.62744a1.01119,1.01119,0,0,0-.748.29688L11.645,8.56641a.5435.5435,0,0,0-.022.8584l.28613.30762a.53861.53861,0,0,0,.84717.0332l.09912-.08789a1.2137,1.2137,0,0,0,.2417-.35254h.02246s-.01123.30859-.01123.60547V13.209H12.041a.54085.54085,0,0,0-.605.60547v.43945a.54085.54085,0,0,0,.605.60547h4.02686a.54085.54085,0,0,0,.605-.60547v-.43945A.54085.54085,0,0,0,16.06787,13.209Z"></path> </svg></button>
            <button class="ql-header" value="2" type="button"><svg viewBox="0 0 18 18"> <path class="ql-fill" d="M16.73975,13.81445v.43945a.54085.54085,0,0,1-.605.60547H11.855a.58392.58392,0,0,1-.64893-.60547V14.0127c0-2.90527,3.39941-3.42187,3.39941-4.55469a.77675.77675,0,0,0-.84717-.78125,1.17684,1.17684,0,0,0-.83594.38477c-.2749.26367-.561.374-.85791.13184l-.4292-.34082c-.30811-.24219-.38525-.51758-.1543-.81445a2.97155,2.97155,0,0,1,2.45361-1.17676,2.45393,2.45393,0,0,1,2.68408,2.40918c0,2.45312-3.1792,2.92676-3.27832,3.93848h2.79443A.54085.54085,0,0,1,16.73975,13.81445ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z"></path> </svg></button>
            <button class="ql-blockquote" type="button"><svg viewBox="0 0 18 18"> <rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"></rect> <rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"></rect> <path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path> <path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path> </svg></button>
            <button class="ql-code-block" type="button"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline> <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button>
          </span>
          <span class="ql-formats " style="stroke: #6f6b7d;">
            
          </span>
        </div>
        <div id="snow-editor" class="ql-container ql-snow bg-white border border-dark rounded"><div class="ql-editor" data-gramm="false" contenteditable="true"></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
      </div>
            <div class="fv-plugins-message-container invalid-feedback"></div></div> -->

    </div>
  </div>
 
</div>


    <!-- <div class="col-lg-12 card mt-2">
      <h5 class="card-header">Media</h5>
      <div class=" card-header">    
      <div class="card-body border">
          <input type="file" id="img" name="img" accept="image/*">
      </div>
    </div>
    </div>

    <div class="col-lg-12 card mt-2">
    <div class="card p-4 h-100 rounded">
      
        <div class="mb-3 fv-plugins-icon-container">
              <label for="firstName" class="form-label">Price</label>
              <input class="form-control rounded w-100" type="text" id="firstName" name="firstName" placeholder="₹ 0.00" autofocus="">
            <div class="fv-plugins-message-container invalid-feedback"></div></div>
        
            <div class="mb-3 fv-plugins-icon-container">
              <label for="firstName" class="form-label">Compare-at price</label>
              <input class="form-control rounded w-100" type="text" id="firstName" name="firstName" placeholder="₹ 0.00" autofocus="">
            <div class="fv-plugins-message-container invalid-feedback"></div></div>

    </div>
    </div>
          

    <button class="btn btn-primary waves-effect waves-light" id="position-bottom-start">
      
      <a>
            Save
            </a>
          </button>  -->

    

  </div>


        </template>
    </NewLayout>
</template>
