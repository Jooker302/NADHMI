<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

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

                  <form method="post" action="{{url('edit-sch')}}"  class="forms-sample">

                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Acedmic Year</label>
                      <input type="text" class="form-control" id="exampleInputName1" value="{{$data->academic_year ?? ''}}" name="academic_year" placeholder="Enter Acedmic Year">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">School Level</label>
                      <input type="text" class="form-control" name="school_level" value="{{$data->school_level ?? ''}}" id="" placeholder="School Level">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Name</label>
                        <select class="form-control" name="teacher_id" id="teacher_id">
                          <option value="">Select a teacher</option>
                          <!-- Add options dynamically from your server-side code -->
                          <!-- Example: -->
                           @foreach ($Teachers as $teacher)
                             <option @if($data->teacher_name == $teacher->teacher_name) selected @endif value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                           @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Sure Name</label>
                        <input type="text" class="form-control" value="{{$data->teacher_surname ?? ''}}" id="teacher_sure_name" name="sure_name"
                          placeholder="Teacher Sure Name" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Line</label>
                        <input type="text" class="form-control" value="{{$data->teacher_line ?? ''}}" id="teacher_line" name="teacher_line"
                          placeholder="Teacher Line" readonly>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Speciality</label>
                        <input type="text" class="form-control" value="{{$data->teacher_speciality ?? ''}}" id="teacher_speciality" name="teacher_speciality"
                          placeholder="Teacher Speciality" readonly>
                      </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Cell Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="teacher_number" placeholder="Teacher Cell No">
                      </div> --}}
                    <div class="form-group">
                        <label for="exampleInputPassword4">Teacher Cell Number</label>
                        <input type="text" class="form-control" value="{{$data->teacher_number ?? ''}}" id="exampleInputPassword4" name="teacher_number" placeholder="Teacher Cell No">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Day	</label>
                        <input type="text" class="form-control" value="{{$data->day ?? ''}}" id="exampleInputPassword4" name="day" placeholder="Day ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Periods	</label>
                        <input type="text" class="form-control" value="{{$data->periods ?? ''}}" id="exampleInputPassword4" name="periods" placeholder="Periods ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Class Name	</label>
                        <input type="text" class="form-control" value="{{$data->class_name ?? ''}}" id="exampleInputPassword4" name="class_name" placeholder="Class Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Sub Class Name	</label>
                        <input type="text" class="form-control" value="{{$data->sub_class_name ?? ''}}" id="exampleInputPassword4" name="sub_class_name" placeholder="Sub Class Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Semester Number	</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" value="{{$data->semester_number ?? ''}}" name="semester_number" placeholder="Semester Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Subjects	</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" value="{{$data->subjects ?? ''}}" name="subjects" placeholder="subjects">
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // $(document).ready(function() {
    //     // Retrieve the CSRF token value
    //     var csrfToken = $('meta[name="csrf-token"]').attr('content');

    //     $('#teacher_id').change(function() {
    //         var selectedTeacherId = $(this).val();

    //         $.ajax({
    //             url: '{{ url("get_teacher_sure_name") }}',
    //             type: 'POST',
    //             data: {
    //                 teacher_id: selectedTeacherId,
    //                 _token: csrfToken  // Include the CSRF token in the request
    //             },
    //             success: function(response) {
    //                 $('#teacher_sure_name').val(response.sure_name);
    //             },
    //             error: function(xhr) {
    //                 // Handle error if needed
    //             }
    //         });
    //     });
    // });

    $(document).ready(function() {
      // Add an event listener to the "teacher_id" select element
      $('#teacher_id').on('change', function() {
        var selectedTeacherId = $(this).val();

        // Make an AJAX request to the server to fetch additional data
        $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        $.ajax({
          url: '/getTeacherDetails', // Replace this with the actual URL to fetch teacher details
          method: 'POST', // Use the appropriate HTTP method
          data: { teacher_id: selectedTeacherId },
          dataType: 'json',
          success: function(response) {
            // Update other fields with the received data
            $('#teacher_sure_name').val(response.teacher_sure_name);
            $('#teacher_line').val(response.teacher_line);
            $('#teacher_speciality').val(response.teacher_speciality);
            // $('#teacher_number').val(response.teacher_number);
          },
          error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(error);
          }
        });
      });
    });

</script>

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
