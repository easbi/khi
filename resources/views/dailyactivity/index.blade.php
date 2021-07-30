@extends('layouts.template')

@section('content')

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">Dashboard</span>
		<h3 class="page-title">Rekap Penilaian</h3>
	</div>
</div>
<!-- End Page Header -->

<!-- Content -->

<!-- Default Light Table -->
<div class="row">
	<div class="col">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Active Users</h6>
			</div>
			<div class="card-body p-0 pb-3 text-center">
				<table id="example" class="display responsive nowrap" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pegawai</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Kegiatan</th>
                                    <th>Pemakaian Internet</th>
                                    <th>Progress Kegiatan</th>
                                    <th>Aksi</th>
                            	</tr>    
                            </thead>
                            <tbody>
                                @foreach ($activities as $act)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $act->nip }}</td>
                                    <td>{{ $act->created_at }}</td>
                                    <td>{{ $act->wfo_wfh }}</td>
                                    <td>{{ $act->kegiatan }}</td>
                                    <td>{{ $act->is_internet }}</td>
                                    <td>{{ $act->kualitas }}</td>
                                    <td>
                                        <form action="{{ route('dailyact.destroy',$act->id) }}" method="POST">
                         
                                            <a class="btn btn-info btn-sm" href="{{ route('dailyact.show',$act->id) }}">Show</a>
                                            <a class="btn btn-primary btn-sm" href="{{ route('dailyact.edit',$act->id) }}">Edit</a>                         
                                            @csrf
                                            @method('DELETE')                         
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
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
