
    @extends('layout')
    @section('content')
    <div id="incrivezvous">Inscrivez-vous et profitez des meilleurs coins de Ouaga!</div>
    <form action="">
        <table>
            <tr><td><input type="email" name="email" id="email" placeholder="totojoe@gmail.com" class="champ"></td></tr>
            <tr><td><input type="tel" name="tel" id="tel" placeholder="00226 70 00 00 00" class="champ"></td></tr>
            <tr><td><input type="text" name="nom" id="nom" placeholder="Toto" class="champ"></td></tr>
            <tr><td><input type="text" name="prenom" id="prenom" placeholder="Joe" class="champ"></td></tr>
            <tr>
                <td><p>Sexe</p></td>
                <td>
                <input type="radio" name="sexe" id="M">Masculin
                <input type="radio" name="sexe" id="F">Feminin
                <input type="radio" name="sexe" id="F">Autre
            </td></tr>
            <tr><td><input type="date" name="dnais" id="dnais" placeholder="31/12/2001" class="champ"></td></tr>
            <tr><td><select name="pays" id="pays" ><option value="">Nationalité</option></select></td></tr>
            <tr>
                <td><input type="password" name="pwd" id="pwd" placeholder="Entrez votre mot de passe" class="champ"></td>
            </tr>
            <tr>
                <td><input type="password" name="pwdconf" id="pwdconf" placeholder="Confirmez votre mot de passe" class="champ"></td>
            </tr>
            <tr><td><input type="checkbox" name="condition" id="condition"><p>Vous acceptez les conditions gérérales d'utilisation</p></td></tr>
            <tr><td id="btn"><input type="submit" value="Valider" id="submit"></td></tr>
            <tr><td>Déjà inscrit(e)? <a href="logIn">S'identifier</a></td></tr>
        </table>
    </form>
    @endsection