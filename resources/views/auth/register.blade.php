@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="box">
<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="field">
                            <label class="label" for="name">Name</label>

                            <div class="control">
                                <input id="name" type="text" class="input{{ $errors->has('name') ? ' is-danger' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                
                            </div>
                            @if ($errors->has('name'))
                                    <p class="help is-danger">
                                       {{ $errors->first('name') }}
                                    </p>
                                @endif
                        </div>

                        <div class="field">
                            <label class="label" for="email">E-Mail Address</label>

                            <div class="control">
                                <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required>

                                
                            </div>
                            @if ($errors->has('email'))
                                    <p class="help is-danger">
                                       {{ $errors->first('email') }}
                                    </p>
                                @endif
                        </div>

                        <div class="field">
                            <label class="label" for="password">Password</label>

                            <div class="control">
                                <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required>

                                
                            </div>
                            @if ($errors->has('password'))
                                    <p class="help is-danger">
                                       {{ $errors->first('password') }}
                                    </p>
                                @endif
                        </div>

                        <div class="field">
                            <label class="label" for="password-confirm">Confirm Password</label>

                            <div class="control">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                            </div>
    </div>
</section>
@endsection
