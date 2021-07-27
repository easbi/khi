@extends('layouts.template')

@section('content')



<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0">Form Inputs</h6>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item p-0 px-3 pt-3">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<form>
								<div class="form-group">
									<label for="nip">NIP 18 Digit:</label>
									<input type="text" class="form-control form-control-lg mb-3" name="nip"/>
								</div>
								<div class="form-group">
									<label for="wfo_wfh">WFO/WFH:</label>
									<select class="form-control" id="wfo_wfh">
										<option value="WFO">WFO - Work From Office</option>
										<option value="WFH">WFO - Work From Home</option>
										<option value="TL">Tugas Luar</option>
										<option value="Lainnya">Lainnya (Cuti, Sakit, Izin)</option>
									</select>
								</div>
								<div class="form-group">
									<label for="is_internet">Penggunaan Interner:</label>
									<select id="is_internet" class="form-control">
										<option value="1">Ya</option>
										<option value="2">Tidak</option>
									</select>
								</div>
								<div class="form-group">
									<label for="fungsional">Jabatan:</label>
									<select id="fungsional" class="form-control">
										<option value="1">Struktural</option>
										<option value="2">Fungsional Statistisi Muda</option>
										<option value="1">Fungsional Prakom Muda</option>
										<option value="1">Fungsional Statistisi Pertama</option>
										<option value="1">Fungsional Prakom Pertama</option>				
									</select>
								</div>
								<div class="form-group">
									<label for="butir_kegiatan">Butir kegiatan:</label>
									<select class="form-control" id="butir_kegiatan">
										<option value="1">XXXX</option>				
									</select>
								</div>
								<div class="form-group">
									<label for="kegiatan">Detail Kegiatan:</label>
									<input type="text" class="form-control" name="kegiatan"/>
								</div>
								<div class="form-group">
									<label for="kuantitas">Jumlah:</label>
									<input type="number" class="form-control" name="kuantitas"/>
								</div>
								<div class="form-group">
									<label for="satuan">Kuantitas/Jumlah:</label>
									<input type="number" class="form-control" name="satuan"/>
								</div>
								<div class="form-group">
									<label for="is_done">Progrress:</label>
									<input type="text" name="is_done" class="form-control">
								</div>
								<div class="form-group">
									<label for="berkas">Bukti Kegiatan:</label>
									<input type="file" name="berkas" class="form-control">
								</div>
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
		
@endsection
