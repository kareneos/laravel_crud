@extends('layout.master')
@section('title', 'Ver Producto')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- title -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detalle de Producto</h1>        
    </div>
    <!-- content -->
    <div class="container">
        <!-- back -->
        <div class="row"> 
            <div class="col text-end">
                <a href="{{route('products')}}">&#8592; Regresar a productos</a>
            </div>
        </div>
        <!-- Info -->
        <div class="mb-5">
            <div class="mb-3">
                <label for="articulo" class="form-label">Artículo</label>
                <input type="text" name="articulo" class="form-control" value="{{ $product->articulo }}" readonly>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="{{ $product->descripcion }}" readonly>
            </div>
            <div class="mb-4 row">
                <div class="col-md-6">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" name="precio" class="form-control" id="numeroDecimal" maxlength="8" value="{{ $product->precio }}" readonly>
                </div>
                <div class="col-md-6">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="text" name="stock" class="form-control" placeholder="11" id="numero" maxlength="4"  value="{{ $product->stock }}" readonly>
                </div>
            </div>
        </div>        
    </div>
</main>  
@endsection