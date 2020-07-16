<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Miscellaneous</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}/details/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/')}}/details/css/modern-business.css" rel="stylesheet">

</head>

<body>
<div class="row">
    <div class="col-md-12 mb-3">
        <div class="page-header">
            <h1>
                Miscellaneous! <small>Know the World!</small>
            </h1>
        </div>
    </div>
</div>
<!-- Navigation -->
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
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h3 class="mt-4 mb-3">{{$data->title}}</h3>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active">{{$data->title}}</li>
    </ol>

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <!-- Blog Post -->
            <div class="card mb-4">
                {{--                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
                {{--                <p>--}}
                {{--                    <iframe src="{{url('/storage/'.$data->file)}}"></iframe>--}}
                {{--                </p>--}}
                <img src="{{url('/storage/'.$data->file)}}">


                <div class="card-body">
                    <h4 class="card-text">{{$data->short_description}}</h4>
                    <p class="card-text">{{$data->description}}</p>
                    <a href="#" class="btn btn-primary">Share &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{ $data->created_at->format('d/m/Y') }}

                </div>
            </div>




        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card mb-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('/')}}/details/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}/details/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

