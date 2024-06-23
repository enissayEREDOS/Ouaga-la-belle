@extends('dashbord')
@section('content')
    <div id="categorie">
        <h2 class="titrePage">Les catégories des sites</h2>
        <div><a href="/dashbord/categories/create" class="nouveau"><i class="fa-solid fa-plus"></i>Nouvelle catégorie</a></div>
        <table >
            <tr id="enteteTable">
                <td>Nom de la catégorie</td>
                <td colspan="3">Actions</td>
            </tr>
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->nom_cat }}</td>
                    <td class="action"><a href="/dashbord/categories/{{ $categorie->id }}/edit"><i
                                class="fa-regular fa-pen-to-square"></i></a></td>
                    <td class="action"><a href="/dashbord/categories/{{ $categorie->id }}/delete"><i class="fa-solid fa-trash"></i></a></td>
                    <td class="action"><a href="/dashbord/categories/{{ $categorie->id}}/sites"><i class="fa-solid fa-list"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
