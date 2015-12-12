<!doctype html>
<html lang="en">
    <head>
        <title>Finishing Touch Autos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="theme-color" content="#0E35C1">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play:400,700"/>
        <link rel="stylesheet" type="text/css" href="/css/main.css"/>
    </head>

    <body>
        <header>
            <a href="/">
                <img src="/images/logo.png" alt="Finishing Touch Autos">
            </a>
        </header>

        <nav>
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
            <a href="/gallery">Gallery</a>
        </nav>

        <?php
        $path = parse_url($_SERVER['REQUEST_URI'])['path'];
        $page = __DIR__."/../pages/";
        switch ($path){
            case "/contact":
                $page .= "contact.php";
                break;
            case "/gallery":
                $page .= "gallery.php";
                break;
            case "/":
            default:
                $page .= "home.php";
        }
        include $page;
        ?>

        <footer>
            <p>&copy; Finishing Touch Autos 2015</p>
        </footer>
    </body>
</html>
