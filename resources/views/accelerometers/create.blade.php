<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
    @csrf

    <div>

    </div>

    <div>
    </div>

    <div>
      <button type="submit">Submit</button>
    </div>
  </form>

  <script>
    if (window.DeviceOrientationEvent) {
      window.addEventListener("deviceorientation", function () {
        alert(event.beta);
        tilt([event.beta, event.gamma]);
      }, true);
    } else if (window.DeviceMotionEvent) {
      window.addEventListener('devicemotion', function () {
        alert(event.acceleration.x);
        tilt([event.acceleration.x * 2, event.acceleration.y * 2]);
      }, true);
    } else {
      window.addEventListener("MozOrientation", function () {
        alert(orientation);
        tilt([orientation.x * 50, orientation.y * 50]);
      }, true);
    }
  </script>
</body>
</html>

