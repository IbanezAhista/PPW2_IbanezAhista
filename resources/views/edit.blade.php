<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Photo</title>
</head>

<body>
    <form method="POST" action="{{route('update', $user->id)}}" enctype="multipart/form-data">
        <img src="{{ asset('storage/photos/' . $user->photo) }}" style="width : 100px">
        @csrf
        <label>Photo</label>
        <input type="file" name="photo">
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>