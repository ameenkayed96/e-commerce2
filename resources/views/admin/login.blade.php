@extends('layouts.login')

@section('title')
<title>الدخول</title>
@endsection

@section('content')
<div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1">
                                        <img src="{{asset('assets/images/logo.png')}}" alt="LOGO"/>

                                    </div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                    <span>الدخول للوحة التحكم </span>
                                </h6>
                            </div>

                            <!-- begin alet section-->
                            <!-- <div class="row mr-2 ml-2">
                                <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                        id="type-error">   هناك خطا في بيانات الدحول
                                </button>
                            </div> -->
                            <!-- end alet section-->
                            @include('admin.includes.alerts.errors')
                            @include('admin.includes.alerts.success')

                            <div class="card-content">
                                <div class="card-body">
                                @csrf
                                    <form class="form-horizontal form-simple" action="{{ route('login') }}" method="post"
                                          novalidate>
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" name="email"
                                                   class="form-control form-control-lg input-lg"
                                                   value="{{old('email')}}" id="email" placeholder="أدخل البريد الالكتروني ">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>


                                        </fieldset>
                                        </br>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="password" value="{{old('password')}}"
                                                   class="form-control form-control-lg input-lg"
                                                   id="user-password"
                                                   placeholder="أدخل كلمة المرور">
                                            <div class="form-control-position">
                                                <i class="la la-key"></i>
                                            </div>

                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-md-left">
                                                <fieldset>
                                                    <input type="checkbox" name="remember_me" id="remember-me" value="{{old('remember_me')}}"
                                                           class="chk-remember">
                                                    <label for="remember-me">تذكر دخولي</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-lg btn-block" ><i
                                                class="ft-unlock"></i>
                                            دخول
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection







@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
