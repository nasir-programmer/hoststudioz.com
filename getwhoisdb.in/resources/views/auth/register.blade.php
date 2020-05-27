@extends('layouts.app')
@include('auth.Auth')
@include('layouts.extrasection')
@section('content')
@yield('otherheader', 'Login')
@yield('register')
@endsection
