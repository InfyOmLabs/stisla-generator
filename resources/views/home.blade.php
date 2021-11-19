@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card border border-primary rounded">
                                    
                                        <div class="card-body">
                                            <h5 class="card-title">Clients</h5>
                                          <h4>{{$clients->count()}}</h4>  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">2</div>
                                <div class="col-sm-3">3</div>
                                <div class="col-sm-3">4</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

