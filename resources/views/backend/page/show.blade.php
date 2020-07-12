@extends('backend.layouts.master')
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-4"><strong class="card-title">Display Name: {{$page->name}}</strong></div>
                                        <div class="col-lg-10"><strong class="card-title">Page: {{$page->name}}</strong></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                   {!! $page->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

