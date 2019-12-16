<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tìm kiếm thông minh sử dụng Typeahead trong ứng dụng Laravel">
    <meta name="author" content="FirebirD ['www.allaravel.com']">
    <title>Tìm kiếm thông minh trong Laravel sử dụng Typeahead - Allaravel.com</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">
        html {
            position: relative;
            min-height: 100%;
        }
        
        body {
            margin-bottom: 60px;
        }
        
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #f5f5f5;
        }
        
        body>.container {
            padding: 60px 15px 0;
        }
        
        .container.text-muted {
            margin: 20px 0;
        }
        
        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }
        
        code {
            font-size: 80%;
        }
    </style>
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://allaravel.com">Typeahead</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
        <div class="page-header">
            <h3>Ví dụ tìm kiếm thông minh sử dụng typeahead.js trong ứng dụng Laravel - Allaravel.com</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="the-basics">
                    <input class="typeahead" name="timkiem" type="text" placeholder="States of USA">
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-muted">Example in <a href="https://allaravel.com">allaravel.com</a></p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script>
        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                    if (substrRegex.test(str)) {
                        matches.push(str);
                    }
                });

                cb(matches);
            };
        };

        //Lấy giá trị $timkiem bên controller đẩy qua
        var timKiem = {
            !!json_encode($timkiem - > toArray()) !!
        };
        //Tạo mảng rỗng. 
        var states = [];
        //Duyệt mảng timkiem và add vào mảng staú
        for (var i = timKiem.length - 1; i >= 0; i--) {
            states.push(timKiem[i].name);
        }
        console.log(timKiem);

        $('#the-basics .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            source: substringMatcher(states)
        });
    </script>
</body>

</html>