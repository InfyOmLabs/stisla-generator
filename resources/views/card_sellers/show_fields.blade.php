<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/cardSellers.fields.name').':') !!}
    <p>{{ $cardSeller->name }}</p>
</div>

<!-- Contact Field -->
<div class="form-group">
    {!! Form::label('contact', __('models/cardSellers.fields.contact').':') !!}
    <p>{{ $cardSeller->contact }}</p>
</div>

<!-- Zone Field -->
<div class="form-group">
    {!! Form::label('zone', __('models/cardSellers.fields.zone').':') !!}
    <p>{{ $cardSeller->zone }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/cardSellers.fields.created_at').':') !!}
    <p>{{ $cardSeller->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/cardSellers.fields.updated_at').':') !!}
    <p>{{ $cardSeller->updated_at }}</p>
</div>

