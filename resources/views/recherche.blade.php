<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recherche</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
    <style>
        #entete{
            background: #3572EF;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-width: 2px;
            border-color: black;
            color: white;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            text-decoration-line: none;
            background-color: #fff;
        }
        a{
            text-decoration: none;
        }
        h1{
            align-items: center;
            text-align: center;
            color: #050C9C;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        tr:hover {
            background-color: #ddd;
        }
        h3{
            text-align: center;
            color: red;
            font-style: italic;
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
    <div id="logo" style="background-color:#050C9C">
                
        <div id="ouagalabel"><strong id="ouaga">Ouaga</strong><em id="la">La</em><em id="belle">Belle</em></div>
        <div id="devise">Ouaga, la terre de l'hospitalité!!</div>
    </div>
    <h1>Resultats</h1>
   @if($sites_rech->count()>0)
   <table>
    <tr id="entete">
        <td>Site</td>
        <td>Catégorie</td>
        <td>Description</td>
        <td>Visuel</td>
    </tr>
    @foreach ($sites_rech as $site)
        <tr>
            <td><a href="/details/{{$site->id}}">{{ $site->nom }} </a></td>
            <td><a href="/details/{{$site->id}}">{{ $site->categorie->nom_cat }}</a></td>
            <td><a href="/details/{{$site->id}}">{{ $site->description }}</a></td>
            <td><a href="/details/{{$site->id}}"><img src="{{ asset('storage/' . $site->img) }}" alt="{{ $site->img }}"
                        style="width: 50px; height: 50px;"></a></td>
        </tr>
    @endforeach
</table>
@else
    <h3>Aucun résultat ne correspond à votre recherche</h3>
@endif
</body>

</html>
