<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/details.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <title>details</title>
</head>
<body>
    <div id="entete">
        <p>En tete</p>
    </div>
<div id="categorie">
    <div id="barR">
        <input type="search" name="recherche" id="recherche" placeholder="Recherche...">
        <button type="submit" id="btnRecherche"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    <div id="divO">
        <a href="" class="option"><i class="fa-solid fa-location-crosshairs"></i></a>
        <a href="" class="option"><i class="fa-solid fa-route"></i></a>
        <a href="" class="option"><i class="fa-solid fa-parachute-box"></i></a>
        <a href="" class="option"><i class="fa-solid fa-circle-info"></i></a>
    </div>
    <div id="desc">
        <p>Description</p>
        <input type="hidden" name="lat" id="lat" value="{{$site->latitude}}">
        <input type="hidden" name="lng" id="lng" value="{{$site->longitude}}">
        <input type="hidden" name="nom" id="nom" value="{{$site->nom}}">        
        <h2 style="color: green; 
        font-size: 18px ;text-align: center;
        font-style: italic">{{ $site->nom}}</h2>
        <h5 style="padding: 5px; color: #3572EF ;
        font-family: Arial, Helvetica, sans-serif">{{ $site->description }}</h5>
       

    </div>
</div>
<div id="visuel">
    @foreach ($site->images as $image)
        <img src="{{ asset('storage/' . $image->nom_image) }}" alt="{{$image->nom_image}}" class="img">
    @endforeach
</div>
<div id="carte">
   <div id="map"></div>
</div>
</body>
<script src="{{ asset('js/map.js') }}"></script>
</html>