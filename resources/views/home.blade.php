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
                                <div class="col-sm-2">
                                    <div class="card rounded">
                                    
                                        <div class="card-body">
                                            <h2>Clients</h2>
                                            <h5 class="card-title">{{$clients->count()}}</h5>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6"><div class="card">
                                    <div class="card-header">
                                    <h3>Clients by package</h3>
                                </div>
                                    <div class="card-body">
                                        <table class="table table-sm table-striped">
                                            <thead>
                                            <tr>
                                                <th>Package</th>
                                                <th>Total Clients</th>
                                                <th>Total Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                              //  dd($package)
                                            @endphp
                                            @foreach ($clients_by_package as $client)
                                            
                                            <tr>
                                                <td>{{$client->package}}</td>
                                                <td>{{$client->total}} </td>
                                                <td>{{$client->total* $package[$client->package]}} Tk.</td>
                                            </tr>
                                                @php
                                                    $total += $client->total* $package[$client->package];
                                                @endphp
                                            @endforeach
                                        </tbody>
                                        </table>
                                    </div>
                                </div></div>
                                {{-- <div class="col-sm-3">{{$total}}</div> --}}
                               
                            </div>

                        </div>
                        <div class="card-footer"><h4>Estimated Total Value : {{$total}} Tk. / Commission: {{$total*.4}} Tk.</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

