
<!DOCTYPE html>
<html>
<head>
  <title>form to google sheet-2</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body style="padding: 20px 50px;">
  <form method="POST" name="Khurak">
  <div class="mb-3">
  <label for="name" class="form-label">Full Name</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="enter your name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> mobile</label>
  <input type="number" class="form-control" name="number" id="exampleFormControlInput1" placeholder="enter your number">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">District</label>
  <input class="form-control" name="district" id="exampleFormControlTextarea1" rows="3" placeholder="district"></input>
</div>
  
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">pincode</label>
    <input class="form-control" name="pincode" id="exampleFormControlTextarea1" rows="3" placeholder="pincode"></input>
  </div>
         <!-- main location -->
     
<label for="lat">Latitude</label>
<input type="text" class="lat" name="latitude" >
 
<label for="lon">Longitude</label>
<input type="text" class="lon" name="longitude">

<label for="test">location</label>
<input type="text" name="location" class="test" >
 
      <!-- main location -->
<input type="submit" name="submit">
</form>
<script type="text/javascript">
  const scriptURL = 'https://script.google.com/macros/s/AKfycbyBLDoYWNCAtyMw-zJqRXcSh2FaV7uZk_DX6YDZ1_gXnTgajnTLg049Rj_qUCzLQKRw7A/exec'
            const form = document.forms['Khurak']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
</script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  var $locationText = $(".location");
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      geoLocationSuccess,
      geoLocationError,
      { timeout: 10000 }
    );
  } else {
    alert("your browser doesn't support geolocation");
  }
  function geoLocationSuccess(pos) {
    // get user lat,long
    var myLat = pos.coords.latitude, myLng = pos.coords.longitude, loadingTimeout;
    $(".lat").val(pos.coords.latitude);
    $(".lon").val(pos.coords.longitude);
  
    var loading = function () {
      $locationText.text("fetching...");
    };
  
    loadingTimeout = setTimeout(loading, 600);
  
    var request = $.get(
      "https://nominatim.openstreetmap.org/reverse?format=json&lat=" +
        myLat +
        "&lon=" +
        myLng
    ).done(function (data) {
        if (loadingTimeout) {
          clearTimeout(loadingTimeout);
          loadingTimeout = null;
          $locationText.text(data.display_name);
          $(".test").val(data.display_name);
        }
      })
      .fail(function () {
        // handle error
      });
  }
  
  function geoLocationError(error) {
    var errors = {
      1: "Permission denied",
      2: "Position unavailable",
      3: "Request timeout"
    };
    alert("Error: " + errors[error.code]);
  }
  
  </script>
</div>
</body>
</html>