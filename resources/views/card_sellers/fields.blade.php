<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/cardSellers.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact', __('models/cardSellers.fields.contact').':') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Zone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone', __('models/cardSellers.fields.zone').':') !!}
    {!! Form::select('zone', $hotspot_zoneItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cardSellers.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
