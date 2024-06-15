<style>
    #groupe{
        margin-top: 150;
    }
    #champ0{
        width: 260px;
        border: 0px ;
        border-radius: 10px;
        height: 40px;
        outline: none
    }
    
    #pwd{
        width: 260px;
        border: 0px;
        border-radius: 10px;
        height: 40px;
        outline: none
    }
    .fa-regular {
        font-size: 24px;
        color: #3572EF;
        text-align: center;
        justify-content: center;

    }
    .fa-solid{
        font-size: 24px;
        color: #3572EF;
        text-align: center;
        justify-content: center;
    }
    .entre{
        display: flex;
        justify-content: center;
        text-align: center;
        border: 2px solid  #3572EF;
        border-radius: 10px;
    }
</style>
@extends('layout')
@section('content')
<div id="incrivezvous">Authentifiez-vous et porfitez de bon coins de Ouaga</div>
<div id="groupe">
    <form action="">
        <table>
            <tr>
                <td class="td" ><div class="entre"><i class="fa-solid fa-user"></i><input type="email" class="champ" id="champ0" placeholder="User name"></div></td>
            </tr>
            <tr>
                <td><div class="entre"><i class="fa-solid fa-key"></i><input type="password" name="pwd" id="pwd" class="champ"  placeholder="PassWord"></div></td>
            </tr>
            <tr>
                <td><input type="submit" value="Valider" id="submit"></td>
            </tr>
                <td>Vous n'avez pas de compte? <a href="/signIn">S'inscrire</a></td>
            </tr>
        </table>
        </form>
</div>
@endsection