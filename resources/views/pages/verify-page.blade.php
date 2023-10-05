@extends('layout.app')
@section('content')
    @include('components.MenuBar')
    @include('components.Verify')
    @include('components.Footer')

    <script>
        (async ()=>{
            $(".preloader").delay(80).fadeOut(90).addClass('loaded');
        })()
    </script>
@endsection
