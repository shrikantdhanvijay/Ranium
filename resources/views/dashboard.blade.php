@extends('layouts.admin')
@section('page-content')

<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    
                        <!-- <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                        @include('includes.flash-message')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Date picker</h3>
                                        </div>
                                        <form method="post" action="{{ route('/get-asteroid') }}">
                                            {{ csrf_field() }}
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>Start Date:</label>
                                                    <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" name="start_date"  data-target="#reservationdate1" />
                                                        <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>End Date:</label>
                                                    <div class="input-group date " id="reservationdate2" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" name="end_date" data-target="#reservationdate2" />
                                                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                                <!-- /.form group -->
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col (right) -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    //Date picker


    $(function() {

        $('#reservationdate1').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#reservationdate2').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        //Date range picker
        // $('#reservation').daterangepicker()
        // $('#reservation').daterangepicker({
        //     locale: {
        //         format: 'DD/MM/YYYY'
        //     }
        // })
    })
</script>
@endsection