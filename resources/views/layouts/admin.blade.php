<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Advanced form elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <!-- <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <!-- <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/select2/css/select2.min.css"> -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <!-- <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"> -->
    <!-- BS Stepper -->
    <!-- <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/bs-stepper/css/bs-stepper.min.css"> -->
    <!-- dropzonejs -->
    <!-- <link rel="stylesheet" href="{{ asset('/assets') }}/plugins/dropzone/min/dropzone.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/assets') }}/dist/css/adminlte.min.css">
      <!-- jQuery -->
      <script src="{{ asset('/assets') }}/plugins/jquery/jquery.min.js"></script>
       <!-- date-range-picker -->
    <script src="{{ asset('/assets') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->

        @include('includes.header')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        @yield('page-content')
        <!-- /.content-wrapper -->

        <!-- footer -->
        @include('includes.footer')
        <!-- end footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

  
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <!-- <script src="{{ asset('/assets') }}/plugins/select2/js/select2.full.min.js"></script> -->
    <!-- Bootstrap4 Duallistbox -->
    <!-- <script src="{{ asset('/assets') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script> -->
    <!-- InputMask -->
    <script src="{{ asset('/assets') }}/plugins/moment/moment.min.js"></script>
    <!-- <script src="{{ asset('/assets') }}/plugins/inputmask/jquery.inputmask.min.js"></script> -->
   
    <!-- bootstrap color picker -->
    <script src="{{ asset('/assets') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('/assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <!-- <script src="{{ asset('/assets') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script> -->
    <!-- BS-Stepper -->
    <!-- <script src="{{ asset('/assets') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script> -->
    <!-- dropzonejs -->
    <!-- <script src="{{ asset('/assets') }}/plugins/dropzone/min/dropzone.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ asset('/assets') }}/dist/js/adminlte.min.js"></script>
    <!-- Page specific script -->

    <script> 
        // Alter pop up box hide 
        setTimeout(() => {
            $('.alert').alert('close')
        }, "5000");
    </script>
   
</body>

</html>