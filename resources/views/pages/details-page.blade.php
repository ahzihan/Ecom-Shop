@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.ProductDetails')
    @include('components.ProductSpecification')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>
        (async () => {
            await ProductDetails();
            await ProductReview();
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');
            await TopBrands();
        })()
    </script>
@endsection
