@extends('master')
@section('title', 'Profile')


@section('content')
    <p>Hello Profile</p>
@endsection

@push('scripts')
    <script src="{{ asset('js/profile.js') }}"></script>
@endpush