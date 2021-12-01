<div class="table-responsive">
    <table class="table" id="investments-table">
        <thead>
            <tr>
                <th>@lang('models/investments.fields.type')</th>
        <th>@lang('models/investments.fields.purpose')</th>
        <th>@lang('models/investments.fields.amount')</th>
        <th>@lang('models/investments.fields.invested_by')</th>
        <th>@lang('models/investments.fields.description')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($investments as $investment)
            <tr>
                       <td>{{ $investment->type }}</td>
            <td>{{ $investment->purpose }}</td>
            <td>{{ $investment->amount }}</td>
            <td>{{ $investment->invested_by }}</td>
            <td>{{ $investment->description }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['investments.destroy', $investment->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('investments.show', [$investment->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('investments.edit', [$investment->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
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
