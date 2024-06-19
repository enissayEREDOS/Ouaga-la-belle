@extends('layout')
@section('content')
    <div class="inscrivezvous" style="text-align: center;
    font-size: 14px;
    font-weight: bold;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #3572EF;
    width: 400px;
    padding: 5px 0px 5px 0px ;">Inscrivez-vous et profitez des meilleurs coins de Ouaga!</div>
    <form method="post" action="/signIn" id="signInForm">
        @csrf
        <table>
            <input type="hidden" name="estExistant" value="1">
            <tr>
                <td>
                    <input type="email" name="email" id="email" placeholder="totojoe@gmail.com" class="champ"
                        value="{{ old('email', $user->email) }}" style="border: 2px red solid;">
                </td>
                <td id="emailError" style="color: red; font-size: 10px; font-family: Arial, Helvetica, sans-serif">
                    Le mail que vous avez entrer existe déjà veuillez choisir un autre
                </td>
            </tr>
            <tr>
                <td>
                    <input type="tel" name="tel" id="tel" placeholder="00226 70 00 00 00" class="champ"
                        value="{{ old('telephone', $user->telephone) }}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="nom" id="nom" placeholder="Toto" class="champ"
                        value="{{ old('nom', $user->nom) }}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="prenom" id="prenom" placeholder="Tata" class="champ"
                        value="{{ old('prenom', $user->prenom) }}">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Sexe</p>
                </td>
                <td>
                    <input type="radio" name="sexe" id="M" value="M"
                        {{ $user->sexe == 'M' ? 'checked' : '' }}>Masculin
                    <input type="radio" name="sexe" id="F" value="F"
                        {{ $user->sexe == 'F' ? 'checked' : '' }}>Féminin
                    <input type="radio" name="sexe" id="A" value="A"
                        {{ $user->sexe == 'A' ? 'checked' : '' }}>Autre
                </td>
            </tr>
            <tr>
                <td>
                    <input type="date" name="date_nais" id="date_nais" placeholder="31/12/2001" class="champ"
                        value="{{ old('date_nais', $user->date_nais) }}">
                </td>
            </tr>
            <tr>
                <td>
                    <select name="pays" id="pays">
                        <option value="">Nationalité</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pwd" id="pwd" placeholder="Entrez votre mot de passe"
                        class="champ">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pwdconf" id="pwdconf" placeholder="Confirmez votre mot de passe"
                        class="champ">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="condition" id="condition" value="oui">
                    <p>Vous acceptez les conditions générales d'utilisation</p>
                </td>
            </tr>
            <tr>
                <td id="btn">
                    <input type="submit" value="Valider" id="submit">
                </td>
            </tr>
            <tr>
                <td>Déjà inscrit(e)? <a href="logIn">S'identifier</a></td>
            </tr>
        </table>

    </form>
    <script src="{{ asset('js/verif.js') }}"></script>
@endsection
