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
                 <div> <a href="" class="smi">Sites</a></div>
                <div> <a href="" class="smi">OuagaActu</a></div>
           </div>
            <div href=""  id="barR">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="barRecherche" id="barRecherche" placeholder="Effectuer une recherche...">
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
        <p class="titreType">les images des sites</p>
        <div>
            <h2>Type1</h2>
            <div class="typeSites">
                <a href="/map" class="site"> 
                     <img src="{{asset('image/télécharger.jpg')}}" alt="site1" class="img">
                     <h2>Titre3</h2>
                     <h4><em>sous titre3</em></h4>
                     <h3>Note</h3>
                </a>
                <a href="/map" class="site"> 
                     <img src="{{asset('image/télécharger.jpg')}}" alt="site1" class="img">
                     <h2>Titre3</h2>
                     <h4><em>sous titre3</em></h4>
                     <h3>Note</h3>
                 </a>
                <a href="/map" class="site">
                     <img src="{{asset('image/télécharger.jpg')}}" alt="site1" class="img">
                     <h2>Titre3</h2>
                     <p><em>sous titre3</em></p>
                     <h3>Note</h3>
                 </a>
                 <a href="/details" class="site">
                     <img src="{{asset('image/télécharger.jpg')}}" alt="site1" class="img">
                     <h2>Titre3</h2>
                     <h4><em>sous titre3</em></h4>
                     <h3>Note</h3>
                 </a>
                <div id="voirPlus"> <a href="/map" id="surVoirPlus">Voir plus..</a></div>
             </div>
        </div>
       <div>
        <h2>Type2</h2>
        <div class="typeSites">
            <a href="/details" class="site"> 
                 <img src="{{asset('image/télécharger (1).jpg')}}" alt="site1" class="img">
                 <h2>Titre3</h2>
                 <h4><em>sous titre3</em></h4>
                 <h3>Note</h3>
             </a>
            <a href="/details" class="site"> 
                 <img src="{{asset('image/télécharger (1).jpg')}}" alt="site1" class="img">
                 <h2>Titre3</h2>
                 <h4><em>sous titre3</em></h4>
                 <h3>Note</h3>
             </a>
            <a href="/details" class="site">
                 <img src="{{asset('image/télécharger (1).jpg')}}" alt="site1" class="img">
                 <h2>Titre3</h2>
                 <h4><em>sous titre3</em></h4>
                 <h3>Note</h3>
             </a>
             <a href="/details" class="site">
                 <img src="{{asset('image/télécharger (1).jpg')}}" alt="site1" class="img">
                 <h2>Titre3</h2>
                 <h4><em>sous titre3</em></h4>
                 <h3>Note</h3>
             </a>
            <div id="voirPlus"> <a href="" id="surVoirPlus">Voir plus..</a></div>
         </div>
       </div>
    </div>
    <div id="pied">
        <ul class="elemPied">
           <p> Contacts</p>
            <li>Tel: (00226) 54 01 50 00</li>
            <li>email: diaoabdoull001@gmail.com</li>
        </ul>
        <ul class="elemPied">
            <p>Liens utils</p>
            <li><a href="">Présidance du Faso</a></li>
            <li><a href="">Ministère de la culture des arts et du tourisme</a></li>
            <li><a href="">Ministère de la transition digitale de poste et la communication éléctroniques</a></li>
           <li> <a href="">SIAO</a></li>
        </ul>
        <ul class="elemPied">
            <p>A propos</p>
        </ul>
        <ul class="elemPied">
            <p>Actus</p>
            <li href=""><a href="">Le Faso.net</a></li>
           <li> <a href="">Evènement</a></li>
        </ul>
    </div>
    <div id="copyright"><h3>CopyRight 2024 tout dRoit reservé (c)</h3></div>
</body>
</html>