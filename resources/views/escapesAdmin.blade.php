@extends('layouts.admin')
@section('content')

{!!Form::open(['route' => 'escapesadmin.store', 'method' => 'POST'])!!}
@include('usuario.forms.EscapesAdminVista')

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}



@endsection()




