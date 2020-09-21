<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <title>Dischi</title>
    <link rel="shortcut icon" type="image/svg" href="https://svgshare.com/i/Pqd.svg'">
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <ul class="nav__artist">
                <li class="nav__artist-name see-all" data-value="">Tutti gli artisti</li>
            </ul>
        </nav>
        <div class="container-content">
            <img src="https://svgshare.com/i/Pp3.svg" alt="" class="error__page">
        </div>
    </div>
    <script id="container-cards" type="text/x-handlebars-template">
        <div class="container__cd" data-artist="{{author}}">
         <div class="container__cd__side container__cd__side--front">
            <div class="container__cd-img">
             <img src="{{imgsrc}}" alt="{{title}} img" class="container__cd-img-bg" />
            </div>
          </div>
          <div class="container__cd__side container__cd__side--back">
                <div class="container__cd-text">
                    <div class="container__cd-title">
                        <p class="container__cd-title-text">{{title}}</p>
                    </div>
                        <div class="container__cd-artist">
                            <p class="container__cd-artist-text">{{author}}</p>
                        </div>
                        <div class="container__cd-year">
                            <p class="container__cd-year-text">{{year}}</p>
                        </div>
                    </div>    
                </div>    
            </div>
        </div>
    </script>
    <script id="container-artists" type="text/x-handlebars-template">
        <li class="nav__artist-name" data-value="{{artist}}">{{artist}}</li>
    </script>
    <script script src="dist/app.js"></script>
</body>

</html>