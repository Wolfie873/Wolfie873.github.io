<?php

if ($_GET['city']) {
    $forecastPage = file_get_contents(
        'https://www.weather-forecast.com/locations/' .
            $_GET['city'] .
            '/forecasts/latest'
    );

    $pageArray = explode(
        '<table class="b-forecast__table js-forecast-table">',
        $forecastPage
    );

    $secondPageArray = explode('</span></p></td></tr><tr', $pageArray[1]);

    $weather = $secondPageArray[0];
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!--JQuery input call-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Jquery UI-->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"
        integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>
    <title>Weather Scrapper Test</title>

    <style>
    .container-flex {
        height: 100vh;
        background-image: url("../Images/location.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-position: fixed;
        background-size: cover;
    }

    body {
        background: none;
    }

    #weather {
        color: white;
        background-color: hsl(328, 100%, 0%, 0.9);
    }

    #city {
        color: white;
        background-color: hsl(328, 100%, 0%, 0.9);
        margin-bottom: 10px;
    }

    #cityInput {
        background-color: hsl(328, 100%, 0%, 0.9);
        color: white;
    }

    #inputFields {
        margin-top: 50px;
        color: white;
    }

    #alertWeather {
        width: 800px;
        margin: 0 auto;
        max-height: 200px;
        font-size: 14px !important;
        font-family:
            -apple-system,
            BlinkMacSystemFont,
            'Segoe UI',
            Roboto,
            Oxygen,
            Ubuntu,
            Cantarell,
            'Open Sans',
            'Helvetica Neue',
            sans-serif;
        overflow: scroll;
    }
    </style>
</head>

<body>
    <div class="container-flex d-flex flex-column justify-content-center">
        <div class="d-flex p2 flex-row justify-content-center">
            <div class="p-2 align-self-center" id="weather">
                <h2>What's the Weather like</h2>
            </div>
        </div>
        <form class="d-flex flex-column align-items-center" id="inputFields">
            <div class="form-group d-flex p-2 flex-column align-items-center">
                <label for="city" class="d-flex p-2" id="city">Enter the City(no spaces):</label>
                <input type="text" name="city" id="city" placeholder="Eg. Toky, San-Juan">
            </div>
            <div class="form-group d-flex p-2 flex-row">
                <button type="submit" class="btn btn-primary" id="weatherBtn">Show me
                    Weather</button>
            </div>
        </form>
        <div id="alertWeather"><?php if ($weather) {
            echo '<div class="alert alert-success" role="alert"><strong>Weather Forecast for: <em>' .
                $_GET['city'] .
                '</em></strong><br/>' .
                $weather .
                '</div>';
        } ?></div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>