<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

    .conhead{
        background-color:#0fb9d4;
        color:white;
        text-align:center;
        margin:30px 200px;
        font-family:fantasy;
        padding:15px;
    }

    a.iconlink{
        font-size:24px;
        text-decoration:none;
    }

    .col-md-2,.col-md-8{
        padding-left:0px;
        padding-right:0px;
    }


</style>



</head>
<body>

<nav class="navbar navbar-expand bg-secondary navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand mr-5 ml-5" href="#">
        <img src="{{asset('assets/devcologo.png')}}" alt="logo" style="width:60px;">
{{--<img src="assets/devcologo.png" alt="logo" style="width:60px;">--}}
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item ml-4 mr-4">
            <a class="nav-link text-light" href={{url('/tasks')}}>Tasks</a>
        </li>
        <li class="nav-item mr-4">
            <a class="nav-link text-light" href={{url('/posts')}}>Posts</a>
        </li>
    </ul>

    <!-- <div style="margin-left: 300px;">
    <a class="iconlink fa fa-facebook-square text-primary mr-2" href="#"></a>
    <a class="iconlink fa fa-twitter-square text-primary mr-2" href="#"></a>
    <a class="iconlink fa fa-skype text-primary mr-2" href="#"></a>
    <a class="iconlink fa fa-vimeo-square text-primary mr-2" href="#"></a>
    </div>
    -->

{{--    <form class="form-inline ml-auto mr-5" action="/action_page.php">--}}
{{--        <input class="form-control mr-1" type="text" placeholder="Search">--}}
{{--        <button class="btn btn-primary" type="submit">Search</button>--}}
{{--    </form>--}}
</nav>

</body>
</html>
