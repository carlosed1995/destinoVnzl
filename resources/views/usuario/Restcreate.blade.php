@extends('layouts.admin')
    @section('content')

  {!!Form::open(['route' => 'restaurantAdmin.store', 'method' => 'post', 'files' => true])!!}
  @include('alerts.success')
@include('usuario.forms.htl')
 
    {!!Form::close()!!}

    @endsection




