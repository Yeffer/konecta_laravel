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
							<th>Peso</th>
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
								<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-venta-{{ $productoItem->id }}">
								  Venta
								</button>									
							</td>							
						</tr>
							@include('partials.venderProducto')
							@empty
								<td>No hay registros para mostrar</td>
							@endforelse		
					</tbody>
				</table>
		    </div>
	  	</div>
	</div>
@endsection
