@extends('master')
@section('title', 'Home')


@php
    $name="Hello";   
    $fruits=["apple","mango","banana"];
@endphp

@section('content')
    <p>Hello Home</p>

    @verbatim
    my name is {{ $name }}
    @endverbatim

@endsection





@push('scripts')
    <script>
        var data = JS::from({{$name}});
        console.log(data);
    </script>

    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endpush