@extends('layouts.masters.auth')

@section('content')
<div class="row overflow-hidden" style="height: 100vh;">
    <div class="col-md-5 bg-primary overflow-hidden d-grid align-items-center" style="justify-items: center; background-image: url({!! url('assets/img/statue-bg.png') !!}); background-repeat: no-repeat; background-position: 100% 100%;">
        <div class="mb-5">
            <div style="font-family: Anton; letter-spacing: 2px">
                <h1 class="h1 fw-bold text-white">CAVITE STATE UNIVERSITY</h1>
                <h1 class="h1 fw-bold text-white">CCAT CAMPUS</h1>
                <h1 class="h1 fw-bold text-yellow">WEB PORTAL</h1>
            </div>
            <img class="mb-5" style="width: 70%;" src="{!! url('assets/img/logo.png') !!}" alt="">
        </div>
    </div>
    <div class="col-md-7 d-grid align-items-center" style="justify-content: center;">
        <div style="width: 25vw;">
            <form method="post" action="{{ route('login.perform') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h1 class="h1 mb-3 fw-bold text-start">Login</h1>
                <h1 class="h5 mb-3 fw-normal text-start">Enter your credentials.</h1>
                @include('layouts.partials.messages')

                <div class="form-group form-floating mb-3 mt-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Email or Username</label>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                
                <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <button class="w-100 btn btn-lg btn-primary py-1" type="submit">Login</button>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="text-end my-2">
                            <a href="">Trouble logging in?</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center mt-3">
                            <a href="{{ route('register.show') }}">Would you like to register instead?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection