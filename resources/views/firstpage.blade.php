<!DOCTYPE html>

<html lang="en">
<head>

    <title>Bootstrap Example</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .nav li:hover
        {
            display: block;
            background-color: #1E88E5;
            border-radius: 5px;
            cursor: pointer;
        }
        .input1
        {
            width: 60px;
            border: none;
            border-bottom: 1px solid black;
            outline: none;

        }
        .con1
        {
            width: 500px;
            height: 90px;
            margin-left: 170px;
            float: left;

        }
        .categorie
        {
            width: 1000px;
            border: 1px solid black;
            height: 400px;
            margin-left: 130px;
        }
    </style>
    <script type="text/javascript">

    </script>

</head>
<body>
@yield('navbar')
<nav class="navbar navbar-inverse" style="margin: 20px;">
    <div class="container-fluid">
        <div class=" navbar-header"  style="padding-top: 5px;">
            <h4>LARAVEL</h4>
        </div>
        <ul class="nav navbar-nav" style="float: right;">
            <li class="active"><a href="/" class="">Home</a></li>
            <li><a class=" dropdown-toggle" data-toggle="dropdown" >Categories <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Add New</a></li>
                    <li><a href="#">Update Old One</a></li>
                    <li><a href="#">View Categories</a></li>
                </ul></li>
            <li><a href="login">second page<span class="caret"></span></a>
               </li>
            <li><a href="welcome">laravel</a></li>
        </ul>
    </div>
</nav>




</body>
</html>
