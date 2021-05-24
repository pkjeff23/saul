@extends('auth.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-wrap">
                            <div class="login-html">
                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar sesion</label>
                                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                                <div class="login-form">
                                    <div class="sign-in-htm">
                                        <div class="group">
                                            <label for="user" class="label">Usuario</label>
                                            <input id="user" type="text" class="input" name="email" value="{{ old('email') }}"  autocomplete="email" required autofocus>
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Contraseña</label>
                                            <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        </div>
                                        <div class="group">
                                            <input id="check" type="checkbox" class="check" checked>
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Iniciar sesion">
                                        </div>
                                        <div class="hr"></div>
                                        <div class="foot-lnk">
                                        </div>
                                    </div>
                                    <div class="sign-up-htm">
                                        <div class="group">
                                            <label for="user" class="label">Username</label>
                                            <input id="user" type="text" class="input">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Password</label>
                                            <input id="pass" type="password" class="input" data-type="password">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Repeat Password</label>
                                            <input id="pass" type="password" class="input" data-type="password">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Email Address</label>
                                            <input id="pass" type="text" class="input">
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Sign Up">
                                        </div>
                                        <div class="hr"></div>
                                        <div class="foot-lnk">
                                            <label for="tab-1">Already Member?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
