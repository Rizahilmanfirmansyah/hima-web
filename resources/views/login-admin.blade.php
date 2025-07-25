@extends('layouts.layout-login')

@section('content')
    


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
{{-- <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Inventory</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('e_admin/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('e_admin/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style>
        body{
            background-color: rgb(231, 234, 238);
        }
        form{
            margin-top: 40px;
        }

    </style>
</head> --}}
<body>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="card login-form">
                    <div class="title text-center">
                        <h3><b style="color: #215496;">HIMATIF</h3>
                    </div>
                    <div style="margin-top: 15px;">
                        @if (Session::has('notif'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                        @endif
                    </div>
                    <form action="{{ route('aksilogin')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            @error('email')
                            <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            @error('password')
                            <span class="error">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="checkbox" style="margin-top: 15px;">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            {{-- <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label> --}}
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        {{-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('e_admin/js/main.js')}}"></script>

</body>
</html>
@endsection


{{-- <div class="container" style="margin-top: 10rem;">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 35rem;">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="{{ route('aksilogin')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}