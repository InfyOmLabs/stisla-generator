<div class="table-responsive">
    <table class="table" id="packages-table">
        <thead>
            <tr>
                <th>@lang('models/packages.fields.title')</th>
        <th>@lang('models/packages.fields.price')</th>
        <th>@lang('models/packages.fields.descriptoin')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($packages as $package)
            <tr>
                       <td>{{ $package->title }}</td>
            <td>{{ $package->price }}</td>
            <td>{{ $package->descriptoin }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['packages.destroy', $package->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('packages.show', [$package->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('packages.edit', [$package->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
