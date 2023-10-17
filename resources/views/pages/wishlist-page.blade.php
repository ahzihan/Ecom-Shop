@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.WishList')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>
        (async ()=>{

            await WishList();
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');

            await TopBrands();
        })()
    </script>
@endsection
