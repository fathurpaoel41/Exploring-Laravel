@extends('template/main-layout')

@section('title', 'Tambah Penulis Baru')

@section('template/content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Tambah Penulis Baru</h2>
            </div>
            <form id="penulis-form" action="{{ route('store-penulis') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_penulis" class="form-label">Nama Penulis</label>
                    <input type="text" class="form-control" id="nama_penulis" name="nama_penulis">
                    <div id="nama_penulis_error" class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label for="deskripsi_penulis" class="form-label">Deskripsi Penulis</label>
                    <textarea class="form-control" id="deskripsi_penulis" name="deskripsi_penulis" rows="3"></textarea>
                </div>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('penulis-form').addEventListener('submit', function(event) {
    var namaPenulis = document.getElementById('nama_penulis');
    var namaPenulisError = document.getElementById('nama_penulis_error');
    
    if (namaPenulis.value.trim() === '') {
        event.preventDefault();
        namaPenulis.classList.add('is-invalid');
        namaPenulisError.textContent = 'Nama penulis tidak boleh kosong';
    } else {
        namaPenulis.classList.remove('is-invalid');
        namaPenulisError.textContent = '';
    }
});
</script>
@endsection
