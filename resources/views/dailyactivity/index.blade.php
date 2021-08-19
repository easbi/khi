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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Monitoring Aktivitas</h6>
            </div>
            <div class="card-body d-flex flex-column">
               <p class="text-center">
                    <strong>Darah Tinggi</strong>
                </p>
                <div class="chart">
                    <canvas id="myChart1"></canvas>
                    <script type="text/javascript">
                        var ctx = document.getElementById('myChart1').getContext('2d');
                        var chart = new Chart(ctx, {
                                                // The type of chart we want to create
                                                type: 'line',
                                                // The data for our dataset
                                                data: {
                                                    labels: <?php echo $darah_tinggi_periode; ?>,
                                                    datasets: [{
                                                        label: 'Kasus Darah Tinggi',
                                                        backgroundColor: 'rgb(255, 99, 132)',
                                                        borderColor: 'rgb(255, 99, 132)',
                                                        data: <?php echo $darah_tinggi_jumlah; ?>
                                                    }]
                                                },
                                                // Configuration options go here
                                                options: {
                                                    tooltips :{
                                                        mode: 'nearest'
                                                    },
                                                    animation: {
                                                        duration: 2000,
                                                        easing : 'easeInBounce'
                                                    }
                                                }
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
