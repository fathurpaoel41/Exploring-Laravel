@extends('template/main-layout')

@section('title', 'Daftar Buku')

@section('template/content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Daftar Buku</h2>
                <button class="btn btn-primary" onclick="window.location.href ='{{ route('Dashboard') }}' ">Buat Buku Baru</button>
            </div>
        </div>
        <!-- Add more columns or content as needed -->
    </div>
</div>
@endsection

<script>
</script>