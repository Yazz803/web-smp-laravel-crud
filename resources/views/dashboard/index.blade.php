@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 px-5">Welcome Back, {{ auth()->user()->name }}</h1>
    <br>
    <a href="/" class="btn btn-dark">Kembali ke halaman utama</a>
</div>
@endsection