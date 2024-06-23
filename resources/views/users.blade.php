@extends('dashbord')
@section('content')
    <div id="categorie">
        <h2 class="titrePage">Les utilisateurs</h2>
        <div><a href="/signIn" class="nouveau"><i class="fa-solid fa-plus"></i>Nouvel utilisateur</a></div>
        <table>
            <tr id="enteteTable">
                <td >Nom </td>
                <td >Prénom</td>
                <td >Mail</td>
                <td >Télephone</td>
                <td colspan="3" class="action">Actions</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->prenom }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td class="action"><a href="#"><i
                                class="fa-regular fa-pen-to-square"></i></a></td>
                    <td class="action"><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                    <td class="action"><a href="#"><i class="fa-solid fa-list"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
