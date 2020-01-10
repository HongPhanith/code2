@extends('include.layout')

@section('title', 'Add New Customers') 

@section('content')

{{-- start div of form --}}
<div class="container">
<br>
<h3>Add New Customers</h3>
<form action="/customers" method="post">
    {{-- action will go to route --}}
    @include('customers.form')

</form>

{{-- end div for form --}}
</div>
@endsection