@extends('admin.master')

@section('body')
    <div class="panel">
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Sl No.</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Type</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($contents as $content)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$content->title}}</td>
                        <td>{{$content->short_description}}</td>
                        <td>{{$content->type}}</td>
                        <td>{{$content->publication_status==1 ? 'Published' : 'Unpublished'}}</td>

                        <td>
                            @if($content->publication_status==1)
                                <a href="{{route('unpublish',['id'=>$content->id])}}" class="btn btn-info">
                                    <span class="glyphicon glyphicon-arrow-up"></span></a>

                            @else
                            <a href="{{route('publish',['id'=>$content->id])}}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-arrow-down"></span></a>
                            @endif

                                <a href="{{route('delete-content',['id'=>$content->id])}}" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span></a>

                        </td>
                    </tr>
                @endforeach
            </table>

        </div>

    </div>







@endsection

