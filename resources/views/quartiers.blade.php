@extends('dashbord')
@section('content')
    <div id="categorie">
        <h2 class="titrePage">Les quartiers des sites</h2>
        <div><a href="/dashbord/quartiers/create" class="nouveau"><i class="fa-solid fa-plus"></i>Nouveau quartier</a></div>
        <table>
            <tr id="enteteTable">
                <td >Nom du quartier</td>
                <td colspan="3" class="action">Actions</td>
            </tr>
            @foreach ($quartiers as $quartier)
                <tr>
                    <td>{{ $quartier->quartier }}</td>
                    <td class="action"><a href="/dashbord/quartiers/{{ $quartier->id }}/edit"><i
                                class="fa-regular fa-pen-to-square"></i></a></td>
                    <td class="action"><a href="/dashbord/quartiers/{{ $quartier->id }}/delete"><i class="fa-solid fa-trash"></i></a></td>
                    <td class="action"><a href=""><i class="fa-solid fa-list"></i></a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
