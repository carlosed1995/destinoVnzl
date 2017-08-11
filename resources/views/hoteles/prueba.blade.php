@extends('layouts.app')

@section('content')

<section class="content">
                @if(Session::has('flash_message'))
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a> {{ Session::get('flash_message') }}
                </div>
                @endif

    {!!Form::open(['route'=>'registrarhotel.store', 'method'=>'POST'])!!}
  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <div class="form-group has-feedback">
                                <label>Nombre:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="nombre" value="{{ old('nombre') }}" />
                        </div>
                            <div class="form-group has-feedback">
                                <label>Direccion:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="direccion" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>Telefono Local:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="telefono" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>Telefono Cel:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="telefono2" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>descripcion:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="descripcion" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>url:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="url" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>correo:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="correo" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>terminos y condiciones:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="terminosCond" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>horario:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="horario" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>Descuento:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="descuento" value="{{ old('Direccion') }}" />
                            </div>
                            <div class="form-group has-feedback">
                                <label>RIF:</label>
                                <input id='nombre' type="text" class="form-control" maxlength="25" placeholder="{{ trans('Nombre del Hotel') }}" name="rif" value="{{ old('J-0000000-156') }}" />
                            </div>

                                <div class="form-group">
                                    <label>Categoria:</label>
                                    {{Form::select('categoria', $categoria,['idCategoria'=>'idCategoria'],array('placeholder'=>'Categoria del Hotel','class'=>'form-control', 'id'=>'ciudad'))}}
                                </div>
                                <div class="form-group">
                                    <label>Ciudad:</label>
                                    {{Form::select('estado', $estado,['id_estado'=>'id_estado'],array('placeholder'=>'Ingresa el Estado','class'=>'form-control', 'id'=>'ciudad'))}}
                                </div>
                                <div class="form-group">
                                    <label>Ciudad:</label>
                                    {{Form::select('ciudad', $ciudad,['id_ciudad'=>'id_ciudad'],array('placeholder'=>'Ingresa la Ciudad','class'=>'form-control', 'id'=>'ciudad'))}}
                                </div>

    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}




@endsection
