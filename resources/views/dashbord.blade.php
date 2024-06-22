<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="{{asset('css/Dashbord.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="container">
        <div id="navigation" class="groupe">
            <ul>
                <li>Tableau de bord</li>
                <li>Sites/li>
                <li>Utilisateurs/li>
                <li>Paramètre</li>
                <li>Se déconnecter</li>
            </ul>
        </div>
        <div id="content" class="groupe">
            @yield('content')
        </div>
    </div>
</body>
</html>