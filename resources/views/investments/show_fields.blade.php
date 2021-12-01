<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', __('models/investments.fields.type').':') !!}
    <p>{{ $investment->type }}</p>
</div>

<!-- Purpose Field -->
<div class="form-group">
    {!! Form::label('purpose', __('models/investments.fields.purpose').':') !!}
    <p>{{ $investment->purpose }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', __('models/investments.fields.amount').':') !!}
    <p>{{ $investment->amount }}</p>
</div>

<!-- Invested By Field -->
<div class="form-group">
    {!! Form::label('invested_by', __('models/investments.fields.invested_by').':') !!}
    <p>{{ $investment->invested_by }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/investments.fields.description').':') !!}
    <p>{{ $investment->description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/investments.fields.created_at').':') !!}
    <p>{{ $investment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/investments.fields.updated_at').':') !!}
    <p>{{ $investment->updated_at }}</p>
</div>

