
@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'RegistrarRestaurant.store', 'method' => 'post'])!!}
  @include('alerts.success')
@include('usuario.forms.htl')

    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
    @endsection




