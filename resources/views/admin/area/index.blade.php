@extends('layouts.main')
@section('section')
<ul class="breadcrumb breadcrumb-top">
    <li> <a href="">Configuración</a></li>
    <li> <a href="">Configuración Inicial</a></li>
    <li>Grados</li>
</ul>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="block ">
            <!-- Row Styles Title -->
            <div class="block-title">
                <h2><strong>Gestiones</strong> Escolares</h2>
                <div class="block-options pull-right">
                    <a  class="btn btn-success btn-xs" href="{{route('admin.areas.create')}}" data-toggle="tooltip" title="Nuevo"><strong>Nueva</strong> Gestión <strong> Escolar</strong></a>
                </div>
            </div>
            <!-- END Row Styles Title -->

            <!-- Row Styles Content -->
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">id</i></th>
                            <th class="text-center">Areas</th>
                            <th class="text-center">Estado</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($areas as $area)
                        <tr class="">
                            <td class="text-center">{{$area->id}}</td>
                            <td class="text-center">{{$area->area}}</td>
                            <td class="text-center">
                                @if ($area->estado == 0)
                                <a href="javascript:void(0)" class="label label-danger">Inactivo</a>
                                @else
                                <a href="javascript:void(0)" class="label label-primary">Activo</a>
                                @endif
                                
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-md">
                                    <a href="{{route('admin.areas.edit', $area )}}" data-toggle="tooltip" title="Editar" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                    <a  onclick="deleteArea('{{$area->id}}')"  title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>                  
                        @endforeach
                    </tbody>
                </table>
                {{-- <form   action="{{route('admin.areas.destroy', $area)}}" 
                                    method="POST" 
                                    id="FormDelete">
                                    @method('DELETE')
                                    @csrf   
                </form> --}}
            </div>
            <!-- END Row Styles Content -->
        </div>
    </div>
</div>
@push('js')
    <script>
        function deleteArea(id){
            let form = document.getElementById('FormDelete');
            form.submit();
        }
    </script>  
@endpush  
@endsection