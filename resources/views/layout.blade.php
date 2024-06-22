<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/signIn.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>OuagaLaBelle</title>
</head>
<body>
    <div id="barH">
        <div id="logo">     
            <div id="ouagalabel"><strong id="ouaga">Ouaga</strong><em id="la">La</em><em id="belle">Belle</em></div>
            <div id="devise">Ouaga, la terre de l'hospitalité!!</div>
        </div>
    </div>
    @yield('content')
</body>
</html>