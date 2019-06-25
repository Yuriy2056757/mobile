<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>
    <img
      id="image_preview"
      width="128"
      height="128"
      src="{{ asset('storage/' . $image->image) }}"
    />
  </div>
</body>
</html>

