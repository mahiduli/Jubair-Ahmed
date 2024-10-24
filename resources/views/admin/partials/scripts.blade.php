{{-- <!-- core:js -->
<script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/template.js') }}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
<!-- End custom js for this page -->

<!-- Plugin js for this page -->
<script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('backend/assets/js/data-table.js') }}"></script>
<!-- End plugin js for this page -->

 --}}
 <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset('assets/js/demo.js') }}"></script>
        <!-- Summernote -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/dropzone/dropzone.js') }}"></script>


<script>
    Dropzone.autoDiscover = false;    
    $(function () {
        // Summernote
        $('#summernote_setting').summernote({
            height: '150px'
        });
       
        const dropzone = $("#image").dropzone({ 
            url:  "create-product.html",
            maxFiles: 5,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }, success: function(file, response){
                $("#image_id").val(response.id);
            }
        });
  
    });
  </script>
<script>
  Dropzone.autoDiscover = false;    
  $(function () {
      // Summernote
      $('#summernote').summernote({
          height: '300px'
      });
     
      const dropzone = $("#image").dropzone({ 
          url:  "create-product.html",
          maxFiles: 5,
          addRemoveLinks: true,
          acceptedFiles: "image/jpeg,image/png,image/gif",
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }, success: function(file, response){
              $("#image_id").val(response.id);
          }
      });

  });
</script>
<script>
    Dropzone.autoDiscover = false;    
    $(function () {
        // Summernote
        $('#summernote1').summernote({
            height: '300px'
        });
       
        const dropzone = $("#image").dropzone({ 
            url:  "create-product.html",
            maxFiles: 5,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }, success: function(file, response){
                $("#image_id").val(response.id);
            }
        });
  
    });
  </script>
  <script>
    Dropzone.autoDiscover = false;    
    $(function () {
        // Summernote
        $('#summernote2').summernote({
            height: '300px'
        });
       
        const dropzone = $("#image").dropzone({ 
            url:  "create-product.html",
            maxFiles: 5,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }, success: function(file, response){
                $("#image_id").val(response.id);
            }
        });
  
    });
  </script>
  <script>
    Dropzone.autoDiscover = false;    
    $(function () {
        // Summernote
        $('#summernote3').summernote({
            height: '300px'
        });
       
        const dropzone = $("#image").dropzone({ 
            url:  "create-product.html",
            maxFiles: 5,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }, success: function(file, response){
                $("#image_id").val(response.id);
            }
        });
  
    });
  </script>