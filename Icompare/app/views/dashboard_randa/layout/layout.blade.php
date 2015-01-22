<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" charset="UTF-8">
    <title>Icompare Dashboard</title>
    @section('head')
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/main.css'); }}
        {{ HTML::style('css/dashboard_michelle.css'); }}
        {{ HTML::script('js/bootstrap.min.js'); }}
    @show
</head>
<body>
<div class="container">
    @include('include.banner')
    @yield('content')
</div>
</body>
</html>