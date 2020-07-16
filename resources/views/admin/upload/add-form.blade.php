@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <br>
            <h5 class="text-center text-primary">{{Session::get('message')}}</h5>
            <div class="well">
                <h3 class="text-center text-success">Add Content</h3>
                <hr>

                <form action="{{route('save-content')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Short Description</label>
                        <div class="col-md-9">
                            <textarea type="text" name="short_description" class="form-control" rows="5" cols="20"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-9">
                            <textarea type="text" name="description" class="form-control" rows="10" cols="40"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Type</label>
                        <div class="col-md-9">
                            <select name="type" class="form-control">
                                <option></option>
                                <option value="post">Post</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Upload</label>
                        <div class="col-md-9">
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Publication Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1" >Published</label>
                            <label><input type="radio" name="publication_status" value="0" >Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

