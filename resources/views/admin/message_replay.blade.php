<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>message replay</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontAssets/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontAssets/css/bootstrap.css.map') }}">
    <link rel="stylesheet" href="{{ asset('frontAssets/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container p-2  mt-4">
        <div>user name:{{ $contact->name }}</div>
        <div>user email:{{ $contact->email }}</div>
        <div>user phone:{{ $contact->phone }}</div>
        <div>message:{{ $contact->message }}</div>
        <hr>
    </div>
    <h2 class="container">Replay to {{ $contact->name }}</h2>
    <form action="{{ route('admin.message_replay',$contact->id) }}" method="POST" class="container mt-2">
        @csrf
        <div>
            <label for="replay">Admin message:</label>
            <textarea class="form-control mt-2" name="replay" id="replay" cols="30" rows="10"></textarea>
            @error('replay')
            <div><small class="text-danger">{{ $message }}</small></div>
            @enderror
        </div>
        <button class="btn btn-success mt-4">send</button>
    </form>
</body>

</html>
