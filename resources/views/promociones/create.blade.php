@extends('layouts.appdetalle')

@section('content')

<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="{{url('/home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
                <li class="active">Hoteles</li>
            </ol>
        </div>
    </div>
<!-- //breadcrumbs -->
<!--- groceries -->

<div class="register">
        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}
                    <br>
                    <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
                @endif
        </div>
        <div class="container">
            <h2>Registrar Promocion</h2>
                <div class="panel-body">
                
                    <form class="form-horizontal"  role="form" method="POST" action="{{ route('planesvip.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombres') }}">

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="costo" class="col-md-4 control-label">Costo</label>

                            <div class="col-md-6">
                                <input id="costo" type="text" class="form-control" name="costo" value="{{ old('costo') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="detalle" class="col-md-4 control-label">Detalle</label>

                            <div class="col-md-6">
                                <input id="detalle" type="text" class="form-control" name="detalle" value="{{ old('detalle') }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                            <label for="descripcion" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}">

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_ini') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">Fecha Inicio</label>

                            <div class="col-md-6">
                                <input id="fecha_ini" type="date" class="form-control" name="fecha_ini" value="{{ old('fecha_ini') }}">

                                @if ($errors->has('fecha_ini'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_ini') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_fin') ? ' has-error' : '' }}">
                            <label for="url" class="col-md-4 control-label">Fecha Fin</label>

                            <div class="col-md-6">
                                <input id="fecha_fin" type="date" class="form-control" name="fecha_fin" value="{{ old('fecha_fin') }}">

                                @if ($errors->has('fecha_fin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_fin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


@endsection
