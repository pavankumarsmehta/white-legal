@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-users"></i> User Information</h5>
                                    <p class="card-text"><i class="fas fa-chart-bar"></i> Total Users: {{ $totalUsers }}</p>
                                    <p class="card-text"><i class="fas fa-check-circle"></i> Active Users: {{ $activeUsers }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-users"></i> Client Information</h5>
                                    <p class="card-text"><i class="fas fa-chart-bar"></i> Total Clients: {{ $totalClients }}</p>
                                    <p class="card-text"><i class="fas fa-check-circle"></i> Active Clients: {{ $activeClients }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-user"></i> Latest Users</h5>
                                    <ul class="list-group">
                                        @foreach($latestUsers as $user)
                                        <li class="list-group-item">{{ $user->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-user-tie"></i> Latest Clients</h5>
                                    <ul class="list-group">
                                        @foreach($latestClients as $client)
                                        <li class="list-group-item">{{ $client->first_name }} {{ $client->last_name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
