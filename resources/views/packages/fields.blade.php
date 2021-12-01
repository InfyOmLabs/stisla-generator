<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/packages.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/packages.fields.price').':') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Descriptoin Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descriptoin', __('models/packages.fields.descriptoin').':') !!}
    {!! Form::textarea('descriptoin', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('packages.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
