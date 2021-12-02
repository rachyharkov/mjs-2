@extends('layouts.master')
@section('title','Home')

@section('content')
<div id="content" class="app-content">
    {{-- breadcrumb --}}
    {{ Breadcrumbs::render('home') }}
    {{-- <h1 class="page-header">Blank Page <small>header small text goes here...</small></h1> --}}
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Panel Title here</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
        </div>
    </div>
</div>
@endsection

