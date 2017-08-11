@extends('layouts.auth')

@section('htmlheader_title')
   @include('alerts.errors')
@endsection

@section('content')
 @include('alerts.errors')
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Admin</b>Destinos</a>
        </div><!-- /.login-logo -->

    <div class="login-box-body">
    <p class="login-box-msg"> </p>
   {!!Form::open(['route' => 'log.store', 'method' => 'post'])!!}
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ trans('Correo electrónico') }}" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="{{ trans('Contraseña') }}" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> {{ trans('Recuerdame') }}
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('Iniciar') }}</button>
            </div><!-- /.col -->
        </div>
       {!!Form::close()!!}

</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

    @include('layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
