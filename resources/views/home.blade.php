@extends('layout.master')
@section('title', 'Home')

@section('content')
<!-- HOME START -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 home">
    <!-- title -->
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="text-center">Laravel CRUD</h1>      
    </div>
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">                
                <p class="m-5">Este es un catálogo de prueba para realizar prácticas profesionales</p>  
                <div class="card mx-auto mb-5">                        
                    <a href="{{route('products')}}">
                        <div class="card-img-top bg-info">
                            <img src="{{asset('/images/icon-products.png')}}" alt="Products">
                        </div>                    
                        <div class="card-body">
                            <span class="btn btn-primary w-100">Productos</span>
                        </div>
                    </a>                
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('js')
<script>
    var elm = $('li.nav-item.active');
    elm.removeClass('active');
</script>
@endsection