<div class="table-responsive">
    <table class="table" id="hotspotZones-table">
        <thead>
            <tr>
                <th>@lang('models/hotspotZones.fields.zone_id')</th>
        <th>@lang('models/hotspotZones.fields.zone_title')</th>
        <th>@lang('models/hotspotZones.fields.device_brand')</th>
        <th>@lang('models/hotspotZones.fields.device_mac')</th>
        <th>@lang('models/hotspotZones.fields.device_serial')</th>
        <th>@lang('models/hotspotZones.fields.onu_mac')</th>
        <th>@lang('models/hotspotZones.fields.onu_brand')</th>
        <th>@lang('models/hotspotZones.fields.card_seller')</th>
        <th>@lang('models/hotspotZones.fields.status')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hotspotZones as $hotspotZone)
            <tr>
                       <td>{{ $hotspotZone->zone_id }}</td>
            <td>{{ $hotspotZone->zone_title }}</td>
            <td>{{ $hotspotZone->device_brand }}</td>
            <td>{{ $hotspotZone->device_mac }}</td>
            <td>{{ $hotspotZone->device_serial }}</td>
            <td>{{ $hotspotZone->onu_mac }}</td>
            <td>{{ $hotspotZone->onu_brand }}</td>
            <td>{{ $hotspotZone->card_seller }}</td>
            <td>{{ $hotspotZone->status }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['hotspotZones.destroy', $hotspotZone->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('hotspotZones.show', [$hotspotZone->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('hotspotZones.edit', [$hotspotZone->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
