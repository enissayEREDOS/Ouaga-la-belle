let btnValider=document.getElementById('submit');

let email = document.getElementById('email');
let tel = document.getElementById('tel');
let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let dateNais = document.getElementById('date_nais');
let pays = document.getElementById('pays');
let pwd = document.getElementById('pwd');
let pwdconf = document.getElementById('pwdconf');


email.addEventListener('input', function(e) {
    var valeur = e.target.value;
    if (validateEmail(valeur)) {
        e.target.style.borderColor = 'green';
    } else {
        e.target.style.borderColor = 'red';
    }
});

tel.addEventListener('input',function(e){
    var valeur = e.target.value;
    if (valeur.length <8) {
        e.target.style.borderColor = 'red';
    }else{
        e.target.style.borderColor = 'green';
    }
    });

nom.addEventListener('input', function(e){
    var valeur = e.target.value;
    if (valeur.length <2) {
        e.target.style.borderColor = 'red';
    }else{
        e.target.style.borderColor = 'green';
    }
});

// Validation du prénom
prenom.addEventListener('input', function(e){
    var valeur = e.target.value;
    if (valeur.length <2) {
        e.target.style.borderColor = 'red';
    }else{
        e.target.style.borderColor = 'green';
    }
});




// Validation du mot de passe
pwd.addEventListener('input',function(e){
    var valeur = e.target.value;
    if (valeur.length <6) {
        e.target.style.borderColor = 'red';
    }else{
        e.target.style.borderColor = 'green';
    }
});

pwdconf.addEventListener('input',function(e){
    var valeur = e.target.value;
    if (!estConformePwd(pwd.value,pwdconf.value)) {
        e.target.style.borderColor = 'red';
    }else{
        e.target.style.borderColor = 'green';
    }
});

// Validation des conditions générales

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}

//Verification de conformité de mot de passe
function estConformePwd(pwd,pwdconf){
    if(pwd==pwdconf){
        return true;
    }
}


//document.getElementById('signInForm').addEventListener('submit',function(e){   
btnValider.onclick=function(e){
    const val_email=email.value;
    const val_tel=tel.value;
    const val_nom=nom.value;
    const val_prenom=prenom.value;
    const val_date_nais=date_nais.value;
    const val_sexe=document.querySelector('input[name="sexe"]:checked');
    const val_pays=pays.value;
    const val_pwd=pwd.value;
    const val_pwd_conf=pwdconf.value;
    const val_cond=document.getElementById('condition').checked;
    if(validateEmail(val_email) && val_nom.length>=2 && val_prenom.length>=2
        && val_pwd.length>=6 && val_tel.length>=8 ){
            if(estConformePwd(val_pwd,val_pwd_conf)){
                pwdconf.style.borderColor='green';
                if(val_cond){
                    alert('Formulaire soumis avec succès !');
                    this.submit();
                }else{
                    e.preventDefault();
                    alert('Veuillez acceptez les conditions d\'utilisation');
                    return false
                }    
            }else{
                e.preventDefault();
                pwdconf.style.borderColor='red';
                return false
            }
        }else{
            e.preventDefault();
            alert(validateEmail(val_email));
            alert('Les informations que vous avez saisie sont incorrectes');
            return false
        }
};

let estExustant=document.getElementById('estExistant');
if(estExustant){
    email.style.borderColor="red";
}

