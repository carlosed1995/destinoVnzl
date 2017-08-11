@extends('usuario.hotelcreate')
@section('content')

{!!Form::open([''])!!}
@include('usuario.forms.htl')

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}



@endsection()




