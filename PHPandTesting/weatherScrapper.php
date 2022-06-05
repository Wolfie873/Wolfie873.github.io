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
        background-size: cover;
    }

    #infoRow {
        margin-top: 5vh;
    }

    #inputRow {
        margin: 5vh;
    }

    #weather {
        color: white;
    }

    #city {
        color: white;
    }
    </style>
</head>

<body>
    <?php  ?>
    <div class="container-flex">
        <div class="d-flex p2 flex-row justify-content-center">
            <div class="d-flex flex-column" id="infoRow">
                <div class="p-2 align-self-center" id="weather">
                    <h2>What's the Weather like</h2>
                </div>
                <div class="p-2 align-self-center" id="city">
                    <h3>Enter the city</h3>
                </div>
            </div>
        </div>
        <div class="d-flex p2 flex-row justify-content-center">
            <div class="d-flex flex-row align-items-center" id="inputRow">
                <div class="p-2" id="inPut">
                    <label for="cityInput"></label>
                    <input type="text" name="cityInput" id="cityInput" placeholder="Eg. Toky, San Juan">
                </div>
            </div>
        </div>
        <div class="d-flex p2 flex-row justify-content-center">
            <div class="d-flex flex-column justify-content-center"><button type="submit" class="btn btn-primary"
                    id="weatherBtn">Show me
                    Weather</button></div>
        </div>
    </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>