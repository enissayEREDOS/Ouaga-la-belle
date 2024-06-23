@extends('dashbord')
@section('content')
<div>
    <h2 class="titrePage">Les sites du quartier {{$quartier->quartier}}</h2>
    <table>
        <tr id="enteteTable">
            <td>Nom du site</td>
            <td>Description</td>
            <td>visuel</td>
        </tr>
        @foreach ($quartier->sites as $site )
            <tr>
                <td>{{$site->nom}}</td>
                <td>{{$site->description}}</td>
                <td><img src="{{asset('storage/'.$site->img)}}" alt="{{$site->img}}" class="imageSite"></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection