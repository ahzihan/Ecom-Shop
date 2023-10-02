@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.ProductDetails')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>
        (async ()=>{
            await TopBrands();
            //loader
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');


        })()
    </script>
@endsection
