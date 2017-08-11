<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('txtnombre',$escape->nombre,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del escape'])!!}
</div>

<div class="form-group">
		{!!Form::label('direccion','Dirección:')!!}
		{!!Form::text('txtdireccion',$escape->direccion,['class'=>'form-control','placeholder'=>'Ingresa la dirección del escape'])!!}
</div>
 <div class="form-group">
      {!!Form::label('url', 'Fecha Inicio:')!!}
     {!!Form::date('txtfechaini', $escape->fecha_ini,['class' =>'form-control'])!!}
       
  </div> 

<div class="form-group">
   
 {!!Form::label('horario','Fecha Final')!!}
{!!Form::date('txtfechafin', $escape->fecha_fin, ['class' => 'form-control'])!!}
  
</div>
<div class="form-group">
  
  {!!Form::label('descripcion','Descripcion')!!}
  {!!Form::text('txtdescripcion', $escape->descripcion, ['class' => 'form-control'])!!}
    
</div>
<div class="form-group">
{!!Form::label('sugerencia','Términos y Condiciones')!!}
{!!Form::text('txtterminos', $escape->condiciones, ['class' => 'form-control'])!!}     
</div>




          