@extends('dashbord')
@section('content')
    <div id="sites">
        <h2 class="titrePage">Nos sites</h2>
        <div><a href="/dashbord/sites/create" class="nouveau"><i class="fa-solid fa-plus"></i>Nouveau site</a></div>
        <table >
            <tr id="enteteTable">
            <td rowspan="2">Chosez</td>
            <td rowspan="2">Nom du site</td>
            <td colspan="2">Coordonnées</td>
            <td rowspan="2">Date de création</td>
            <td rowspan="2">Catégorie</td>
            <td rowspan="2">Localité</td>
           <!-- <td rowspan="2">Visuel</td>-->
            <td colspan="4" rowspan="2" class="action">Actions</td>
            </tr>
            <tr>
                <td class="sousentete">Latitude</td>
                <td class="sousentete">Longitude</td>
            </tr>
            @foreach ($sites as $site)
                <tr>
                    <td><a href=""><input type="checkbox" name="" id="{{ $site->id }}"></a></td>
                    <td>{{ $site->nom }}</td>
                    <td>{{ $site->latitude }}</td>
                    <td>{{ $site->longitude }}</td>
                    <td>{{ $site->date_creation }}</td>
                    <td>{{ $site->categorie->nom_cat }}</td>
                    <td>{{ $site->quartier->quartier }}</td>
                    <td><button onclick="afficherPopup({{ $site->id }})" class="btnImg"><i class="fa-regular fa-image"></i></button></td>
                    <td><a href="/dashbord/sites/{{$site->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><a href="/dashbord/sites/{{$site->id}}/delete"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href="/details/{{$site->id}}"><i class="fa-regular fa-eye"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    .form-group{
        display: flex;
        flex-direction: column;
    }
    .btn{
        padding: 10px 60px 10px 60px;
        margin-top: 10px;
        border-radius: 10px;
        border-width: 1px;
    }
    #valider{
        background: #3572EF;
        color: white;
        border-color:  #3572EF;
        margin-right: 20px;

    }
    form{
        color: #3572EF;

    }
    input{
        font-size: 14px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    /* border-radius: 10px;*/
        border: #050C9C 1px solid;
        outline: none
    }
    </style>
    <div id="popup" class="popup">
        <button onclick="fermerPopup()"><i class="fa-solid fa-xmark"></i></button>
        <form action="images/store" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group" >
                <label for="image">Parcourir</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <input type="hidden" name="site_id" id="site_id" value="">
            <input type="submit" value="uploader" class="btn" id="valider">
        </form>
    </div>
    <script>
        function afficherPopup(siteId) {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('site_id').value= siteId;
        }

        function fermerPopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>

@endsection
