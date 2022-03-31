@extends('web._templates._html')

@section('title', 'Login - Investidor')

@section('content')

    <login-component
    _token="{{ @csrf_token() }}"
    page_authetic="{{ route('authentic.login') }}"
    ></login-component>

@endsection
