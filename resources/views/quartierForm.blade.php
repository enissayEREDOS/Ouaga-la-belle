@extends('layout')
@section('content')
<form id="quartierForm" method="post" class="formulaire" action="/dashbord/quartiers/store">
    @csrf
    <input type="hidden" name="site_id" id="quartier_id">
    <div class="form-group">
        <label for="nom">Nom du quartier</label>
        <input type="text" class="form-control" id="nom" name="quartier" required>
    </div>
    <div> <input type="submit" value="Valider" class="btn" id="valider"> <a href="/dashbord/quartiers"><input type="button" value="Annuler" class="btn" id="annuler"></a></div>
</form>
@endsection