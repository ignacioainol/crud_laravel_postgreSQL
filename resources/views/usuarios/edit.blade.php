@extends('usuarios.layout')

@section('content')

	
	<h2>Editar Usuario</h2>

	@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif﻿

	<form action="{{ route('usuarios.update',$usuario->id) }}" method="post">
		@csrf
		@method('PUT')

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<p>Nombres: </p>
					<input type="text" name="nombres" value="{{ $usuario->nombres }}" class="form-control" placeholder="Ingrese sus nombres">
				</div>
				
				<div class="form-group">
					<p>Ap Materno: </p>
					<input type="text" name="apellido_materno" value="{{ $usuario->apellido_materno }}" class="form-control" placeholder="Ingrese apellido materno">
				</div>

				<div class="form-group">
					<p>Email: </p>
					<input type="email" value="{{ $usuario->email }}" name="email" class="form-control" placeholder="Ingrese email">
				</div>

				<div class="form-group">
					<p>Status: </p>
					<input type="number" value="{{ $usuario->status }}" name="status" class="form-control" placeholder="Status">
				</div>
				
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<p>Ap Paterno: </p>
					<input type="text" name="apellido_paterno" value="{{ $usuario->apellido_paterno }}" class="form-control" placeholder="Ingrese apellido paterno">
				</div>

				<div class="form-group">
					<p>RUT: </p>
					<input type="text" value="{{ $usuario->rut }}" name="rut" class="form-control" placeholder="Ingrese Rut">
				</div>

				<div class="form-group">
					<p>Teléfono: </p>
					<input type="text" value="{{ $usuario->telefono }}" name="telefono" class="form-control" placeholder="Ingrese su telefono">
				</div>

				<div class="form-group">
					<p>Fecha Nacimiento: </p>
					<input type="date" value={{ $usuario->fecha_nacimiento }} name="fecha_nacimiento" class="form-control" placeholder="Ingrese su telefono">
				</div>


				<div class="form-group">
					<button type="submit" class="btn btn-info">Enviar</button>
				</div>
			</div>
		</div>
	</form>

	

@endsection