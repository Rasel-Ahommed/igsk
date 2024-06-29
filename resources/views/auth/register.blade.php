{{-- <x-guest-layout>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-center">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ms-4">
                {{ __('Create User') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@php
    use App\Models\SiteSetting;
    $siteData = SiteSetting::first();
@endphp
@extends('backoffice.layout.app')

@section('title', 'Notice')

@section('content')


    @include('backoffice.layout.topBar')
    @include('backoffice.layout.sideBar')

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="card-body pt-0">
                        
                        <div class="p-3">
                            <h4 class="text-muted font-size-18 mb-1 text-center">Create user</h4>
                            <form class="form-horizontal mt-4" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="name"  value='{{old('name')}}' id="username" placeholder="Enter username">
                                    
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="useremail">Email</label>
                                    <input type="email" class="form-control" name="email"  value='{{old('email')}}' id="useremail" placeholder="Enter email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password"  value='{{old('password')}}' id="userpassword" placeholder="Enter password">
                                    
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror   
                                
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation"  value='{{old('password_confirmation')}}' id="userpassword" placeholder="Enter password">
                                    
                                    @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                
                                </div>

                                <div class="mb-3 row mt-4">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                
                                </div>

                               
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
