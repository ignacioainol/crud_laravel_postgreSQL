@extends('usuarios.layout')

@section('content')

	
	<h2>Usuarios</h2>

	@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif﻿

	<a class="btn btn-info mb-3" href="{{ route('usuarios.create') }}">Crear</a>
	
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Ap Paterno</th>
	      <th scope="col">Ap Materno</th>
	      <th scope="col">Rut</th>
	      <th scope="col">Telefono</th>
	      <th scope="col">Email</th>
	      <th scope="col">Status</th>
	      <th scope="col">Fec. Nac.</th>
	    </tr>
	  </thead>
	  <tbody>

	  	@foreach($usuarios as $usuario)
	    <tr>
	      <th scope="row">1</th>
	      <td>{{ $usuario->nombres }}</td>
	      <td>{{ $usuario->apellido_paterno }}</td>
	      <td>{{ $usuario->apellido_materno }}</td>
	      <td>{{ $usuario->rut }}</td>
	      <td>{{ $usuario->telefono }}</td>
	      <td>{{ $usuario->email }}</td>
	      <td>{{ $usuario->status }}</td>
	      <td>{{ $usuario->fecha_nacimiento }}</td>
	      <td><a class="btn btn-success" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fas fa-edit"></i></a></td>
	    </tr>
	    @endforeach

	  </tbody>
	</table>

	{{ $usuarios->links() }}

@endsection