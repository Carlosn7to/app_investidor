@extends('app._templates._html')

@section('title', 'Home - Investidor')

@section('content')

    <home-component
    link_logout="{{ route('authentic.logout') }}"
    ></home-component>

@endsection
