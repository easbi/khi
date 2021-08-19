@extends('layouts.template')

@section('content')

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">Dashboard</span>
		<h3 class="page-title">Rekap Harian</h3>
	</div>
</div>
<!-- End Page Header -->

<!-- Content -->

<!-- Default Light Table -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Monitoring Aktivitas</h6>
            </div>
            <div class="card-body d-flex flex-column">
                <p class="text-center">
                    <strong>Progress Entri Pegawai</strong>
                </p>
                <style type="text/css">
                    .chart1 {
                        height:80px
                    }
                </style>
                <div class="chart1">
                    <canvas id="myChart1"></canvas>
                    <script type="text/javascript">
                        var bar_ctx = document.getElementById('myChart1');
                        var bar_chart = new Chart(bar_ctx, {
                          type: 'horizontalBar',
                          data: {
                            labels: [],
                            datasets: [{
                              data: [<?php echo number_format($userfill*100/13,2); ?>],
                              backgroundColor: "#00BC43",
                              datalabels: {
                                color: 'white'               //Color for percentage value
                              }
                            }, {
                              data: [100 - <?php echo $userfill*100/13; ?>],
                              backgroundColor: "lightgrey",
                              hoverBackgroundColor: "lightgrey",
                              datalabels: {
                                color: 'lightgray'          // Make the color of the second bar percentage value same as the color of the bar
                              }
                            }, ]
                          },
                          options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            legend: {
                              display: false
                            },
                            tooltips: {
                              enabled: false
                            },
                            scales: {
                              xAxes: [{
                                display: false,
                                stacked: true
                              }],
                              yAxes: [{
                                display: false,
                                stacked: true
                              }],
                            }, // scales
                            plugins: {                                                                  // PROVIDE PLUGINS where you can specify custom style
                              datalabels: {
                                align: "start",
                                anchor: "end",
                                backgroundColor: null,
                                borderColor: null,
                                borderRadius: 4,
                                borderWidth: 1,
                                font: {
                                  size: 20,
                                  weight: "bold",                                           //Provide Font family for fancier look
                                },
                                offset: 10,
                                formatter: function(value, context) {
                                  return context.chart.data.labels[context.dataIndex];      //Provide value of the percentage manually or through data
                                },
                              },
                            },
                          }, // options


                        });
                    </script>
                </div>                    
            </div>
        </div>
    </div>
</div>
<div class="row">
	<div class="col">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Tabel Aktivitas</h6>
			</div>
			@if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <i class="fa fa-check mx-2"></i>
                <strong>Success!</strong> {{ $message }}
              </div>
            @endif
            <div class="card-body d-flex flex-column">
                <table id="example"  class="display responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pegawai</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Kegiatan</th>
                            <th>Pemakaian Internet</th>
                            <th>Progress</th>
                            <th>Aksi</th>
                        </tr>    
                    </thead>
                    <tbody>
                        @foreach ($activities as $act)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($act->fullname , 17) }}</td>
                            <td>{{ Carbon\Carbon::parse($act->created_at)->format('d-M-Y')  }}</td>
                            <td>{{ $act->wfo_wfh }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($act->kegiatan , 40) }}</td>
                            <td>
                                @if($act->is_internet == 1)
                                    <span class="badge badge-success">Ya</span>
                                @else
                                    <span class="badge badge-primary">Tidak</span>
                                @endif
                            </td>
                            <td>
                                @if($act->is_done == 2)
                                    <span class="badge badge-warning">Selesai?</span>
                                @else
                                    <span class="badge badge-success">Selesai</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('act.destroy',$act->id) }}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{ route('act.show',$act->id) }}">Show</a>
                                    @if ($act->nip == Auth::user()->nip )
                                    <a class="btn btn-primary btn-sm" href="{{ route('act.edit',$act->id) }}">Edit</a>
                                    @endif 
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>                        
            </div>
		</div>
	</div>
</div>
<!-- End Default Light Table -->
<!-- End of Content -->		
@endsection

@push('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      "scrollX": true,
       responsive: true
    });
  } );
</script>
@endpush
