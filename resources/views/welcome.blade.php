@extends('layouts.app')
@section('heading', 'Inventory Management System')
@section('content')
   <p>Welcome to the Inventory Management System website.</p>
   <p>Please <a href="{{ url('/login') }}">login</a> or <a href="{{ url('/register') }}">register</a>.</p>
   <p>This website was built as a part of final year project.</p>
@endsection