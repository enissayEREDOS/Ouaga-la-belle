@extends('layout')
@section('content')
<form id="siteForm" method="post" class="formulaire" action="/dashbord/categories/store">
    @csrf
    <input type="hidden" name="site_id" id="site_id">
    <div class="form-group">
        <label for="nom">Nom de la catégoie</label>
        <input type="text" class="form-control" id="nom" name="nom_cat" required>
    </div>
    <div> <input type="submit" value="Valider" class="btn" id="valider"> <a href="/dashbord/categories"><input type="button" value="Annuler" class="btn" id="annuler"></a></div>
</form>
@endsection