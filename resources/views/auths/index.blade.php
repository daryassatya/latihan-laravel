@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <form class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
                <div class="form-floating">
                    <input type="email" id="email" class="form-control" name="email" placeholder="name@example.com"
                        required>
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" id="password" class="form-control rounded-bottom" name="password"
                        placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="{{ route('register') }}">Register
                    Now!</a></small>
        </div>
    </div>
@endsection
