@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="{{route('config')}}">Configuración</a></li>
    <li>Nuevo Administrador</li>
</ul>
<div class="row " >
    <div class="col-md-12">
        <div class="block">
            <!-- Normal Form Title -->
            <div class="block-title">
                <h2><strong>Crear</strong> Administrador</h2>
            </div>
            <!-- END Normal Form Title -->

            <!-- Normal Form Content -->
            <form action="{{route('admin.admins.update', $admin)}}" method="POST" class="form-horizontal form-bordered">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="col-xs-4">
                        <label for="example-nf-email">Nombre</label>
                        <select id="user_id" name="user_id" class="form-control" size="1">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}" @if($admin->name == $user->name) selected  @endif>{{$user->name}}</option>  
                            @endforeach   
                        </select>
    
                    </div>
                    <div class="col-xs-2">
                        <label for="example-nf-email">C I</label>
                        <input type="text" id="ci" name="ci" class="form-control" value="{{$admin->ci}}">
                       
    
                    </div>
                    <div class="col-md-3">
                        <div class="input-group bootstrap-timepicker">
                            <label for="example-nf-email">Fecha de nacimiento</label>
                            <input type="text" id="fecha_nac" name="fecha_nac" class="form-control input-datepicker" data-date-format="dd/mm/yy" value="{{$admin->fecha_nac}}">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <label for="example-nf-email">Ocupaciòn</label>
                        <input type="text" id="ocupacion" name="ocupacion" class="form-control" value="{{$admin->ocupacion}}">
                     
    
                    </div>
                    <div class="col-md-6">
                        <label for="example-nf-email">Dirección</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" value="{{$admin->direccion}}">
                    </div>
                    <div class="col-md-3">
                        <label for="example-nf-email">Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" value="{{$admin->telefono}}">
                    </div>
                </div>
    
                <div class="form-group form-actions">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-sm btn-info">Guardar</button>
                    </div>
                </div>
            </form>
            <!-- END Normal Form Content -->
        </div>
    </div>

</div>

@endsection 