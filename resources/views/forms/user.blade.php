
{!! Form::open(['route' => 'users.store', 'files' => true]) !!}

<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="form-group">
            {{Form::label('firstName', 'First Name')}}
            {{Form::text('firstName',  Input::old('firstName'),['class'=>'form-control'])}}
            <small class="text-danger text-bold">{{$errors->first('firstName')}}</small>
        </div>

        <div class="form-group ">
            {{Form::label('lastName', 'Last Name')}}
            {{Form::text('lastName',Input::old('lastName'),['class'=>'form-control'])}}
            <small class="text-danger text-bold">{{$errors->first('lastName')}}</small>
        </div>

        <div class="form-group ">
            {{Form::label('email', 'Email')}}
            {{Form::text('email',  Input::old('email'),['class'=>'form-control'])}}
            <small class="text-danger text-bold">{{$errors->first('email')}}</small>
        </div>

        <div class="form-group ">
            {{Form::label('password', 'Password')}}
            {{Form::password('password', ['class' => 'form-control'])}}
            <small class="text-danger text-bold">{{$errors->first('password')}}</small>
        </div>



        <div class="form-group row pt-1">
            <label class="col-12 col-sm-1 col-form-label text-sm-right pt-4 mr-6">Icon Radio</label>
            <div class="col-12 col-sm-8 col-lg-6">

                <div class="form-check form-check-inline">
                    <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                        {{ Form::radio('sex',  'FEMALE',Input::old('sex'),array('id'=>'female','class'=>'custom-control-input')) }}
                        <span
                                class="custom-control-label"><i class="mdi mdi-female"></i></span>
                    </label>
                    <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                        {{ Form::radio('sex',  'MALE',Input::old('sex'),array('id'=>'male','class'=>'custom-control-input')) }}
                        <span
                                class="custom-control-label"><i class="mdi mdi-male-alt"></i></span>
                    </label>
                    <small class="text-danger text-bold text-left">{{$errors->first('sex')}}</small>
                </div>

            </div>

        </div>
        <div class="form-group row">
            <label class="col-12 col-sm-1 col-form-label text-sm-right mr-6">Active ?</label>
            <div class="col-12 col-sm-8 col-lg-6 pt-1">
                <div class="switch-button switch-button-lg">
                   {{ Form::checkbox('active', false, false,array('id'=>'active')) }}
                    <span>
                    <label for="active"></label>
                    </span>
                </div>
                <small class="text-danger text-bold">{{$errors->first('active')}}</small>
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-sm-6">

        <div class="form-group ">
            {{Form::label('company', 'Company')}}
            {!! Form::select('company',$companies,Input::old('company'), ['class' => 'select-tags']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('roles[]','User Roles') !!}<br/>
            {!! Form::select('roles[]',
            $roles,
            Input::old('roles'),
             ['class' => 'select-tags',
            'multiple' => 'multiple']) !!}
             <small class="text-danger text-bold">{{$errors->first('roles[]')}}</small>
        </div>

        <div class="form-group ">
            {{Form::label('city', 'City')}}
            {{Form::select('city', $cities,Input::old('city'),['class'=>'select-tags'])}}
            <small class="text-danger text-bold">{{$errors->first('city')}}</small>
        </div>
    </div>
</div>


<div class="row pt-3">

    <div class="col-sm-12">
        <p class="text-right">
            <button type="submit" class="btn btn-space btn-primary">Submit</button>
            <button class="btn btn-space btn-secondary">Cancel</button>
        </p>
    </div>
</div>

<script>

</script>

{!! Form::close() !!}