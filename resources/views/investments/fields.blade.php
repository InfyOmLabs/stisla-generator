<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/investments.fields.type').':') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', __('models/investments.fields.amount').':') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Invested By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invested_by', __('models/investments.fields.invested_by').':') !!}
    {!! Form::text('invested_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/investments.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('investments.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
