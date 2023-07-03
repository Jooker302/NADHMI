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
                            <a href="{{ url('add_shedule') }}">
                                <Button class="btn btn-primary">Add Shedules</Button>
                            </a>
                        </h3>

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>

                            </ol>
                        </nav>
                    </div>
                    <form action="{{ url('search') }}" method="GET">
                        <div>
                            <input type="text" class="form-control" style="width: 550px;" name="search_query">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>

                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <h4 class="card-title">Shedule</h4> --}}
                                    <p class="card-description">
                                        {{-- Add class <code>.table-striped</code> --}}
                                    </p>
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    SNo
                                                </th>
                                                <th>
                                                    Acedmic Year
                                                </th>
                                                <th>
                                                    Semester Number
                                                </th>
                                                <th>
                                                    School Level
                                                </th>
                                                <th>
                                                    Teacher Name
                                                </th>
                                                <th>
                                                    Phone Number
                                                </th>
                                                <th>
                                                    Sure Name
                                                </th>
                                                <th>
                                                    Teacher Line
                                                </th>
                                                <th>
                                                    Teacher Speciality
                                                </th>
                                                <th>
                                                    Day
                                                </th>
                                                <th>
                                                    Periods
                                                </th>
                                                <th>
                                                    Subjects
                                                </th>
                                                <th>
                                                    Class Name
                                                </th>
                                                <th>
                                                    Sub Class Name
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                                @if(auth()->user()->role == 'superadmin')
                                                <th>
                                                    Actions
                                                </th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($shedule as $data)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $data->academic_year }}
                                                    </td>
                                                    <td>
                                                        {{ $data->semester_number }}
                                                    </td>
                                                    <td>
                                                        {{ $data->school_level }}
                                                    </td>
                                                    <td>
                                                        {{ $data->teacher_name }}
                                                    </td>
                                                    <td>
                                                        {{ $data->teacher_number }}
                                                    </td>
                                                    <td>
                                                        {{ $data->teacher_surname }}
                                                    </td>
                                                    <td>
                                                        {{ $data->teacher_line }}
                                                    </td>
                                                    <td>
                                                        {{ $data->teacher_speciality }}
                                                    </td>
                                                    <td>
                                                        {{ $data->day }}
                                                    </td>
                                                    <td>
                                                        {{ $data->periods }}
                                                    </td>
                                                    <td>
                                                        {{ $data->subjects }}
                                                    </td>
                                                    <td>
                                                        {{ $data->class_name }}
                                                    </td>
                                                    <td>
                                                        {{ $data->sub_class_name }}
                                                    </td>
                                                    <td>
                                                        {{ $data->status }}
                                                    </td>
                                                    @if(auth()->user()->role == 'superadmin')
                                                    <td>
                                                        <a class="btn btn-warning" href="{{url('update-sch',$data->id)}}">Update</a>
                                                        <a class="btn btn-danger" href="{{url('delete-sch',$data->id)}}">Delete</a>
                                                    </td>
                                                    @endif

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a
                                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
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
    <!-- End custom js for this page-->
</body>

</html>
