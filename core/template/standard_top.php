<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="template/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="template/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title><?= $script_name ?></title>
    <!-- I know that for reasons of optmization is better to put the script tag at the end of the doc, but
    we are trying to load some script tags that depends on those here throughout the buid html files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="template/materialize/js/materialize.js"></script>
    <script src="template/materialize/js/init.js"></script>
    <script src="redirect.js"></script>
</head>
<body>
    <nav>
        <div class="nav-wrapper brown darken-1">
            <a id="goto_index" href="#" class="brand-logo center">Logo</a>
            <!--
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
            -->
        </div>
    </nav>
