@extends('dashbord')
@section('content')
    <div id="categorie">
        <h2>Les catégories des sites</h2>
        <div><a href="/dashbord/categories/create"><i class="fa-solid fa-plus"></i>Nouveau site</a></div>
        <table width=50% border="1px">
            <tr>
                <td>Nom de la catégorie</td>
                <td colspan="3">Actions</td>
            </tr>
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->nom_cat }}</td>
                    <td><a href="/dashbord/categories/{{ $categorie->id }}/edit"><i
                                class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><a href="/dashbord/categories/{{ $categorie->id }}/delete"><i class="fa-solid fa-trash"></i></a></td>
                    <td><a href=""><i class="fa-solid fa-list"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
