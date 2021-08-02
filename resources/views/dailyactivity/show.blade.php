@extends('layouts.template')

@section('content')

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">Kegiatan-ku Hari Ini (KHI)</span>
		<h3 class="page-title">Detail Kegiatan</h3>
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
			@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
            </div>
            @endif
            <div class="card-body d-flex flex-column">
                <table id="example"  class="display responsive nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Pegawai</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Kegiatan</th>
                            <th>Kuantitas</th>
                            <th>Pemakaian Internet</th>
                            <th>Aksi</th>
                        </tr>    
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $activity->nip }}</td>
                            <td>{{ $activity->created_at }}</td>
                            <td>{{ $activity->wfo_wfh }}</td>
                            <td>{{ $activity->kegiatan }}</td>
                            <td>{{ $activity->kuantitas }}</td>
                            <td>{{ $activity->is_internet }}</td>
                            <td>
                                <form action="{{ route('act.destroy',$activity->id) }}" method="POST">
                                    <a class="btn btn-primary btn-sm" href="{{ route('act.edit',$activity->id) }}">Edit</a>                         
                                    @csrf
                                    @method('DELETE')                         
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
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
