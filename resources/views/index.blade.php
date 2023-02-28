<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>This Weather App System!</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <input type="text" name="" id="inputWeather" class="form-control">
            </div>
            <div class="">
                <h2 id="country"></h2>
                <p id="time"></p>
                <h1 id="temperatur"></h1>
            </div>
            <div id="img" class="">

            </div>
            <h5 id="cloud"></h5>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
        $('#inputWeather').on('keyup', function() {
            if(event.key === "Enter"){
                var city = $(this).val()

                $.ajax({
                    type: "get",
                    url: "/getweather/" + city,
                    success: function(e) {
                        $('#country').html(e.location.country)
                        $('#time').html(e.location.localtime)
                        $('#temperatur').html(e.current.temp_c+ "&deg;")
                        $('#img').html(`<img src="${e.current.condition.icon}" alt="" width="200px" height="200px">`)
                        
                        $('#cloud').html(e.current.condition.text)
                        console.log(e)
                    },
                    error: function(){},
                });
            }
        })
    </script>
  </body>
</html>