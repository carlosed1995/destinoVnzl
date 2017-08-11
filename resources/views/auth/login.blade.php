@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Login</li>
            </ol>
        </div>
    </div>
<div class="login">
	@if(Session::has('flash_message'))
 <div class="container" align="center">
    <div class="row" align="center">
        <div class="col-sm-6 col-md-6">
			<div class="alert alert-success alert-dismissable" align="center">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			        {{ Session::get('flash_message') }}
			 </div>
		</div>
	</div>
</div>
@endif
        <div class="container">
        	
            <h2>Login</h2>
            

        
            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Clave</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" style="margin-left: 86px;" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in" ></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <h4>Eres nuevo?</h4>
                    <p><a href="{{ url('/register') }}">Afiliate Aquí</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
