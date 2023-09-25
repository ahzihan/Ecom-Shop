@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.CategoryList')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>
        (async ()=>{
            await Category();
            await ByCategoryList();
            //loader
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');
            
            await TopBrands();
        })()
    </script>
@endsection
