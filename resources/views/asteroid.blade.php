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
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h3>Fastest Asteroid:<h3>
                                        </div>
                                        <div class="card-body">
                                            <strong>Id:</strong> {{ $fastestAsteroid['id'] }}<br>
                                            <strong>Speed:</strong> {{ $fastestAsteroid['speed'] }} km/hr<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h3>Closest Asteroid:<h3>
                                        </div>
                                        <div class="card-body">
                                            <strong>Id:</strong> {{ $closestAsteroid['id'] }}<br>
                                            <strong>Distance:</strong> {{ $closestAsteroid['distance'] }} km<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h3>Average Size:<h3>
                                        </div>
                                        <div class="card-body">
                                                <strong>&nbsp;</strong><br>
                                            <strong>Size:</strong> {{ $asteroidAvgSize }} km<br>
                                        </div>
                                    </div>
                                </div>

                                <div  class="col-sm-12"><canvas id="myChart"></canvas></div>

                            </div>
                        </div>

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
    const ctx = document.getElementById('myChart');
    var dateRange = <?php echo $datesAsteroid ?>;
    var count = <?php echo $countAsteroid ?>;
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: dateRange,
            datasets: [{
                label: '# Total number of asteroids for each day',
                data: count,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection