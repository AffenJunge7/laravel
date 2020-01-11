@extends('layouts.app')

@section('title', 'Page Title')



@section('content')
    <div class="col-3">
        @include('components.sidebar')
    </div>
    
    <div class="col-9">
        <p>This is my body content.</p>
    </div> 
@endsection