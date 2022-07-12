@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-center bg-light p-5 col-lg-6 bg-opacity-25 flex-wrap flex-md-nowrap align-items-center mx-auto border-bottom">
    
    <main class="form-registration w-100">

        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {!! session('success') !!}
        </div>
        @endif
        <h1 class="h3 mb-3 fw-normal text-center"> <strong>Tambah Admin</strong></h1>
        <form action="/register" method="POST">
            @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" required>
            <label for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mt-3">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}" required>
            <label for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mt-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mt-3">
            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Tambah</button>
        </form>
    </main>
</div>
@endsection