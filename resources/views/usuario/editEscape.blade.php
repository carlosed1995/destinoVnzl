@extends('layouts.admin')
@section('content')
{!!Form::open(['route'=>['escapesadmin.update',$escape->id],'method'=>'PATCH'])!!}
@include('usuario.forms.updateEscape')

{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}


@endsection




