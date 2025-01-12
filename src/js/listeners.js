var icons=document.querySelectorAll("i.icon-password") ;
var check= {} ;
const register=document.forms["register"] ;
const login=document.forms["login"] ;

if(register) {
    var firstname=register["firstname"] ;
    var  lastname=register["lastname"] ;
    var  adresse=register["adresse"] ;
    var  confirmPassword=register["confirm_password"] ;
}
// console.log(confirmPassword);
const email=document.forms[0]["email"] ;
const password=document.forms[0]["password"] ;

// Les fonctions de gestionnaire d'abonnement 

var listernerFunction={
    toggleInputType:(ev)=>{
        var i=ev.target ;
        i.classList.toggle("fa-eye") ;
        var input=i.parentNode.children[0] ;
        if (input && input.type === "password") {
            input.type="text" ;
        }else if (input) {
            input.type="password" ;
        }
    },
    checkFirstname:(ev)=>{
        let input=ev.target ;
        let content=input.value.trim();
        var error="";
        input.style.borderBottom="2px solid green" ;
        const errorFirstname=document.querySelector(".form-error.error-firstname") ;
        errorFirstname.innerHTML='' ;
        if (!content) {
            error="Your firstname must not be empty" ;
        }else if (!(/^[a-z ]{2,20}$/i.test(content))) {
            error="You shouldn't use symbole."
        }
        
        if (error) {
            errorFirstname.innerHTML=error ;
            input.style.borderBottom="2px solid red" ;
            check.firstname=false ;
        }else{
            check.firstname=true ;
        }
        setButton() ;
    },
    checkLastname:(ev)=>{
        let input=ev.target ;
        let content=input.value.trim();
        var error="";
        input.style.borderBottom="2px solid green" ;
        const errorLastname=document.querySelector(".form-error.error-lastname") ;
        errorLastname.innerHTML='' ;
        if (!content) {
            error="Your lastname must not be empty" ;
        }else if (!(/^[a-z ]{2,20}$/i.test(content))) {
            error="You shouldn't use symboles."
        }
        
        if (error) {
            errorLastname.innerHTML=error ;
            input.style.borderBottom="2px solid red" ;
            check.lastname=false ;
        }else{
            check.lastname=true ;
        }
        setButton() ;
    },
    checkAdresse:(ev)=>{
        let input=ev.target ;
        let content=input.value.trim();
        var error="";
        input.style.borderBottom="2px solid green" ;
        const errorAdresse=document.querySelector(".form-error.error-adresse") ;
        errorAdresse.innerHTML='' ;
        if (!content) {
            error="Your lastname must not be empty" ;
        }else if (!(/^[a-z \d]{2,20}$/i.test(content))) {
            error="You shouldn't use symboles."
        }
        
        if (error) {
            errorAdresse.innerHTML=error ;
            input.style.borderBottom="2px solid red" ;
            check.adresse=false ;
        }else{
            check.adresse=true ;
        }
        setButton() ;
    },
    checkEmail:(ev)=>{
        let input=ev.target ;
        let content=input.value.trim();
        var error="";
        input.style.borderBottom="2px solid green" ;
        document.querySelector(".form-error.error-email").innerHTML='';
        if (!content) {
            error="Your lastname must not be empty" ;
        }else if (!(/^[a-z0-9._-]{2,20}@[a-z0-9_-]{2,8}\.[a-z]{2,8}$/.test(content))) {
            error="You shouldn't use symbole or space."
        }
        
        if (error) {
            document.querySelector(".form-error.error-email").innerHTML=error ;
            input.style.borderBottom="2px solid red" ;
            check.email=false ;
        }else{
            check.email=true
        }
        setButton() ;
    },
    checkPassword:(ev)=>{
        let input=ev.target ;
        let content=input.value.trim();
        var regPassword= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/ ;
        var error="";
        input.style.borderBottom="2px solid green" ;
        document.querySelector(".form-error.error-password").innerHTML='';
        if (!content) {
            error="Your password must not be empty" ;
        }else if (!regPassword.test(content)){
            error="Your password must have at least on capitale letter, one special letter, one lowercase letter" ;
        }
        
        if (error) {
            document.querySelector(".form-error.error-password").innerHTML=error ;
            input.style.borderBottom="2px solid red" ;
            check.password=false ;
        }else{
            check.password=true ;
        }
        setButton() ;
    },
    checkConfirmPassword:(ev)=>{
        let input=ev.target ;
        let content=input.value.trim();
        let contentPassword=password.value ;
        var error="";
        input.style.borderBottom="2px solid gray" ;
        document.querySelector(".form-error.error-confirmPassword").innerHTML='';
        if (!content) {
            error="Your confirm password must not be empty" ;
        }else if (contentPassword !== content){
            error="Your confirm password doesn't match width your entered password" ;
        }
        
        if (error) {
            document.querySelector(".form-error.error-confirmPassword").innerHTML=error ;
            input.style.borderBottom="2px solid red" ;
            check.confirmPassword=false ;
        }else{
            check.confirmPassword=true ;
        }
        setButton() ;
    }
}

//les fonctions de verification de la validité du formulaire
var checkValidityForm=()=>{
    if (register) {
        if (Object.keys(check).length === 6) {
            for (const key in check) {
              if (check[key] === false) {
                 return false ;
              }
            }
            return true ;
        }else{
            return false ; 
        }
    }
    if (login) {
        if (Object.keys(check).length === 2) {
            for (const key in check) {
              if (check[key] === false) {
                 return false ;
              }
            }
            return true ;
        }else{
            return false ; 
        }
    }
}

var setButton=()=>{
    if (checkValidityForm()) {
        document.getElementById("btn-submit").disabled=false ;
        document.getElementById("btn-submit").style.cursor="pointer" ;
    }else{
        document.getElementById("btn-submit").disabled=true ;
        document.getElementById("btn-submit").style.cursor="not-allowed" ;
    }
}

//cette fonction permet de creer des abonnements
var setupListener=()=>{
    icons.forEach(icon => {
        icon.onclick=listernerFunction.toggleInputType ;
    });

    if (register) {
        firstname ? firstname.onkeyup=listernerFunction.checkFirstname : null ;
        lastname ? lastname.onkeyup=listernerFunction.checkLastname : null ;
        adresse ? adresse.onkeyup=listernerFunction.checkAdresse : null ;
        confirmPassword ? confirmPassword.onkeyup=listernerFunction.checkConfirmPassword : null ;
    }
    email ? email.onkeyup=listernerFunction.checkEmail : null ;
    password ? password.onkeyup=listernerFunction.checkPassword : null ;
}