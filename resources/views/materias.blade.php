@extends('inicio')

@section ('materias')

<div class="col-xs-10">
	<h2>{{$carrera->nombre_carrera}}</h2>

 	<!--hover, da un efecto a la tabla-->
	<table class="table table-hover">
		<thead>
			<tr>
				<th>MATERIAS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($materias as $materia)
					<tr>	
							<td>	
								<!--dar el estilo del menu a la tabla-->
								<ul class="nav nav-pills nav-stacked">
									<li role="presentacion"><a href="{{url('/pdf_materias')}}/{{$materia->id}}">{{$materia->materias}}</a>	</li>
								</ul>

							</td>
					</tr>
			@endforeach
		</tbody>
	</table>
	
</div>
@stop