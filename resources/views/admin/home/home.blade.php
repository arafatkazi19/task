

@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <div>
            <h3 class="text-success">Welcome {{ Auth::user()->name }}</h3>
        </div>

    @endsection
