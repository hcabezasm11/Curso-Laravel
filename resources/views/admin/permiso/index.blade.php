@extends("theme.$theme.layout")
@section('titulo')
    Permiso
@endsection
@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Permisos</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($Permisos as $item)
                              <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->nombre}}</td>
                                  <td>{{$item->slug}}</td>
                                  <td></td>
                              </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>        
        </div>
    </div>
@endsection