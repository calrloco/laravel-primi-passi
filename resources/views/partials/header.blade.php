<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>La molisana</title>
</head>


<body>
    <div class="container-flex">
        <header class="header">
            <img src="" alt="">
            <nav class="navbar">
                <img class="logo-nav" src="https://cdn.shortpixel.ai/client/q_lossy,ret_img/https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png"
                    alt="">
                <ul>
                    <li><a href="{{ route('home') }}">home</a></li>
                    <li><a href="{{ route('prodotti') }}">prodotti</a></li>
                    <li><a href="{{ route('contatti') }}">contatti</a></li>
                </ul>
            </nav>
        </header>
