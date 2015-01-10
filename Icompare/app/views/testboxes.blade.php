<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Icompare</title>
    {{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::style('css/main.css'); }}
    {{ HTML::script('js/jquery-1.11.1.min.js'); }}
    {{ HTML::script('js/bootstrap.min.js'); }}
    {{ HTML::script('js/intro_accordion.js'); }}
    {{ HTML::script('js/slidersicompare.js'); }}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
        <table class="voeding_FDD_table" cellspacing="1px">
            <tr>
                <td colspan="3"><h5><span class="annotation">&#42;</span> CPU P4+P4 Aansluiting
                    {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon', 'alt' => 'test', 'title'=> 'Uitleg hier...')) }}
                    </h5></td>
            </tr>
        </table>
</body>
</html>