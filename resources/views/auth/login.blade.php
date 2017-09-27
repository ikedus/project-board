@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="box">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="field{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="label" for="email">E-Mail Address</label>

                    <div class="control">
                        <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>

                        
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                </div>

                <div class="field{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="label" for="password" class="col-md-4 control-label">Password</label>

                    <div class="control">
                        <input id="password" type="password" class="input" name="password" required>

                        
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                </div>

                <div class="field">
                            <label class="checkbox" >
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button">
                            Login
                        </button>
                    </div>
                    <div class="control">
                        <p>
                        <a class="button is-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                        </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
