@extends('layouts.app')
@section('heading', 'Error')
@section('content')
<h4>Insufficient permissions</h4><a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
@endsection