@extends('layouts.app')

           @section('content')
           <div class="row">
            <div class="col-sm-8 offset-sm-2">
               <h1 class="display-3"> {{isset($model)?'Edit':'Add'}} a services</h1>
             <div>

               @include('services.form')
             </div>
           </div>
           </div>
           @endsection