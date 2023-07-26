@extends('template.layout')
@section('titleGeneral', '')
@section('sectionGeneral')
<div class="d-flex justify-content-end">
        <a href="#" class="nav-link">
            <i class="fas fa-cog"></i>
        </a>
    </div>
    
    <!-- Tu código HTML para el menú de navegación -->
    <nav class="mt-2">
        <!-- ... rest of your code ... -->
    </nav>
    <form id="frmCityInsert" action="{{url('city/insert')}}" method="post">
	<div class="row">
        
		<div class="col-md-12 form-group text-center">
			<label for="">PROBLEMA</label>
		</div>
		<div class="col-md-12 form-group">
			<label for="">Nombre de la queja</label>
			<input type="text" id="txtName" name="txtName" class="form-control">
		</div>
        <div class="col-md-12 form-group">
			<label for="">Descripción</label>
			<input type="text" id="txtName" name="txtName" class="form-control">
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12 text-center">
			<button type="button" class="btn btn-primary" onclick="sendFrmCityInsert();">Enviar</button>
		</div>
	</div>
</form>

@endsection