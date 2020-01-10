@extends('include.layout')

@section('title', 'Details for ' . $customer->name ) 

@section('content')

<div class="container">
        <div class="row">
                <div class="col-12">
                    <h1>Details of {{$customer->name }} </h1>
                </div>
        </div>

        <div class="row">
                <div class="col-12">
                    <p>{{$customer->name }} </p>
                    <p>{{$customer->email }} </p>
                    <p>{{$customer->company->name }} </p>


                </div>
        </div>
        {{-- <p class="btn btn-primary"><a href="/customers/{{ $customer->id}}/edit">Edit</a></p> --}}

        <form action="/customers/{{ $customer->id }}" method="post">
        @method('delete')
        @csrf 

        
        <button class="btn btn-default"><a href="/customers/{{ $customer->id}}/edit">Edit</a> </button>  <button class="btn btn-danger" type="submit">Delete</button>
        </form>

</div>

@endsection 
