@extends('home.template')

@section('titulo','Inicio de la pagina')

@section('contenido')
	
	{!! Form::open(['route'=>'execute','method'=>'POST']) !!}
		<div class="row" align="center">
			<div class="col-sm-4">
				{!! Form::label('name','Consulta') !!}
				{!! Form::textarea('name',$in,['class' => 'form-control','style'=>"width:90%; height:300px", 'required']) !!}
			</div>
			<div class="col-sm-4">
			{!! Form::submit('ejecutar',['class'=> 'btn btn-primary']) !!}
			</div>
			<div class="col-sm-4">
				{!! Form::label('name','Consulta') !!}
				{!! Form::textarea('name',$output,['class' => 'form-control','style'=>"width:90%; height:300px", 'disabled'=>'disabled']) !!}
      		</div>
		</div>
 	{!! Form::close() !!}
@endsection