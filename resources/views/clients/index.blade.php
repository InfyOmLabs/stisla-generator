@extends('layouts.app')
@section('title')
     @lang('models/clients.plural')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('models/clients.plural') </h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('clients.create')}}" class="btn btn-primary form-btn">@lang('crud.add_new')<i class="fas fa-plus"></i></a>
                <a href="{{ route('clients.export')}}" class="mx-2 btn btn-primary form-btn">@lang('crud.export')<i class="fas fa-file-export"></i></a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#importClients" class="mx-2 btn btn-primary form-btn">@lang('crud.import')<i class="fas fa-file-import"></i></a>
                
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('clients.table')
            </div>
       </div>
   </div>
    
    </section>


  
  <!-- Modal -->
  <div class="modal fade" id="importClients" tabindex="-1" aria-labelledby="importClientsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="importClientsLabel">Import Clients</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row" action="{{route('clients.import')}}" enctype="multipart/form-data" method="POST">
        @csrf
                <div class="col-8">
                    <input class="form-control" name="clients_file" type="file" accept=".xls,.xlsx,.csv"  id="formFile">                  
                </div>
             
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Import</button>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection



@section('scripts')
    <script>
      $(document).ready( function () {
    var table = $('#clients').DataTable({
      proccessing: true,
      serverSide:true,
      ajax:"{{route('clients.index')}}",
      columns:[
        
         { data: 'DT_RowIndex', name: 'DT_RowIndex'},
         {data: 'username', name: 'username',
          "render": function(data, type, row, meta){
          if(type === 'display'){
              data = '<a href="https://reportpanel.carnival.com.bd/partnercrm/user_details.php?carnivalid=' + row.username + '" target="_blank">' + data + '</a>';
          }
          return data;
        }},
         { data: 'name', name: 'name'},
          {data: 'contact', name: 'contact'},
  
          {data: 'address', name: 'address'},
          {data: 'package', name: 'package'},
   
        
      ]
    });
    } );
    </script>
@endsection