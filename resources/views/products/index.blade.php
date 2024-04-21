@extends('layout.master')
@section('title', 'Productos')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 products-elem">
    <!-- title -->
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1>Productos</h1>        
    </div>
    <!-- content -->
    <div class="container">
        <!-- add new -->
        <div class="row">            
            <div class="col">
                <a href="{{route('products.create')}}">
                    <button type="button" class="btn btn-primary d-flex align-items-center gap-2">
                        <img class="products-elem_icon" src="{{asset('/images/icon-add.png')}}" alt="ícono añadir">
                        Agregar producto 
                    </button>
                </a>
            </div>
        </div>
        <!-- products -->
        <div class="mt-3 mb-3">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if($product->count() > 0)
                @foreach($product as $el)
                    <div class="row pt-3 pb-3 products-elem_elemento">
                        <div class="col-md-8 d-flex align-items-center">
                            <p class="m-0">{{ $el->articulo }}</p>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-end">
                            <a href="{{ route('products.show', $el->id) }}">
                                <button type="button" class="btn btn-secondary me-2 d-flex align-items-center gap-1">
                                    <img class="products-elem_icon gap-3" src="{{asset('/images/icon-info.png')}}" alt="ícono información">
                                    Ver
                                </button>
                            </a>
                            <a href="{{ route('products.edit', $el->id)}}">
                                <button type="button" class="btn btn-success me-2 d-flex align-items-center gap-1">
                                    <img class="products-elem_icon gap-3" src="{{asset('/images/icon-edit.png')}}" alt="ícono modificar">
                                    Modificar
                                </button>
                            </a>
                            <form action="{{ route('products.destroy', $el->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('¿Eliminar?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger d-flex align-items-center gap-1">
                                    <img class="products-elem_icon gap-3" src="{{asset('/images/icon-delete.png')}}" alt="ícono eliminar">
                                    Eliminar
                                </button>
                            </form>                            
                        </div>
                    </div>
                @endforeach
            @else
                <p>Aún no hay productos.</p>
            @endif
        </div>
    </div>
</main>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        setTimeout(() => {
            $('.alert-success').fadeOut();
        }, '2000');
    });
</script>
@endsection