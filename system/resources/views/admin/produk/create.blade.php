@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk
				</div>
				<div class="card-body">
					<form action="{{url('produk')}}" method="post" enctype="multipart/form-data">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama </label>
						@include('template.utils.errors', ['item' => 'produk'])
						<input type="text" name="nama_produk" class="form-control">
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Foto</label>
								@include('template.utils.errors', ['item' => 'foto'])
								<input type="file" class="form-control" name="foto" accept=".png">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								@include('template.utils.errors', ['item' => 'harga'])
								<input type="text" class="form-control" name="harga" >
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Berat</label>
								@include('template.utils.errors', ['item' => 'berat'])
								<input type="text" class="form-control"  name="berat">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Stok</label>
								@include('template.utils.errors', ['item' => 'stok'])
								<input type="text" class="form-control"  name="stok">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="control-label">Deskripsi</label>
						@include('template.utils.errors', ['item' => 'deskripsi'])
						<textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
					</div>

					<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function() {
	  	$('#deskripsi').summernote();
	});
</script>
@endpush