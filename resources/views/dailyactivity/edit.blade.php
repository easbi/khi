@extends('layouts.template')

@section('content')

<div class="page-header row no-gutters py-4">
	<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
		<span class="text-uppercase page-subtitle">KHI</span>
		<h3 class="page-title">Edit Kegiatan</h3>
	</div>
</div>

<!-- Content -->
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Form Inputs</h6>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item p-0 px-3 pt-3">
					@if ($errors->any())
	                    <div class="alert alert-danger">
	                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
	                        <ul>
	                            @foreach ($errors->all() as $error)
	                                <li>{{ $error }}</li>
	                            @endforeach
	                        </ul>
	                    </div>
	                @endif
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<form action="{{ route('act.update', $activity->id) }}" method="POST" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label for="tgl">Tangal</label>
									<input type="date" class="form-control form-control-lg mb-3" name="tgl" value="{{ $activity->tgl }}">
								</div>
								<div class="form-group">
									<label for="wfo_wfh">WFO/WFH:</label>
									<select class="form-control" id="wfo_wfh" name="wfo_wfh">
										<option value="WFO" @if($activity->wfo_wfh == "WFO") selected @endif>WFO - Work From Office</option>
										<option value="WFH" @if($activity->wfo_wfh == "WFH") selected @endif>WFO - Work From Home</option>
										<option value="TL" @if($activity->wfo_wfh == "TL") selected @endif>Tugas Luar</option>
										<option value="Lainnya" @if($activity->wfo_wfh == "Lainnya") selected @endif>Lainnya (Cuti, Sakit, Izin)</option>
									</select>
								</div>
								<div class="form-group">
									<label for="is_internet">Penggunaan Internet:</label>
									<select id="is_internet" class="form-control" name="is_internet">
										<option value="1" @if($activity->is_internet == "1") selected @endif>Ya</option>
										<option value="2" @if($activity->is_internet == "2") selected @endif>Tidak</option>
									</select>
								</div>
								<div class="form-group">
									<label for="kegiatan">Detail Kegiatan:</label>
									<input type="text" class="form-control" name="kegiatan" value="{{ $activity->kegiatan }}" />
								</div>
								<div class="form-group">
									<label for="durasi">Durasi Pengerjaan (menit):</label>
									<input type="text" class="form-control" name="durasi" value="{{ $activity->durasi }}" />
								</div>
								<div class="form-group">
									<label for="kuantitas">Jumlah:</label>
									<input type="number" class="form-control" name="kuantitas" value="{{ $activity->kuantitas }}" />
								</div>
								<div class="form-group">
									<label for="satuan">Satuan:</label>
									<input type="text" class="form-control" name="satuan" value="{{ $activity->satuan }}" />
								</div>
								<div class="form-group">
									<label for="is_done">Status Penyelesaian</label>
									<select id="is_done" class="form-control" name="is_done">
										<option value="1" @if($activity->is_done == "1") selected @endif>Sudah Selesai</option>
										<option value="2" @if($activity->is_done == "2") selected @endif>Belum Selesai</option>
									</select>
								</div>
								<div class="form-group">
									<label for="berkas">Bukti Kegiatan:</label>
									<input type="file" name="berkas">
								</div>
								<br>
								<div class="form-group">
									<button type="submit" class="btn btn-success">Kirim</button>
								</div>
							</form>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End of Content -->

@endsection
