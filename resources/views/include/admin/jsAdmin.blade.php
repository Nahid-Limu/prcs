<!-- Vendor JS Files -->
{{-- <script src="adminAssets/assets/vendor//jquery/jquery.min.js"></script> --}}
<script src="adminAssets/assets/vendor/datatables/datatables.min.js"></script>
<script src="adminAssets/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="adminAssets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="adminAssets/assets/vendor/chart.js/chart.umd.js"></script>
<script src="adminAssets/assets/vendor/echarts/echarts.min.js"></script>
<script src="adminAssets/assets/vendor/quill/quill.min.js"></script>
<script src="adminAssets/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="adminAssets/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="adminAssets/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="adminAssets/assets/js/main.js"></script>

<!-- JS FUNCTIONS -->
<script>
    //call deleteModal
    function deleteModal(Id,Name,List) {
      // alert(List);
      $("#data").text('[ '+Name+' ]');
      $("#data_id").val(Id);
      $("#listName").text('[ '+List+' ]');
    }
    
    //reset form
    function onCloseModal(fromName) {
      $("#form_result").text('');
      $('#'+fromName).trigger("reset");
    }
</script>