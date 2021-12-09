<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/clients.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact', __('models/clients.fields.contact').':') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', __('models/clients.fields.address').':') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Package Field -->
<div class="form-group col-sm-6">
    {!! Form::label('package', __('models/clients.fields.package').':') !!}
    {!! Form::text('package', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', __('models/clients.fields.username').':') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('models/clients.fields.password').':') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!-- Onu Mac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Onu_mac', __('models/clients.fields.Onu_mac').':') !!}
    {!! Form::text('Onu_mac', null, ['class' => 'form-control']) !!}
</div>

<!-- Cable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cable', __('models/clients.fields.cable').':') !!}
    {!! Form::number('cable', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/clients.fields.status').':') !!}
    {!! Form::select('status', ['Registered' => 'Registered', 'Expired' => 'Expired'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
