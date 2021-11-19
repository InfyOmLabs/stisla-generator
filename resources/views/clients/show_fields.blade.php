<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/clients.fields.name').':') !!}
    <p>{{ $client->name }}</p>
</div>

<!-- Contact Field -->
<div class="form-group">
    {!! Form::label('contact', __('models/clients.fields.contact').':') !!}
    <p>{{ $client->contact }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/clients.fields.address').':') !!}
    <p>{{ $client->address }}</p>
</div>

<!-- Package Field -->
<div class="form-group">
    {!! Form::label('package', __('models/clients.fields.package').':') !!}
    <p>{{ $client->package }}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', __('models/clients.fields.username').':') !!}
    <p>{{ $client->username }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', __('models/clients.fields.password').':') !!}
    <p>{{ $client->password }}</p>
</div>

<!-- Onu Mac Field -->
<div class="form-group">
    {!! Form::label('Onu_mac', __('models/clients.fields.Onu_mac').':') !!}
    <p>{{ $client->Onu_mac }}</p>
</div>

<!-- Cable Field -->
<div class="form-group">
    {!! Form::label('cable', __('models/clients.fields.cable').':') !!}
    <p>{{ $client->cable }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/clients.fields.status').':') !!}
    <p>{{ $client->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/clients.fields.created_at').':') !!}
    <p>{{ $client->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/clients.fields.updated_at').':') !!}
    <p>{{ $client->updated_at }}</p>
</div>

