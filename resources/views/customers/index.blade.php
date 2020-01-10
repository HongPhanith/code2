@extends('layouts.app')

@section('title', 'Our Major Customers') 

@section('content')

<div class="container">

            <h1>Customers</h1>
            <p><a href="customers/create">Add New Customers</a></p>

            <div class="row">
                @if(count($customers) > 0)
                @foreach ($customers as $customer)

                <div class="col-2">{{ $customer->id}}</div>
                <div class="col-4">
                    <a href="/customers/{{ $customer->id }}">{{ $customer->name}}</a>
                </div>
        
                <div class="col-4">{{ $customer->company->name}}</div>
                <div class="col-2">{{ $customer->active}}</div>

                @endforeach
                @else
                <p>No Customer Found</p>
                @endif 
            </div>

            <hr>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $customers->links() }}
                </div>
            </div>

</div>

@endsection