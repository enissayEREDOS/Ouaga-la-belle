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
            <div id="barH">
                <div id="logo">     
                    <div id="ouagalabel"><strong id="ouaga">Ouaga</strong><em id="la">La</em><em id="belle">Belle</em></div>
                    <div id="devise">Ouaga, la terre de l'hospitalité!!</div>
                </div>
            </div>
            <ul>
                <li class="dashbord_i"><a href="/dashbord/tableau" class="a"><i class="fa-solid fa-gauge"></i>&ensp;Tableau de bord</a></li>
                <li class="dashbord_i"><a href="/" class="a"><i class="fa-solid fa-gauge"></i>&ensp;Accueil</a></li>
                <li class="dashbord_i"><a href="/dashbord/sites"  class="a"><i class="fa-solid fa-sitemap"></i>&ensp;Sites</a></li>
                <li class="dashbord_i"><a href="/dashbord/categories"  class="a"><i class="fa-solid fa-table-list"></i>&ensp;Catégories</a></li>
                <li class="dashbord_i"><a href="/dashbord/quartiers"  class="a"><i class="fa-solid fa-location-dot"></i>&ensp;Localités</a></li>
                <li class="dashbord_i"><a href="/dashbord/tarifs"  class="a"><i class="fa-solid fa-tag"></i>&ensp;Tarifs</a></li>
                <li class="dashbord_i"><a href="/dashbord/users" class="a" ><i class="fa-solid fa-users"></i>&ensp;Utilisateurs</a></li>
                <li class="dashbord_i"><a href="parametre"  class="a"><i class="fa-solid fa-gear"></i>&ensp;Paramètre</a></li>
                <li class="dashbord_i"><a href="/logIn"  class="a"><i class="fa-solid fa-right-from-bracket"></i>&ensp;Se déconnecter</a></li>
            </ul>
        </div>
        <div id="content" class="groupe">
            @yield('content')
        </div>
    </div>
</body>
</html>