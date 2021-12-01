<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', __('models/packages.fields.title').':') !!}
    <p>{{ $package->title }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', __('models/packages.fields.price').':') !!}
    <p>{{ $package->price }}</p>
</div>

<!-- Descriptoin Field -->
<div class="form-group">
    {!! Form::label('descriptoin', __('models/packages.fields.descriptoin').':') !!}
    <p>{{ $package->descriptoin }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/packages.fields.created_at').':') !!}
    <p>{{ $package->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/packages.fields.updated_at').':') !!}
    <p>{{ $package->updated_at }}</p>
</div>

