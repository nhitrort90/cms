@extends('CMS::auth.master')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#">{{ config('cms.app_name') }}</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">{{ trans('CMS::core.login_instructions') }}</p>
            @include('CMS::partials._errors')
            {!! Form::open(['route' => 'CMS::admin.login', 'method' => 'post']) !!}
                <div class="form-group has-feedback">
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> @lang('CMS::core.remember_me')
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('CMS::core.sign_in')</button>
                    </div><!-- /.col -->
                </div>
            {!! Form::close() !!}

            <a href="{{ route('CMS::admin.recover-password') }}">@lang('CMS::core.i_forgot_my_password')</a><br>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
@endsection