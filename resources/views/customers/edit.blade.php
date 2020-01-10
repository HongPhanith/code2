@extends('include.layout')

@section('title', 'Edit Details of Customers') 

@section('content')

{{-- start div of form --}}
<div class="container">
<br>
<h3>Edit Details for {{ $customer->name }}</h3>
<form action="/customers/{{ $customer->id }}" method="post">
    {{-- action will go to route --}}
    @method('patch')
    @include('customers.form')

</form>

{{-- end div for form --}}
</div>
@endsection