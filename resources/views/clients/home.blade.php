<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blade </title>
</head>
<body>
    <div class="header">
        @extends('layout.client')
    </div>
    <div class="content">
        @section('content')
            <h1>This is content</h1>
        @endsection
    </div>

    <div class="layoutadmin">
        @extends('layout.admin')
    </div>
</body>
</html>