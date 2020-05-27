@extends('layouts.app')
@include('layouts.extrasection')
@include('auth.Auth')
@section('content')
@yield('otherheader', 'Login')
@yield('login')
@endsection
