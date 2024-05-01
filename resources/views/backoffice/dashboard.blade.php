@extends('backoffice.layout.app')

@section('title', 'Dashboard')

@section('content')


@include('backoffice.layout.topBar')
@include('backoffice.layout.sideBar')
 

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <h2>Welcome {{auth()->user()->name}}</h2>
        </div>
    </div>
</div>

 
@endsection
