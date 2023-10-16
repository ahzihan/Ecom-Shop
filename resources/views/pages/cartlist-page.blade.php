@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.PaymentMethodList')
    @include('components.CartList')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>
        (async ()=>{

            $(".preloader").delay(80).fadeOut(100).addClass('loaded');
            await CartList();
            await TopBrands();
        })()
    </script>
@endsection
