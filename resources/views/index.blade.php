<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Accueil</title>
</head>
<body>
    <div id="blocHaut">
        <div id="entete" class="header">
            <div id="logo">
                
                <div id="ouagalabel"><strong id="ouaga">Ouaga</strong><em id="la">La</em><em id="belle">Belle</em></div>
                <div id="devise">Ouaga, la terre de l'hospitalité!!</div>
            </div>
            <div id="reseau">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-square-instagram"></i>
            </div>
            <div id="gMenu">
                <div><a href="" class="mi">burkina</a></div>
                <div><a href="" class="mi">FAQ</a></div>
                <div><a href="/signIn" class="mi">S'inscrire</a></div>
                <div><a href="/logIn" class="mi">Se connecter</a></div>
                <div><a href="" class="mi">Ajouter un site</a></div>
            </div>
        </div>
        <div id="navBar" class="header">
           <div id="gSmenu">
                <div> 
                    <a href="" class="smi">Accueil</a>
                </div>
                 <div> <a href="#lesSites" class="smi">Sites</a></div>
                <div> <a href="#actu" class="smi">OuagaActu</a></div>
           </div>
            <div  id="barR">
                <form action="/recherche" method="post" id="rechercheForm">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); document.getElementById('rechercheForm').submit();" id="btnRecherche">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <input type="search" name="recherche" id="barRecherche" placeholder="Effectuer une recherche...">
                </form>
            </div>
            <div id="bandereau">
                <img src="{{asset("/image/bf10.png")}}" alt="">
            </div>
        </div>
    </div>
    <div id="corps">
        <h1 id="bienvenu">Bienvenue Ouagagougou!!!</h1>
        <h3 id="desc">La capitale des investitigateur</h3>
    </div>
    <div id="lesSites">
        <p class="titreType"></p>
        @foreach ($categories as $categorie )
        <div>
            <h2>{{$categorie->nom_cat}}</h2>
            <div class="typeSites">
                @foreach ($categorie->sites as $site)
                    <a href="#" onclick="event.preventDefault(); document.getElementById('details-form{{$site->id}}').submit();" class="site"> 
                        <form action="/details" method="GET" id="details-form{{$site->id}}">
                            <input type="hidden" name="id" id="id" value="{{$site->id}}">
                        </form>
                        <img src="{{ asset('storage/' . $site->img) }}" alt="{{$site->img}}" class="img">
                        <h2>{{$site->nom}}</h2>
                        <h4><em>situé à {{$site->quartier->quartier}}</em></h4>
                        <h3>Note</h3>
                    </a>
                @endforeach
             </div>
       <div>
        @endforeach
       

    <div id="pied">
        <ul class="elemPied">
           <p> Contacts</p>
            <li>Tel: (00226) 54 01 50 00</li>
            <li>email: diaoabdoull001@gmail.com</li>
        </ul>
        <ul class="elemPied">
            <p>Liens utils</p>
            <li><a href="https://www.presidencedufaso.bf/">Présidance du Faso</a></li>
            <li><a href="https://www.communication.gov.bf/accueil">Ministère de la culture des arts et du tourisme</a></li>
            <li><a href="https://www.mdenp.gov.bf/accueil">Ministère de la transition digitale de poste et la communication éléctroniques</a></li>
           <li> <a href="https://siao.bf/">SIAO</a></li>
        </ul>
        <ul class="elemPied">
            <p>A propos</p>
            <em>Nous sommes des promoteurs agregés des cites sites touristiques</em>
        </ul>
        <ul class="elemPied">
            <p id="actu">Actus</p>
            <li href=""><a href="">Le Faso.net</a></li>
           <li> <a href="">Evènement</a></li>
        </ul>
    </div>
    <div id="copyright"><h3>CopyRight 2024 tout drois reservés </h3></div>
    <script src="{{ asset('js/slide.js') }}"></script>
</body>
</html>