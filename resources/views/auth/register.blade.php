@extends('layouts.app')

@section('content')
 {!!Form::open(['route'=>'registrar.store', 'class'=>'form-horizontal', 'method'=>'POST'])!!}
@include('usuario.usr')


    {!!Form::close()!!}
@endsection
