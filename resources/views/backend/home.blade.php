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
                                        <div class="col-lg-6"><strong class="card-title"></strong></div>
                                        <div class="col-lg-6 text-right">
                                            <a href="{{route('create-page')}}">
                                                <button class="btn btn-primary">Add New Page
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Display Name</th>
                                            <th>Page Name</th>
                                            <th>Slug</th>
                                            <th>Is Live?</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($pages))
                                            @foreach($pages as $page)
                                                <tr>
                                                    <td>{{$page->id}}</td>
                                                    <td>{{$page->display_name}}</td>
                                                    <td>{{$page->name}}</td>
                                                    <td>{{$page->slug}}</td>
                                                    <td>
                                                        <label class="switch">
                                                            <input type="checkbox" class="switch-checkbox" name="is_live"
                                                                   @if($page->is_live == 1) checked @endif disabled>
                                                            <span class="slider"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('show-page', $page->id)}}">
                                                            <button class="btn btn-sm btn-primary">
                                                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                        <a href="{{route('edit-page', $page->id)}}">
                                                            <button class="btn btn-sm btn-primary">
                                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                        <button class="btn btn-sm btn-danger del-btn"
                                                                data-url="{{route('delete-page', ['id'=>$page->id])}}">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include("backend.layouts.datatable")
    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable({
                fixedHeader: true,
            });
        });
    </script>
@endsection
