<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Miscellaneous</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="{{asset('/')}}/front-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/front-end/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}/front-end/awesome/css/all.min.css" rel="stylesheet">

{{--    <style>--}}
{{--        .card {display:inline-block;}--}}
{{--    </style>--}}

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    Miscellaneous! <small>Know the World!</small>
                </h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown ml-md-auto">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider">
                        </div> <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="leftside">
                @foreach($file as $key=>$data)
                    @if($data->publication_status==1)
                <div class="card mb-3">
                    <a href="{{route('details',['id'=>$data->id])}}"><img class="card-img-top img-thumbnail" style="width: 800px;height:400px" src="{{asset('/')}}/front-end/img/laravel6.png" alt="Card image cap"></a>
                    <span><i class="fas fa-play float-right"></i></span>
                    <div class="card-body">
                        <h5 class="card-title">{{$data->title}}</h5>
                        <p class="card-text">{{$data->short_description}}</p>

                        <p class="card-text"><small class="text-muted">Posted On {{ $data->created_at->format('d/m/Y') }}</small></p>
                    </div>
                </div>
                    @endif
                    @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <div class="rightside">

                <div class="card-group">
                    @foreach($file_img as $key=>$data)
                        @if($data->publication_status==1)
                    <div class="col-lg-6 col-sm-6">

                        <div class="card" style="width: 18rem;">
                            <a href="{{route('post_details',['id'=>$data->id])}}"><img class="card-img-top img-thumbnail img-fluid" src="{{asset("storage/{$data->file}")}}" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{$data->title}}
                                </h4>
                                <p class="card-text">{{$data->short_description}}</p>
                            </div>
                        </div>

                    </div>
                        <br>
                        @endif
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

<script src="{{asset('/')}}/front-end/js/jquery.min.js"></script>
<script src="{{asset('/')}}/front-end/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/front-end/js/scripts.js"></script>
</body>
</html>
