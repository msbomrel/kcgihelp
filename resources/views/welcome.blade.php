<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kcgi Info Center</title>
    <meta charset="utf-8">
    <link href="{{ ('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ ('frontend/css/style.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand active" href="/">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            @if(!empty($navbars))
                                @foreach($navbars as $navbar)
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/{{$navbar->slug}}">{{ucwords($navbar->display_name)}}<span class="sr-only"></span></a>
                                    </li>
                                @endforeach
                            @else
                                No Pages Found !
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="banner-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ratione illum fugit omnis,
                        inventore consequatur quos illo repellendus voluptatem quod doloribus perspiciatis ab! Nemo,
                        cupiditate animi autem adipisci blanditiis. Dolorum!</p>
                    <a href="#">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="content-wrap">
                    <img src="frontend/images/banner-bg.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur assumenda et doloremque
                        voluptate quibusdam. Est unde et, obcaecati at sequi totam quas molestiae pariatur ipsa neque
                        ab, voluptatum tempora iure.</p>
                    <a href="#">read more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-wrap">
                    <img src="frontend/images/banner-bg.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur assumenda et doloremque
                        voluptate quibusdam. Est unde et, obcaecati at sequi totam quas molestiae pariatur ipsa neque
                        ab, voluptatum tempora iure.</p>
                    <a href="#">read more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-wrap">
                    <img src="frontend/images/banner-bg.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur assumenda et doloremque
                        voluptate quibusdam. Est unde et, obcaecati at sequi totam quas molestiae pariatur ipsa neque
                        ab, voluptatum tempora iure.</p>
                    <a href="#">read more</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="content-wrap">
                    <img src="frontend/images/banner-bg.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur assumenda et doloremque
                        voluptate quibusdam. Est unde et, obcaecati at sequi totam quas molestiae pariatur ipsa neque
                        ab, voluptatum tempora iure.</p>
                    <a href="#">read more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-wrap">
                    <img src="frontend/images/banner-bg.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur assumenda et doloremque
                        voluptate quibusdam. Est unde et, obcaecati at sequi totam quas molestiae pariatur ipsa neque
                        ab, voluptatum tempora iure.</p>
                    <a href="#">read more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-wrap">
                    <img src="frontend/images/banner-bg.jpg" alt="image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur assumenda et doloremque
                        voluptate quibusdam. Est unde et, obcaecati at sequi totam quas molestiae pariatur ipsa neque
                        ab, voluptatum tempora iure.</p>
                    <a href="#">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="video-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/QUhG8RJbj50" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
