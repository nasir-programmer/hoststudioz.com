@extends('layouts.app')

@section('content')


<div class="container">
      <div class="py-5 text-center">
        
        <h2>Checkout form</h2>
        
      </div>
      @guest
      <form method="POST" action="{{ route('registerandpay') }}">
      @else
      <form method="POST" action="{{ route('loginpay') }}">
      @endguest
      
          @csrf
  
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">{{ $service->name }}</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Price</h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{ $service->price }} INR / {{ $service->cycle }}</span>
            </li>
            @foreach($service->property as $property)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">{{ $property->keys }}</h6>
                <small class="text-muted"></small>
              </div>
              <span class="text-muted">{{ $property->value }}</span>
            </li>
            @endforeach
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>0000</small>
              </div>
              <span class="text-success">-0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (INR)</span>
              <strong>{{ $service->price }}</strong>
              {{ Form::hidden('totalAmount', $service->price) }}
              {{ Form::hidden('serviceName', $service->name) }}
              {{ Form::hidden('serviceDescription', $service->description) }}
              <?php 
            $startDate = date("Y-m-d");
            $endDate = '';       
             if($service->cycle == 'Monthly') {
                $endDate = Date("Y-m-d", strtotime($startDate." +1 Month"));
             } if($service->cycle == 'Yearly') {
                $endDate = Date("Y-m-d", strtotime($startDate." +1 Year"));
             } else {
                $endDate = Date("Y-m-d", strtotime($startDate." +1 Month"));
             }      
            ?>
            {{ Form::hidden('start', $startDate) }}
            {{ Form::hidden('expiry', $endDate) }}  
            </li>
          </ul>

          <!-- <form class="card p-2"> -->
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          <!-- </form> -->
        </div>
       

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Registration</h4>
          @if($errors->any())
				{{ implode('', $errors->all('<div>:message</div>')) }}
			@endif
			@guest
            <div class="mb-3">
              <label for="username">Name</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"></span>
                </div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <div class="invalid-feedback" style="width: 100%;">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
              <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password">{{ __('Password') }} <span class="text-muted"></span></label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              @error('password')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password-confirm">{{ __('Confirm Password') }} <span class="text-muted"></span></label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

@else

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Your Login Detail</h4>
         
            <div class="mb-3">
              <label for="username">Name</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"></span>
                </div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required readonly autofocus>
               
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required readonly autocomplete="email">
              @error('email')
              <div class="invalid-feedback">
                <strong>{{ $message }}</strong>
              </div>
              @enderror
            </div>

@endguest



            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Plane Activation</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <?php
    
              ?>
              <label class="custom-control-label" for="save-info">From {{$startDate}} to {{$endDate }}</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

     
    </div>
</div>
<br>
<br>
@endsection