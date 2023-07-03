<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('admin_assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin_assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ url('admin_assets/node_modules/jqvmap/dist/jqvmap.min.css') }}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('admin_assets/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('admin_assets/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
   @include('header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
   @include('sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Add Shedule
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
              </ol>
            </nav>
          </div>
          <div class="row">

            <div class="col-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form method="post" action="{{ url('edit_te') }}"  class="forms-sample">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="form-group">
                      <label for="exampleInputPassword4">Teacher Name</label>
                      <input type="text" class="form-control" value="{{$data->teacher_name}}" id="exampleInputPassword4" name="teacher_name" placeholder="Teacher Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Nick Name</label>
                        <input type="text" class="form-control" value="{{$data->nickname}}" id="exampleInputPassword4" name="nickname" placeholder="Teacher Cell No">
                      </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Sure Name</label>
                        <input type="text" class="form-control" value="{{$data->sure_name}}" id="exampleInputPassword4" name="sure_name" placeholder="Teacher Sure Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Line	</label>
                        <input type="text" class="form-control" value="{{$data->teacher_line}}" id="exampleInputPassword4" name="teacher_line" placeholder="Teacher Line">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Speciality	</label>
                        <input type="text" class="form-control" value="{{$data->teacher_speciality}}" id="exampleInputPassword4" name="teacher_speciality" placeholder="Teacher Speciality ">
                      </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Cell Number</label>
                        <input type="text" class="form-control" value="{{$data->teacher_name}}" id="exampleInputPassword4" name="teacher_number" placeholder="Teacher Cell No">
                      </div>





                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ url('admin_assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ url('admin_assets/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ url('admin_assets/js/off-canvas.js') }}"></script>
  <script src="{{ url('admin_assets/js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ url('admin_assets/js/file-upload.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
