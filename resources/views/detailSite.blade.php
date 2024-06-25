<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/details.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <title>details</title>
</head>
<body>
    <div id="entete">
        <p>En tete</p>
    </div>
<div id="categorie">
    <div id="barR">
        <form action="/recherche" method="post" id="rechercheForm">
        @csrf
            <a href="#" onclick="event.preventDefault(); document.getElementById('rechercheForm').submit();" id="iconRecherche">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <input type="search" name="recherche" id="btnRecherche" placeholder="Effectuer une recherche...">
        </form>
    </div>
    <div id="divO">
    <a href="#" class="option" onclick="getLocation()" ><i class="fa-solid fa-location-crosshairs"></i></a>
    <a href="#" class="option" id="geoLocationBtn" id="calculateRouteBtn" onclick="calculateRoute()"><i class="fa-solid fa-route"></i></a>
    <a href="#" class="option"><i class="fa-solid fa-parachute-box"></i></a>
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

<!-- Modal -->
<div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            
            <img id="modalImage" src="{{ asset('storage/'. $site->img) }}" alt="Image" style="width:100%;">
        
            <h4 id="modalTitle">{{ $site->nom }}</h4>
            <p id="modalType">Est un {{$site->Categorie->nom_cat}}</p>
            <p id="modalDescription">situé à {{$site->quartier->quartier}}</p>
        </div>
    </div>

<script src="{{ asset('js/modal.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>

</body>

</html>