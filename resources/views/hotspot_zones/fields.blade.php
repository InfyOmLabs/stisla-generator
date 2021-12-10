<!-- Zone Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone_id', __('models/hotspotZones.fields.zone_id').':') !!}
    {!! Form::text('zone_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Zone Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zone_title', __('models/hotspotZones.fields.zone_title').':') !!}
    {!! Form::text('zone_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Device Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_brand', __('models/hotspotZones.fields.device_brand').':') !!}
    {!! Form::text('device_brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Device Mac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_mac', __('models/hotspotZones.fields.device_mac').':') !!}
    {!! Form::text('device_mac', null, ['class' => 'form-control']) !!}
</div>

<!-- Device Serial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('device_serial', __('models/hotspotZones.fields.device_serial').':') !!}
    {!! Form::text('device_serial', null, ['class' => 'form-control']) !!}
</div>

<!-- Onu Mac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onu_mac', __('models/hotspotZones.fields.onu_mac').':') !!}
    {!! Form::text('onu_mac', null, ['class' => 'form-control']) !!}
</div>

<!-- Onu Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onu_brand', __('models/hotspotZones.fields.onu_brand').':') !!}
    {!! Form::text('onu_brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Card Seller Field -->
<div class="form-group col-sm-6">
    {!! Form::label('card_seller', __('models/hotspotZones.fields.card_seller').':') !!}
    {!! Form::select('card_seller', $card_sellerItems, null, ['class' => 'form-control']) !!}
</div>
<!-- Status Field -->
<div class="form-group col-sm-3">
    {!! Form::label('status', __('models/hotspotZones.fields.status').':') !!}
    {!! Form::select('status', ['Enable' => 'Enable', 'Disable' => 'Disable'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('hotspotZones.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
