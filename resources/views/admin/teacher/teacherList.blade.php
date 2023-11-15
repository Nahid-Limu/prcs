@extends('layouts.appAdmin')

@section('title', 'TeacherList')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Teacher</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Teacher</li>
          <li class="breadcrumb-item active">List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                {{-- <h5 class="card-title">Teacher List <button type="button" class="btn btn-outline-danger btn-sm">Small</button></h5>
                <button type="button" class="btn btn-outline-danger btn-sm text-right float-right">Small</button> --}}
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class='bx bxs-user-detail'> Teacher LIST</i></h6>
                    <strong id="success_message" class="text-success"></strong>
                    
                    <div class="dropdown no-arrow">
                      {{-- <button type="button" class="btn btn-sm btn-outline-success " data-bs-toggle="modal" data-bs-target="#AddTeacherModal"><i class='bx bxs-file-plus'></i> Add Teacher</button> --}}
                      <button type="button" class="btn btn-sm btn-outline-success " data-bs-toggle="modal"  data-bs-target="#AddTeacherModal"><i class='bx bxs-file-plus'></i> Add Teacher</button>
                    </div>
                  </div>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Words</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Brandon Jacob</td>
                      <td>Designer</td>
                      <td>28</td>
                      <td>2016-05-25</td>
                      <td>2016-05-25</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Bridie Kessler</td>
                      <td>Developer</td>
                      <td>35</td>
                      <td>2014-12-05</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ashleigh Langosh</td>
                      <td>Finance</td>
                      <td>45</td>
                      <td>2011-08-12</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Angus Grady</td>
                      <td>HR</td>
                      <td>34</td>
                      <td>2012-06-11</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Raheem Lehner</td>
                      <td>Dynamic Division Officer</td>
                      <td>47</td>
                      <td>2011-04-19</td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>
      @include('admin.teacher.addTeaherModal')

</main><!-- End #main -->

@endsection

@section('script')
<script>
function addTeacher() {

    alert('hii');
    if ( $( "#cd_id" ).val() != '' ) {
        $("#cd_id").removeClass("errorInputBox");
        $("#cat_nameError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#cd_id").addClass("errorInputBox");
        $("#cat_nameError").text('Select Categories Name').addClass("ErrorMsg");
    }

    if ( $( "#brand_id" ).val() != '' ) {
        $("#brand_id").removeClass("errorInputBox");
        $("#brand_nameError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#brand_id").addClass("errorInputBox");
        $("#brand_nameError").text('Select Brand').addClass("ErrorMsg");
    }

    if ( $( "#product_name" ).val() != '' ) {
        $("#product_name").removeClass("errorInputBox");
        $("#product_nameError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#product_name").addClass("errorInputBox");
        $("#product_nameError").text('Product Name Is Required').addClass("ErrorMsg");
    }

    if ( $( "#quantity" ).val() != '' ) {
        $("#quantity").removeClass("errorInputBox");
        $("#quantityError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#quantity").addClass("errorInputBox");
        $("#quantityError").text('Quantity Required').addClass("ErrorMsg");
    }

    if ( $( "#buying_price" ).val() != '' ) {
        $("#buying_price").removeClass("errorInputBox");
        $("#buying_priceError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#buying_price").addClass("errorInputBox");
        $("#buying_priceError").text('Buying Price Is Required').addClass("ErrorMsg");
    }

    if ( $( "#selling_price" ).val() != '' ) {
        $("#selling_price").removeClass("errorInputBox");
        $("#selling_priceError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#selling_price").addClass("errorInputBox");
        $("#selling_priceError").text('Selling Price Is Required').addClass("ErrorMsg");
    }

    if ( $( "#image1" ).val() && $( "#image2" ).val() && $( "#image3" ).val() != '' ) {
        $("#imgDiv").removeClass("errorInputBox");
        $( "#imgError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#imgDiv").addClass("errorInputBox");
        $( "#imgError").text('Image Is Required').addClass("ErrorMsg");
    }

    if ( $( "#product_description" ).val() != '' ) {
        $("#product_description").removeClass("errorInputBox");
        $("#product_descriptionError").text('').removeClass("ErrorMsg");;
        
    } else {
        $("#product_description").addClass("errorInputBox");
        $("#product_descriptionError").text('Product Description Is Required').addClass("ErrorMsg");
    }


    if ( $( "#cd_id" ).val() && $( "#brand_id" ).val() && $( "#product_name" ).val() && $( "#quantity" ).val() && $( "#buying_price" ).val() && $( "#selling_price" ).val() && $( "#image1" ).val() && $( "#image2" ).val() && $( "#image3" ).val() && $( "#product_description" ).val() ) {
        $( "#cat_nameError","#brand_nameError","#product_nameError","#quantityError","#buying_priceError","#selling_priceError","#imgError","#product_descriptionError").text('');
        $( "#cat_nameError","#brand_nameError","#product_nameError","#quantityError","#buying_priceError","#selling_priceError","#imgError","#product_descriptionError").removeClass("errorInputBox");
        
        // var myData =  $('#AddCategorieForm').serialize();
        var form = $('#AddProductDetailsForm')[0];
        var formdata = new FormData(form);
        $.ajax({
                url:"{{ route('addProduct') }}",
                method:"POST",
                data:formdata,
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {
                    console.log(response);
                    if (response.success) {
                    console.log(response);
                    $("#success_message").text(response.success);
                    $('#ProductDetailsListTable').DataTable().ajax.reload();
                    $('#AddProductDetailsModal').modal('hide');
                    $("#AddProductDetailsForm").trigger("reset");
                    
                    SuccessMsg();
                    }
                },
                error: function(response) {
                    // console.log(response);
                }
        })


    }
}

</script>
@endsection