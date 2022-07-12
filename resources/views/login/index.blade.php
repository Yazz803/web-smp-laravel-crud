@extends('layouts.templates')

@section('konten')
    

<main class="form-signin w-100" style="max-width: 500px;margin-top:180px;">
    <form action="/login" method="POST">
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @csrf
      <h1 class="h3 mb-3 fw-bold text-light text-center">Login Admin</h1>
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('passowrd') is-invalid @enderror" id="password" placeholder="Password">
        <label for="email">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
    </form>
  </main>

@endsection