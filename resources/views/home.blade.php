@extends('layout')
@section('title','Inicio')
@section('content')
	<br>	
	<div class="container">
		<div class="card">
		 	<div class="card-header">LISTA PRODUCTOS</div>
		  	<div class="card-body">			
			  	<table class='table table-hover table-striped'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Referencia</th>
							<th>Precio</th>
							<th>Peso Kg</th>
							<th>Categoría</th>
							<th>Cantidad</th>						
							<th>Fecha creación</th>	
						</tr>
					</thead>
					<tbody>
						@forelse($productos as $productoItem)
							<tr>							
								<td>{{ $productoItem->id }}</td>
								<td>{{ $productoItem->nomProducto }}</td>
								<td>{{ $productoItem->referencia }}</td>
								<td>{{ $productoItem->precio }}</td>
								<td>{{ $productoItem->peso }}</td>
								<td>{{ $productoItem->nombre}}</td>
								<td>{{ $productoItem->stock }}</td>
								<td>{{ $productoItem->created_at }}</td>								
								<td>
									<a href="{{ route('crear.edit', $productoItem->id ) }}"><button class='btn btn-success btn-sm'>Editar</button></a>
								</td>
								<td>								
									<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $productoItem->id }}">
									  Eliminar
									</button>									
								</td>
							</tr>			
						@include('partials.delete')
						@empty
							<td>No hay registros para mostrar</td>													
						@endforelse		
					</tbody>
				</table>
		    </div>
	  	</div>
	</div>
@endsection

