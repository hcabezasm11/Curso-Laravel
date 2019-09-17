 @if($errors->any())
    <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i>El formulario contiene Errores</h4>
            <ul>
                @foreach ($errors->all() as $item)
                    <li>   {{ $item }}    </li>
                @endforeach
            </ul>
    </div>   
 @endif
