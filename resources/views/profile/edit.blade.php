{{-- <x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('backoffice.layout.app')

@section('title', 'Profile')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h1 class="card-title">Profile Information</h1>
                            <p class="card-text">
                                Update your account's profile information and email address.
                            </p>


                            <form class="form-horizontal mt-4" method="post" action="{{ route('profile.update') }}">
                                @method('patch')
                                @csrf
                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="name"  value='{{old('name', $user->name)}}' id="username" placeholder="Enter username">
                                    
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="useremail">Email</label>
                                    <input type="email" class="form-control" name="email"  value='{{old('email', $user->email)}}' id="useremail" placeholder="Enter email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                
                                </div>

                                

                                <div class="mb-3 row mt-4">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Save</button>
                                    </div>
                                
                                </div>

                               
                            </form>
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h1 class="card-title">Update Password</h1>
                            <p class="card-text">
                                Ensure your account is using a long, random password to stay secure.
                            </p>


                            <form class="form-horizontal mt-4" method="post" action="{{ route('password.update') }}">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="username">Current Password</label>
                                    <input type="password" class="form-control" name="current_password"   id="username" placeholder="Enter current password" autocomplete="current-password">
                                </div>
                                @error('current_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="useremail">New Password</label>
                                    <input type="password" class="form-control" name="password"   id="useremail" placeholder="Enter cew password" autocomplete="new-password">
                                </div>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="useremail">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"   id="useremail" placeholder="Enter confirm password" autocomplete="new-password">
                                </div>
                                @error('password_confirmation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                                

                                <div class="mb-3 row mt-4">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Save</button>
                                    </div>
                                
                                </div>

                               
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection