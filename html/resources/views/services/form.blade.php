<?php 
           /**
            * services Form
            */
           ?>
           @if(isset($model))
               {{ Form::model($model, ['route' => ['services.update', $model->id], 'method' => 'patch']) }}
           @else
               {{ Form::open(['route' => 'services.store']) }}
           @endif

            <div class="form-group">
                        <?= Form::label('user_id', 'User Id:') ?>
                        <?= Form::text('user_id', isset($model)?$model->user_id:'' , ['class' => $errors->has('user_id') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('user_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 <div class="form-group">
                        <?= Form::label('name', 'Name:') ?>
                        <?= Form::text('name', isset($model)?$model->name:'' , ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 <div class="form-group">
                        <?= Form::label('discription', 'Discription:') ?>
                        <?= Form::text('discription', isset($model)?$model->discription:'' , ['class' => $errors->has('discription') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('discription')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 <div class="form-group">
                        <?= Form::label('start', 'Start:') ?>
                        <?= Form::text('start', isset($model)?$model->start:'' , ['class' => $errors->has('start') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('start')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 <div class="form-group">
                        <?= Form::label('expiry', 'Expiry:') ?>
                        <?= Form::text('expiry', isset($model)?$model->expiry:'' , ['class' => $errors->has('expiry') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('expiry')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	 <div class="form-group">
                        <?= Form::label('active', 'Active:') ?>
                        <?= Form::text('active', isset($model)?$model->active:'' , ['class' => $errors->has('active') ? 'form-control is-invalid' : 'form-control'  ]) ?>
                        @error('active')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
	


                     <button type="submit" class="btn btn-primary-outline">{{isset($model)?'Update':'Add'}} services</button>
                   <?= Form::close() ?>
           