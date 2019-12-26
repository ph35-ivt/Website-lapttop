<!DOCTYPE HTML>
<head>
<title>Enter Laptop </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<base href="{{asset('')}}">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 @yield('link')
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="https://fonts.googleapis.com/css?family=Gelasio|Vollkorn&display=swap" rel="stylesheet">
<script type="text/javascript" src="user/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="user/js/move-top.js"></script>
<script type="text/javascript" src="user/js/easing.js"></script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 @yield('css') 
 @include('layout.script')
</head>
<body>
    <div class="wrap">
        @include('layout.header')
        @yield('header')
        @yield('content')
        
        @include('layout.section')
        @include('layout.footer')
        <script type="text/javascript">
            $(document).ready(function() {			
            $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>

        <a href="#" id="toTop"><span id="toTopHover"> </span></a>
    </div>
</body>
</html>

