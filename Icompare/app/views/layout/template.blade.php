<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" charset="UTF-8">
        <title>Icompare</title>
        @section('head')
            {{ HTML::style('css/bootstrap.min.css'); }}
            {{ HTML::style('css/main.css'); }}
            {{ HTML::style('//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'); }}
            {{ HTML::script('js/jquery-1.11.1.min.js'); }}
            {{ HTML::script('js/bootstrap.min.js'); }}
            {{ HTML::script('js/intro_accordion.js'); }}
            {{ HTML::script('js/slidersicompare.js'); }}
            {{ HTML::script('js/hidden_checkbox.js'); }}
            {{ HTML::script('//code.jquery.com/jquery-1.10.2.js'); }}
            {{ HTML::script('//code.jquery.com/ui/1.11.2/jquery-ui.js'); }}
        @show
    </head>
    <body>
        <div class="container">
            @include('include.banner')
            @yield('content')
            @yield('sidebar')
        </div>
    </body>
</html>