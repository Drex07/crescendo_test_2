<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('fonts/interstate/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Plugins -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet">
        
        <style>
            .gallery-cell {
              width: 66%;
              height: 400px;
              margin-right: 10px;
            }
        </style>
    </head>
    <body>
        <center>
          <div style="padding: 10px;background: #1450d2;width: 366px;margin: 10px;color: white;padding-bottom: 0px;">
              <img src="{{ asset('images/blueCorner.png') }}" class="blueCorner">
              <p class="dateText1">MAY</p>
              <p class="dateText2">6</p>
              <p class="blueLayerText1">Research Exchange</p>
              <p class="blueLayerText2">Find the best online resources to help with your investments...</p>
              <button type="button" class="btn blueButton contactUsButton">Get More Insight</button>
              <p class="ascentText">London, England</p>
              <img src="{{ asset('images/ascent.png') }}" class="ascent">
          </div>
          </center>
          <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell">
                <center>
                <div class="insightDiv1" style="width: 366px; background: white;padding: 20px;">
                    <img src="{{ asset('images/insightImage1.png') }}" style="width: 100%">
                    <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                    <p class="insightText1">Global Factor Investing Study</p>
                </div>
                </center>
            </div>
            <div class="gallery-cell">
                <center>
                <div class="insightDiv1" style="width: 366px; background: white;padding: 20px;">
                    <img src="{{ asset('images/insightImage1.png') }}" style="width: 100%">
                    <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                    <p class="insightText1">Global Factor Investing Study</p>
                </div>
                </center>
            </div>
            <div class="gallery-cell">
                <center>
                <div class="insightDiv1" style="width: 366px; background: white;padding: 20px;">
                    <img src="{{ asset('images/insightImage1.png') }}" style="width: 100%">
                    <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                    <p class="insightText1">Global Factor Investing Study</p>
                </div>
                </center>
            </div>
          </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
        <script>
            $('.main-gallery').flickity({
              // options
              cellAlign: 'left',
              contain: true
            });
        </script>
    </body>
</html>
