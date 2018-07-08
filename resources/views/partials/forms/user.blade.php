{!! Form::open(['route' => 'users.create', 'files' => true]) !!}
<div class="form-group row">
    {{Form::label('firstName', 'First Name', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        {{Form::text('firstName', '',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{Form::label('lastNmae', 'Last Name', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        {{Form::text('lastNmae', '',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{Form::label('password', 'Password', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        {{Form::password('password', ['class' => 'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{Form::label('company', 'Company', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        {{Form::text('company', '',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{Form::label('country', 'Country', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        {{Form::text('country', '',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{Form::label('city', 'City', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        {{Form::text('city', '',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{Form::label('stateProvince', 'State | Province', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        {{Form::text('stateProvince', '',['class'=>'form-control'])}}
    </div>
</div>

<div class="form-group row">
    {{Form::label('gender', 'Gender', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
            <input id="radioIcon1" type="radio" name="radio-icon" class="custom-control-input">
            <span class="custom-control-label">
                    <i class="mdi mdi-female"></i>
                </span>
        </label>
        <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
            <input id="radioIcon2" type="radio" name="radio-icon" class="custom-control-input">
            <span class="custom-control-label">
                    <i class="mdi mdi-male-alt"></i>
                </span>
        </label>
    </div>
</div>


<div class="form-group row">
    {{Form::label('active', 'Active ?', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        <div class="switch-button switch-button-lg">
            <input type="checkbox"  name="active" id="active"><span>
                            <label for="active"></label></span>
        </div>
    </div>
</div>

<div class="form-group row">
    {{Form::label('termsConditions', 'Accept Terms & Conditions', ['class' => 'col-12 col-sm-3 col-form-label text-sm-right'])}}
    <div class="col-12 col-sm-8 col-lg-6">
        <div class="switch-button switch-button-lg">
            <input type="checkbox"  name="terms" id="terms"><span>
                            <label for="terms"></label></span>
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-12 col-sm-8 col-lg-8">
        <p class="text-right">
            <button type="submit" class="btn btn-space btn-primary">Submit</button>
            <button class="btn btn-space btn-secondary">Cancel</button>
        </p>
    </div>


</div>

{!! Form::close() !!}