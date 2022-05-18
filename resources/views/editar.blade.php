@extends('layout')
@section('title','crear')
@section('content')	

<div class="container" id="productos">
<br>
<div class="card">
  	<div class="card-header">EDITAR PRODUCTO</div>
 		<div class="card-body">
			<form class="form-horizontal" id="clienteForm" method="POST" action="{{ route('crear.update', $productos->id) }}">
			@csrf @method('PATCH')
		  	<div class="form-group row">
		     	<label class="control-label col-sm-2" for="nombre">Nombre:</label>
		    	<div class="col-sm-10">          
			        <input type="text" 
			        	   name="nombre"
			        	   id="nombre" 
			        	   placeholder="Ingrese nombre" 
			        	   class="form-control" 
			        	   value="{{$productos->nombre}}" 
			        >
			        {!! $errors->first('nombre', '<small>:message</small><br>')  !!}
		      	</div>
			    </div>
			    <div class="form-group row">
			      	<label class="control-label col-sm-2" for="referencia">Referencia:</label>
			     	<div class="col-sm-10">
			        	<input type="text" 
			        		   id="referencia"
			        		   placeholder="Ingrese referencia"
			        		   name="referencia"
			        		   class="form-control"
			        		   value="{{$productos->referencia}}">
			        	{!! $errors->first('referencia', '<small>:message</small><br>')  !!}
			      	</div>
			    </div>
			    <div class="form-group row">
			      	<label class="control-label col-sm-2" for="precio">Precio:</label>
			      	<div class="col-sm-10">          
			        	<input type="number" 
			        		   id="precio"
			        		   placeholder="Ingrese precio"
			        		   name="precio"
			        		   class="form-control"
			        		   value="{{$productos->precio}}">
			        	{!! $errors->first('precio', '<small>:message</small><br>')  !!}
			      	</div>
			    </div>
			    <div class="form-group row">
			      	<label class="control-label col-sm-2" for="peso">Peso:</label>
			      	<div class="col-sm-10">          
			        	<input type="number" 
			        		   id="peso"
			        		   placeholder="Ingrese peso" 
			        		   name="peso"
			        		   class="form-control"
			        		   value="{{$productos->peso}}">
			        	{!! $errors->first('peso', '<small>:message</small><br>')  !!}
			    	  </div>
			    </div>
			    <div class="form-group row">
			      	<label class="control-label col-sm-2" for="categoria">Categoría:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="categoria_id"   name="categoria_id" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 
			        		@forelse($categorias as $categoriaItem)
								@if($productos->categoria_id == $categoriaItem->id)
			        				<option value="{{ $categoriaItem->id}}" selected>{{ $categoriaItem->nombre}}</option>
			        			@else
			                    	<option value="{{$categoriaItem->id}}"> {{ $categoriaItem->nombre }}</option>
			                	@endif
							@empty
								<td>No hay registros para mostrar</td>
							@endforelse	
			        	</select>
			        	{!! $errors->first('categoria_id', '<small>:message</small><br>')  !!}	
			      	</div>
		    	</div>
		    	<div class="form-group row">
		      		<label class="control-label col-sm-2" for="stock">Stock:</label>
		      		<div class="col-sm-10">          
		        		<input type="number"
		        			   id="stock"
		        			   placeholder="Ingrese stock"
		        			   name="stock"
		        			   class="form-control"
		        			   value="{{$productos->stock}}">
		        		{!! $errors->first('stock', '<small>:message</small><br>')  !!}
		      		</div>
		    	</div>
		    	<div class="form-group row">        
		      		<div class="col-sm-offset-2 col-sm-10">
		        		<button type="submit" class="btn btn-primary" id="registro">Actualizar</button>
		      		</div>
		    	</div>
		  	</form>
  		</div>
	</div>
@endsection
