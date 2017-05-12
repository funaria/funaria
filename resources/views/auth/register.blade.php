@extends("templates.default")
@section('title', '- Inscription')
@section("content")
<div class="row">
    <form class="col s12" id="post_register" type="post" action="{{ route('register') }}">
        <div class="row">
            <div class="input-field col s6">
                <input id="username" type="text" class="validate" name="username" required minlength="4" maxlength="25">
                <label for="username">Nom d'utilisateur</label>
            </div>
            <div class="input-field col s6">
                <input id="email" type="email" class="validate" name="email" required>
                <label for="email">E-mail</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="password" type="password" class="validate" name="password" required>
                <label for="password">Mot de passe</label>
            </div>
            <div class="input-field col s6">
                <input id="password_confirm" type="password" class="validate" name="password_confirm" required>
                <label for="password_confirm">Confirmation du mot de passe</label>
            </div>
        </div>
        <div class="row">
            <p class="grey-text">Sexe : </p>
            <div class="">
                <input name="sexe" type="radio" id="homme" value="1"/>
                <label for="test1">Homme</label>
            </div>
            <div class="">
                <input name="sexe" type="radio" id="femme" value="2"/>
                <label for="test2">Femme</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field">
                <input type="date" class="datepicker">
            </div>
        </div>
        <div class="cb_remember">
            <button type="submit" id="submit_register" class="btn">
                S'inscrire
            </button>
        </div>
    </form>
</div>
@endsection
@section('script')
    <script src="{{ url('js/auth/register.js') }}"></script>
@endsection
{{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>--}}