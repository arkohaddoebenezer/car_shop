@extends('layouts.users')
@section('content')
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Login Now</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset class="p-4">
                            <input type="email" name="email" :value="old('email')" required autofocusid="email" placeholder="Email" class="border p-3 w-100 my-2">
                            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" class="border p-3 w-100 my-2">
                            <div class="loggedin-forgot">
                                    <input type="checkbox" id="remember_me" name="remember">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
                            </div>
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Log in</button>
                            <a class="mt-3 d-block  text-primary" href="{{ route('password.request') }}">Forget Password?</a>
                            <a class="mt-3 d-inline-block text-primary" href="{{route('register')}}">Register Now</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection