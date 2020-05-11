<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
       
        <!-- Plugins -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('fonts/interstate/style.css') }}" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-acme">
            <img src="{{ asset('images/logo.png') }}" class="showInMobile" style="margin-left: 40%;height: 75px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mx-auto">
                    <li class="nav-item hideInMobile" style="margin-right: 0px;">
                        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}"></a>
                    </li>
                    <li class="nav-item hideInMobile" style="margin-left: 0px;">
                        <p class="logoText1">Research Professional</p>
                        <p class="logoText2">Platform</p>
                    </li>
                    <li class="nav-item hideInMobile">
                        <img src="{{ asset('images/liner.png') }}" style="margin-top: 20px;">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Insights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="banner-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-text">
                            <p class="bannerText1">ACME Wealth</p>
                            <p class="bannerText1">Management Platforms</p>
                            <p class="bannerText2">Investment excellence.</p>
                            <p class="bannerText2">Diversity of thought.</p>
                            <p class="bannerText2">Organizational strength.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="acmeInsightsText1">ACME Insights</p>
                        <p class="acmeInsightsText2">How are factors being used around the world?</p>
                    </div>
                </div>
            </div>
            <div class="showInDesktop">
                <div class="flex-container">
                    <div class="insightDiv1">
                        <img src="{{ asset('images/insightImage1.png') }}" style="width: 100%">
                        <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                        <p class="insightText1">Global Factor Investing Study</p>
                    </div>
                    <div class="insightDiv2">
                        <img src="{{ asset('images/insightImage2.png') }}" style="width: 100%">
                        <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                        <p class="insightText2">2019  Outlook</p>
                    </div>
                    <div class="insightDiv3">
                        <img src="{{ asset('images/insightImage3.png') }}" style="width: 100%">
                        <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                        <p class="insightText3">Capital Market Assumptions</p>
                    </div>
                </div>
            </div>
            <div class="gallery js-flickity showInMobile" data-flickity-options='{ "wrapAround": true }'>
                <div class="gallery-cell">
                    <center>
                        <div class="insightDiv1" style="width: 100%; background: white;padding: 20px;">
                            <img src="{{ asset('images/insightImage1.png') }}" style="width: 100%">
                            <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                            <p class="insightText1">Global Factor Investing Study</p>
                        </div>
                    </center>
                </div>
                <div class="gallery-cell">
                    <center>
                        <div class="insightDiv2" style="width: 100%; background: white;padding: 20px;">
                            <img src="{{ asset('images/insightImage2.png') }}" style="width: 100%">
                            <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                            <p class="insightText2">2019  <br>Outlook</p>
                        </div>
                    </center>
                </div>
                <div class="gallery-cell">
                    <center>
                        <div class="insightDiv3" style="width: 100%; background: white;padding: 20px;">
                            <img src="{{ asset('images/insightImage3.png') }}" style="width: 100%">
                            <img src="{{ asset('images/triangles.png') }}" class="insightTriangles">
                            <p class="insightText3">Capital Market Assumptions</p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div style="margin-top: 60px;">
        <div class="bottomBanerHeroimage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bottomBanerHerotext">
                            <p class="bottomBannerText1">Our Commitment to Professionals</p>
                            <p class="bottomBannerText2">We help our partners deliver industry leading results with a commitment to excellence, thought-provoking insights and experienced distribution. We are laser focused on our shared goal – helping clients achieve their objectives. </p>
                            <button class="btn contactUsButton">Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div style="margin-top: 30px;margin-bottom: 60px;">
            <div class="container" style="margin-bottom: 30px;">
                <div class="row">
                    <div class="col-md-12">
                        <p class="acmeInsightsText1">Upcoming Events</p>
                        <p class="acmeInsightsText2">This needs a great tagline, but I’ll fill it in later</p>
                    </div>
                </div>
            </div>
            <div class="flex-container2 showInDesktop">
                <div>
                    <img src="{{ asset('images/blueCorner.png') }}" class="blueCorner">
                    <p class="dateText1">JAN</p>
                    <p class="dateText2">28</p>
                    <p class="blueLayerText1">Insight Exchange Network</p>
                    <p class="blueLayerText2">Join us for this conference showcasing innovation.</p>
                    <button type="button" class="btn blueButton contactUsButton">Get More Insight</button>
                    <p class="ascentText">Chicago, IL</p>
                    <img src="{{ asset('images/ascent.png') }}" class="ascent">
                </div>
                <div>
                    <img src="{{ asset('images/blueCorner.png') }}" class="blueCorner">
                    <p class="dateText1">FEB</p>
                    <p class="dateText2">12</p>
                    <p class="blueLayerText1">Citywide Buyer’s Retreat</p>
                    <p class="blueLayerText2">Find out how banks are responding to the changing future of interest...</p>
                    <button type="button" class="btn blueButton contactUsButton">Get More Insight</button>
                    <p class="ascentText">The Wagner, New York </p>
                    <img src="{{ asset('images/ascent.png') }}" class="ascent">
                </div>
                <div>
                    <img src="{{ asset('images/blueCorner.png') }}" class="blueCorner">
                    <p class="dateText1">MAY</p>
                    <p class="dateText2">6</p>
                    <p class="blueLayerText1">Research Exchange</p>
                    <p class="blueLayerText2">Find the best online resources to help with your investments...</p>
                    <button type="button" class="btn blueButton contactUsButton">Get More Insight</button>
                    <p class="ascentText">London, England</p>
                    <img src="{{ asset('images/ascent.png') }}" class="ascent">
                </div>
            </div>
            <div class="gallery js-flickity showInMobile" data-flickity-options='{ "wrapAround": true }'>
                <div class="gallery-cell">
                    <center>
                    <div style="padding: 10px;background: #1450d2;width: 100%;margin: 10px;color: white;padding-bottom: 0px; text-align: left;">
                        <img src="{{ asset('images/blueCorner.png') }}" class="blueCorner">
                        <p class="dateText1">JAN</p>
                        <p class="dateText2">28</p>
                        <p class="blueLayerText1">Insight Exchange Network</p>
                        <p class="blueLayerText2">Join us for this conference showcasing innovation.</p>
                        <button type="button" class="btn blueButton contactUsButton">Get More Insight</button>
                        <p class="ascentText">Chicago, IL</p>
                        <img src="{{ asset('images/ascent.png') }}" class="ascent">
                    </div>
                    </center>
                </div>
                <div class="gallery-cell">
                    <center>
                        <div style="padding: 10px;background: #1450d2;width: 100%;margin: 10px;color: white;padding-bottom: 0px; text-align: left;">
                            <img src="{{ asset('images/blueCorner.png') }}" class="blueCorner">
                                <p class="dateText1">FEB</p>
                                <p class="dateText2">12</p>
                                <p class="blueLayerText1">Citywide Buyer’s Retreat</p>
                                <p class="blueLayerText2">Find out how banks are responding to the changing future of interest...</p>
                                <button type="button" class="btn blueButton contactUsButton">Get More Insight</button>
                                <p class="ascentText">The Wagner, New York </p>
                            <img src="{{ asset('images/ascent.png') }}" class="ascent">
                        </div>
                    </center>
                </div>
                <div class="gallery-cell">
                    <center>
                        <div style="padding: 10px;background: #1450d2;width: 100%;margin: 10px;color: white;padding-bottom: 0px; text-align: left;">
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
                </div>
            </div>
        </div>
        <div class="grayFooter">
            <div class='container'>
                <div class="row">
                    <div class='col-md-6'>
                        <p>
                            Call us at 111-222-3333
                        </p>
                        <p>
                            for more information 
                        </p>
                    </div>
                    <div class='col-md-6'>
                        <p class="socialShareFooter">
                            Social Share
                            <img src="{{ asset('images/twitter.png') }}">
                            <img src="{{ asset('images/facebook.png') }}">
                            <img src="{{ asset('images/linkedIn.png') }}">
                            <img src="{{ asset('images/email.png') }}">
                        </p>
                    </div>
                </div>
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