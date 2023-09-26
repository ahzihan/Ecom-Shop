@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.HeroSlider')
    @include('components.TopCategories')
    @include('components.ExclusiveProducts')
    @include('components.TopBrands')
    @include('components.Footer')

    <script>


        (async ()=>{
            await Category();
            await HeroSlider();
            await TopCategory();
            //loader
            $(".preloader").delay(80).fadeOut(100).addClass('loaded');

            await ExclesiveItems('popular','PopularItem');
            await ExclesiveItems('new','NewItem');
            await ExclesiveItems('top','TopItem');
            await ExclesiveItems('special','SpecialItem');
            await ExclesiveItems('trending','TrendingItem');

            await TopBrands();


        })()
    </script>
@endsection
