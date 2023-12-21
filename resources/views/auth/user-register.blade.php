@extends('layouts.app')
@section('frontend_content')
 <div class="card">
    <div class="card-body">
          <!-- login Area Strat-->
   <section class="login-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="basic-login">
                    <h3 class="text-center mb-60">Signup From Here</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="name">Username <span>**</span></label>
                        <input id="name" name="name" :value="old('name')" required autofocus autocomplete="name"  type="text" placeholder="Enter Username" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        <label for="email-id">Email Address <span>**</span></label>
                        <input id="email-id" name="email" :value="old('email')" required autocomplete="username" type="text" placeholder="Email address..." />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <label for="pass">Password <span>**</span></label>
                        <input id="pass" type="password" name="password" required autocomplete="new-password" placeholder="Enter password..." />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        <label for="pass">Confirm Password <span>**</span></label>
                        <input id="pass" type="password"id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password..." />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <div class="mt-10"></div>
                        <button class="t-y-btn w-100">Register Now</button>
                        {{-- <div class="or-divide"><span>or</span></div> --}}
                        {{-- <a href="{{ route('login') }}" class="t-y-btn t-y-btn-grey w-100">login Now</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Area End-->
    </div>
 </div>

@endsection