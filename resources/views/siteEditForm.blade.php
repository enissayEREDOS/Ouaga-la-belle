@extends('layout')
@section('content')
<form id="editsiteForm" method="post" class="formulaire" action="" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="site_id" id="site_id">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{$site->nom}}" required>
    </div>
    <div class="form-group">
        <label for="lat">Latitude</label>
        <input type="number" class="form-control" id="lat" name="lat" value="{{$site->latitude}}" required>
    </div>
    <div class="form-group">
        <label for="lng">Longitude</label>
        <input type="number" class="form-control" id="lng" name="lng"  value="{{$site->longitude}}" required>
    </div>
    <div class="form-group">
        <label for="date_creation">Date de création</label>
        <input type="date" class="form-control" id="date_creation" name="date_creation" value="{{$site->date_creation}}"  required>
    </div>
    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control-desc" id="descrption" name="desc" cols="60" rows="10" value="{{$site->description}}" required></textarea>
    </div>
    <div class="form-group">
        <label for="categorie_id">Catégorie</label>
        <select class="form-control" id="categorie_id" name="categorie_id" required>
            @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}" {{ $site->quartier_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom_cat }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quartier_id">Quartier</label>
        <select class="form-control" id="quartier_id" name="quartier_id" required>
            @foreach($quartiers as $quartier)
                <option value="{{ $quartier->id }}" {{ $site->quartier_id == $quartier->id ? 'selected' : '' }}>{{ $quartier->quartier }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quartier_id">Image principale</label>
        <input type="file" name="img" id="img" class="form-control">
    </div>
  <div> <input type="submit" value="Valider" class="btn" id="valider"> <a href="/dashbord/sites"><input type="button" value="Annuler" class="btn" id="annuler"></a></div>
</form>
@endsection