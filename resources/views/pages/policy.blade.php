@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.PolicyList')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>
        (async ()=>{
            await Category();
            await PolicyList();
            //loader
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');

            await TopBrands();
        })()
    </script>
@endsection
