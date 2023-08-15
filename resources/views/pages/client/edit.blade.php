@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('layouts.partials.error')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if(isset($client))
                        {{ __('Edit Client') }}
                    @else
                        {{ __('Create Client') }}
                    @endif
                    <a href="{{ route('client.index') }}" class="btn btn-secondary btn-sm float-end">Back to List</a>
                </div>

                <div class="card-body">
                    <form action="{{ isset($client) ? route('client.update', ['client' => $client->id]) : route('client.store') }}" method="POST">
                        @csrf
                        @if(isset($client))
                            @method('PUT')
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', isset($client) ? $client->first_name : '') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', isset($client) ? $client->last_name : '') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', isset($client) ? $client->email : '') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', isset($client) ? $client->phone_number : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', isset($client) ? $client->address : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', isset($client) ? $client->date_of_birth : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality" value="{{ old('nationality', isset($client) ? $client->nationality : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="male" {{ old('gender', isset($client) ? $client->gender : '') === 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender', isset($client) ? $client->gender : '') === 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ old('gender', isset($client) ? $client->gender : '') === 'other' ? 'selected' : '' }}>Other</option>
                                        <option value="prefer_not_to_say" {{ old('gender', isset($client) ? $client->gender : '') === 'prefer_not_to_say' ? 'selected' : '' }}>Prefer Not to Say</option>
                                    </select>
                                </div>
                                <!-- Add more fields here -->
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="occupation" class="form-label">Occupation</label>
                                    <input type="text" class="form-control" id="occupation" name="occupation" value="{{ old('occupation', isset($client) ? $client->occupation : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', isset($client) ? $client->company_name : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="company_address" class="form-label">Company Address</label>
                                    <input type="text" class="form-control" id="company_address" name="company_address" value="{{ old('company_address', isset($client) ? $client->company_address : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="company_registration_number" class="form-label">Company Registration Number</label>
                                    <input type="text" class="form-control" id="company_registration_number" name="company_registration_number" value="{{ old('company_registration_number', isset($client) ? $client->company_registration_number : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="legal_representative_id" class="form-label">Legal Representative ID</label>
                                    <input type="text" class="form-control" id="legal_representative_id" name="legal_representative_id" value="{{ old('legal_representative_id', isset($client) ? $client->legal_representative_id : '') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="billing_information" class="form-label">Billing Information</label>
                                    <textarea class="form-control" id="billing_information" name="billing_information">{{ old('billing_information', isset($client) ? $client->billing_information : '') }}</textarea>
                                </div>
                                <!-- Add more fields here -->
                            </div>
                        </div>
                        <!-- Add more fields here -->

                        <button type="submit" class="btn btn-primary">{{ isset($client) ? 'Update' : 'Create' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
