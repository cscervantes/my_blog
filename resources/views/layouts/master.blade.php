<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Blog') }}</title>

    <!-- Styles -->
    <link href="/blog-template/bootstrap.min.css" rel="stylesheet">

    <!--Blog Template Css-->
    <link rel="stylesheet" href="/blog-template/clean-blog.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Scripts -->
    <script>

        window.Laravel = {!! json_encode([

            'csrfToken' => csrf_token(),

        ]) !!};

    </script>

</head>

<body>
       
        @include('partials.nav')

        <header class="intro-header" style="background-image: url('http://placehold.it/1360x300')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <hr class="small">
                            <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        @yield('content')

        @include('partials.footer')


    <!-- Scripts -->
    <script src="/blog-template/jquery.min.js"></script>

    <script src="/blog-template/bootstrap.min.js"></script>

    <script src="/blog-template/jqBootstrapValidation.js"></script>  

    <script src="/blog-template/contact_me.js"></script>

    <script src="/blog-template/clean-blog.min.js"></script> 

</body>

</html>
