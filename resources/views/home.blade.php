<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    
    <title>Wizkids Manager</title>
</head>

<body>
    <div>
        @include('layouts.header')
            <div class="info">
                <h1 class="white-txt">Wizkids Manager</h1>
            </div>
            
            <div class="info">
                <h2 class="white-txt" style="padding:50px 50px 50px 50px;">Please go to "Wizkids" to check out the new Wizkid,<br>or to "login" to add some!"</h2>
            </div>
    </div>
</body>
</html>