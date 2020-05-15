@extends('layouts.app')

@section('content')

     <?php /*      @if(isset($model))
               {{ Form::model($model, ['route' => ['payments.update', $model->id], 'method' => 'patch']) }}
           @else
               {{ Form::open(['route' => 'payments.store']) }}
           @endif

            <div class="form-group">
                        <?= Form::label('user_id', 'User Id:') ?>
                        <?= Form::text('user_id', isset($model)?$model->user_id:'' , ['class' => $errors->has('user_id') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('user_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 <div class="form-group">
                        <?= Form::label('service_id', 'Service Id:') ?>
                        <?= Form::text('service_id', isset($model)?$model->service_id:'' , ['class' => $errors->has('service_id') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('service_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 <div class="form-group">
                        <?= Form::label('request', 'Request:') ?>
                        <?= Form::text('request', isset($model)?$model->request:'' , ['class' => $errors->has('request') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('request')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	            <div class="form-group">
                        <?= Form::label('response', 'Response:') ?>
                        <?= Form::text('response', isset($model)?$model->response:'' , ['class' => $errors->has('response') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('response')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 


                     <button type="submit" class="btn btn-primary-outline">{{isset($model)?'Update':'Add'}} payments</button>
                   <?= Form::close() ?>
           */ ?>

<div class="container">
      <div class="py-5 text-center">
        
        <h2>Checkout form</h2>
        
      </div>
      <form method="POST" action="{{ route('registerandpay') }}">
          @csrf
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
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
              <label for="password-confirm">{{ __('Confirm Password') }} <span class="text-muted">(Optional)</span></label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>


            
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Thank You for chose our services</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            
            
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2020 Hoststudioz</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
@endsection