@extends("theme.$theme.layout")

@section('contenido')
<div class="row">
    <div class="col-lg-12">hola, {{session()->get('nombre_usuario') ?? 'Invitado'}}
        @include('includes.mensaje')
    </div>
</div>
@endsection