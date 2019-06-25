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
      <img
        id="image_preview"
        width="128"
        height="128"
      />
    </div>

    <div>
      <input
        type="file"
        accept="image/*"
        capture="camera"
        name="image"
        onchange="document.getElementById('image_preview').src = window.URL.createObjectURL(this.files[0])"
      />
    </div>

    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
</body>
</html>

