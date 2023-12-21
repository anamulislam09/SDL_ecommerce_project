@extends('layouts.app')
@section('frontend_content')

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror"
        name="email" placeholder="Enter  your email">
    </div>
    @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3 mt-3">
      <label for="password" class="form-label">Password:</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror"
        name="password" placeholder="Enter  your password">
    </div>
    @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="modal-footer">
   <a href="{{ route('register') }}" class="">Aready have an account !</a>
  {{-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> --}}
  <button type="submit" class="btn btn-primary">Login</button>
</div>
</form>
@endsection