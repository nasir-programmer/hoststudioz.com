@extends('layouts.app')

@include('layouts.extra')

@section('content')
    <?php
    $planes = \App\Product::all();
    // echo "<pre>";
    // print_r($planes);
    // exit;
    ?>
    @include('layouts.productlist', $planes)
    @yield('SolutionArea')
@endsection



