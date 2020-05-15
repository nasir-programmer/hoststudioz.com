<?php 
           /**
            * payments Form
            */
           ?>
           @if(isset($model))
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
           