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
                                        <div class="col-lg-6"><strong class="card-title">Add New Page</strong></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('save-page')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group error">
                                                    <label for="name" class="col-sm-6 control-label custom-label">Page
                                                        Name</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="name form-control has-error" id="name"
                                                               name="name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group error">
                                                    <label for="name" class="col-sm-6 control-label custom-label">Display
                                                        Name</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="name form-control has-error"
                                                               id="display_name"
                                                               name="display_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="is_live" class="control-label custom-label tri-status">Make
                                                        Live? </label>
                                                    <label class="switch">
                                                        <input type="checkbox" class="switch-checkbox" name="is_live"
                                                               checked>
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group error">
                                            <label for="body"
                                                   class="col-sm-12 custom-label control-label">Description</label>
                                            <div class="col-sm-12">
                                                <textarea class="ckeditor" name="body" id="body" cols="30"
                                                          rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="box-footer text-center">
                                            <button type="submit" id="submit" class="btn btn-info">Save</button>
                                            <button type="reset" id="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </form>
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
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection

