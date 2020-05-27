<?php 
// $vps = json_decode(file_get_contents(url('api/category')));

// foreach($vps->categories as &$v){
//    $v->detail = json_decode(file_get_contents(url('api/category/'.$v->id)));
   
// //    foreach($v->detail->products as &$dv){
// //     $dv->detail= (file_get_contents(url('api/category/'.$v->id.'/'.$dv->id)));
// //    }
//     // echo "<pre>";
//     // print_r($v->detail->products);
//     // exit;
// }
// echo "<pre>";
// print_r($vps);
// exit;

?>

@section('t4vps')
<div id="serviceplace" class="cards-2"> </div>
<div  ng-app="myApp" ng-controller="myCtrl" >
    <!-- Pricing -->
    <div id="pricing" class="cards-2" ng-repeat="x in records.categories">
        <div class="container">

            <div class="row" id="<% x.id %>">
                <div class="col-lg-12">
                    <h2><% x.name %></h2>
                    <p class="p-heading p-large"><% x.name %></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card" ng-repeat="y in x.detail.products" >
                        <div class="card-body">
                            <div class="card-title"><% y.name %> </div>
                            <div class="card-subtitle">Just to see what can be achieved</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">$</span><span class="value"><% y.periods[0].price %></span>
                                <div class="frequency"><% y.periods[0].title %></div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media" >
                                    <i class="fas fa-check"></i><div class="media-body" ng-bind-html="y.description"></div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="{{ url('order-vps')}}/<% y.id %>">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
<script>
    var app = angular.module("myApp", ['ngSanitize'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    app.controller("myCtrl", function($scope) {
        $scope.records =  <?= \App\Time4vps::AllServiceList() ?>;
    });
</script>

@endsection
