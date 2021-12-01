<div class="table-responsive">
    <table class="table table-bordered" id="clients">
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('models/clients.fields.username')</th>
                <th>@lang('models/clients.fields.name')</th>
                <th>@lang('models/clients.fields.contact')</th>
                <th>@lang('models/clients.fields.address')</th>
                <th>@lang('models/clients.fields.package')</th>
                <th>action</th>
     
        {{-- <th>@lang('models/clients.fields.password')</th>
        <th>@lang('models/clients.fields.Onu_mac')</th>
        <th>@lang('models/clients.fields.cable')</th> --}}
        {{-- <th>@lang('models/clients.fields.status')</th> --}}
                {{-- <th colspan="3">@lang('crud.action')</th> --}}
            </tr>
        </thead>
         <tbody>
             {{--
        @foreach($clients as $client)
            <tr>
                <td>{{ $loop->iteration }}</td>
                       <td>{{ $client->name }}</td>
            <td>{{ $client->contact }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->package }}</td>
            <td><a href="https://reportpanel.carnival.com.bd/partnercrm/user_details.php?carnivalid={{ $client->username }}" target="_blank" rel="noopener noreferrer">{{ $client->username }}</a></td> --}}
            {{-- <td>{{ $client->password }}</td>
            <td>{{ $client->Onu_mac }}</td>
            <td>{{ $client->cable }}</td> --}}
            {{-- <td>{{ $client->status }}</td> --}}
                       {{-- <td class=" text-center">
                           {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('clients.show', [$client->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('clients.edit', [$client->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
            </tr>
        @endforeach--}}
        </tbody> 
    </table>
</div>
