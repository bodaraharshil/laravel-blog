<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('header')
        <div class="header">
            Header part
        </div>
        @show

        <div class="content">
            @yield('content')
        </div>

        @section('footer')
        <div class="footer">
            Footer part
        </div>
        @show

    </body>
    <style>
        .header{
            padding:20px;
            background-color: antiquewhite;
            text-align:center;
        }
        .footer{
            padding:20px;
            background-color:blueviolet;
            text-align:center;
        }
        .content{
            height:500px;
            background-color: red;
            text-align: center;
        }
    </style>
</html>