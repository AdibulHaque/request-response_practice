<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Forms</title>
</head>

<body>
    <form enctype="multipart/form-data" action=" {{ route('form.post') }} " method="POST">
        @csrf
        <br>
        <br>
        <br>
        <label> Profile Picture</label>
        <input type="file" name="profile_picture">
        <br>
        <button type="submit">Submit</button>
    </form>

    <p>
        @if (@session('profile_picture'))
            <img src="{{ session('profile_picture') }}" alt="">
        @endif
    </p>
</body>

</html>
