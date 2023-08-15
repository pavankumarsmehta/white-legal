@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('layouts.partials.alert')
    <div class="row justify-content-center">
        <div class="col-md-12">


            <div class="card">
                <div class="card-header">
                    {{ __('Clients') }}
                    <a href="{{ route('client.create') }}" class="btn btn-success btn-sm float-end">Create Client</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->first_name }}</td>
                                    <td>{{ $client->last_name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->phone_number }}</td>
                                    <td>
                                        <a href="{{ route('client.edit', ['client' => $client->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('client.destroy', ['client' => $client->id]) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this client?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
