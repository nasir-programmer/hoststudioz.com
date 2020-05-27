@extends('layouts.app')
@include('layouts.extrasection')
@include('auth.Auth')
@section('checkout')


@endsection
@section('content')
  @yield('otherheader')
<!-- Default form login -->
@guest
    @yield('login')
@else

<div class="row " ng-app="myApp" ng-controller="myCtrl">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart ( <% records.product.category_name %> )</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <p class="card-text" ng-bind-html="records.details.description"></p>
              </div>
                
            </li>
           
           
            <!-- <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li> -->
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong ng-bind="price"></strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form method="POST" action="{{ route('checkout') }}">
              @csrf
              <div style="display: none;">
              <input type="text" readonly="true" name="productID" value="<% records.product.id %>" >
              <input type="text" readonly="true" name="productName" value="<% records.product.name %>" >
              <input type="text" readonly="true" name="productPrice" ng-model="price" >
              <input type="text" readonly="true" name="productCycle" ng-model="cycle" >
              <input type="text" readonly="true" name="productCycleTitle" ng-model="cycleTitle">
              <input type="text" readonly="true" name="totalAmmount" ng-model="price">
              <input type="text" readonly="true" name="description" ng-model="description">
            </div>
<div >
<!-- Card -->
<div class="card booking-card">

  <!-- Card image -->
  <div class="view overlay">
   
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title font-weight-bold"><a><% records.product.name %></a></h4>
    <!-- Data -->
    <ul class="list-unstyled list-inline rating mb-0">
      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
      <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
      <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
    </ul>
    <!-- <p class="mb-2"><% records.product.name %> / <b ng-bind="price" ></b></p>
    Text -->
    <!-- <p class="card-text" ng-bind-html="records.details.description"></p>
    <hr class="my-4"> -->

    <p class="lead"><strong>Product Configuration</strong></p>
    <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
      <li class="list-inline-item mr-0">
     
        <div class="form-group">
  <label for="sel1">Choose billing cycle:</label>
    <select class="form-control" name="price" id="price"  ng-model="price" ng-change="rateThis($event)" >
        <option data-cycle="<% x.value %>" data-cycleTitle="<% x.title %>" ng-repeat="x in records.product.config.product[0].items" value="<% x.price %>"><% x.price + ' - ' + x.title%></option>
    </select>
 <br>
 
</div>
        
      </li>
      <li class="list-inline-item mr-0">
        

        @if(isset($details->product->config->forms[0]))
        <div class="chip deep-purple white-text mr-0">{{$details->product->config->forms[0]->title}}: <br>
            @if($details->product->config->forms[0]->type == 'checkbox')
                @foreach($details->product->config->forms[0]->items as $form)
                    
               
                    <input type="checkbox" id="{{$form->id}}" name="forms[]" value="{{$form->id}}">
                    <label for="vehicle1"> {{$form->title}}</label><br>
                @endforeach
            @endif
        </div>
        @endif

       
      
      </li>
      @if(isset($details->product->config->addons[0]))

      <li class="list-inline-item mr-0">
        <div class="chip mr-0">Addons:</div>
       
        @foreach($details->product->config->addons as $Addons)
                    <input type="checkbox" id="{{$Addons->id}}" name="addons[]" value="{{$Addons->id}}">
                    <label for="addons[]"> {{$Addons->title}}</label><br>
        @endforeach
      </li> 
      @endif
    </ul>
    <hr class="my-4">

    <!-- Addons -->

    <p class="lead"><strong>Total Billing</strong></p>

    <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
      <li class="list-inline-item mr-0">
       
      </li>
      <li>
              
    <button type="submit" class="btn btn-primary">
                                    {{ __('Checkout') }}
                                </button>
    </li>

    </ul>
    <!-- Button -->

  </div>

</div>
<!-- Card -->
</div>

        
        </div>
      </div>



<?php 
// echo "<pre>";
// print_r($details);
// exit;
?>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
<script>
    var app = angular.module("myApp", ['ngSanitize'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    app.controller("myCtrl", function($scope) {
        $scope.records =  <?= json_encode($details) ?>;
        $scope.description = $scope.records.details.description;
       $scope.price = $scope.records.product.config.product[0].price;
       $scope.cycle = $scope.records.product.config.product[0].value;
       $scope.cycleTitle = 'Monthly';

       $scope.rateThis = function rateThis(el) {
        var element = document.getElementById('price');
        $scope.cycle = element.selectedOptions[0].getAttribute('data-cycle');
        $scope.cycleTitle = element.selectedOptions[0].getAttribute('data-cycleTitle');
    }
       
    });
</script>


@endguest
@endsection
