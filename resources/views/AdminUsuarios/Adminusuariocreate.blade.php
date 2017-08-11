@extends('layouts.admin')

@section('content')
 {!!Form::open(['route'=>'usuarios.store', 'class'=>'form-horizontal', 'method'=>'POST'])!!}
@include('AdminUsuarios.createlayout')


    {!!Form::close()!!}
@endsection
