//  La recuperation des elements 
const form = document.querySelector("#form");
const Nickname = document.querySelector('#Nickname');
const Full_name = document.querySelector('#Full_name');
const Address = document.querySelector('#Address');
const Email = document.querySelector('#Email');
const phone = document.querySelector('#Télephone');
const CIN = document.querySelector('#CIN');
const occupation = document.getElementById('#occupation').selectedOptions;
const Password = document.getElementById('Password');
const Conferme_Password = document.getElementById('Conferme_Password');
// Evenements


const arr = [];
const gro = [];
array = []
form.addEventListener('submit',e=>{
    e.preventDefault();

    form_verify();
    // if(array.length === 0)
    

})
 
// Fonstions
function form_verify() {
   
    // Obtenir toutes les valeurs des inputs
    const NicknameValue = Nickname.value.trim();
    const Full_nameValue = Full_name.value.trim();
    const AddressValue = Address.value.trim();
    const EmailValue = Email.value.trim();
    const phoneValue = phone.value.trim();
    const CINValue = CIN.value.trim();
    const occupationValue = occupation.value.trim();
    const PasswordValue = Password.value.trim();
    const Conferme_PasswordValue = Conferme_Password.value.trim();

    // Nickname verify
    if (NicknameValue === "") {
        let message = "Email ne peut pas être vide";
        setError(email,message);
        array.push(false)
    }else if(!email_verify(NicknameValue)){
        let message = "Email non valide";
        setError(Nickname,message);
        array.push(false)
    }

    else{
        setSuccess(Nickname)
    }
    
    // Full_name verify
    if (Full_nameValue === "") {
        let message = "Nom ne peut pas être vide";
        setError(Full_name,message);
        array.push(false)
    }else if(Nom_verify(Full_name) === true){
        setSuccess(Full_name)
    }
    else{
        let message = "Nom non valide";
        setError(Full_name,message);
        array.push(false)
    }
    // Address confirm
    if (AddressValue === "") {
        let message = "Address ne peut pas être vide";
        setError(Address,message);
        array.push(false)
    }else if(Télephone_verify( Address) ){
        setSuccess(Address);
    }else{
        let message = "Address non valide";
        setError (Address,message);
        array.push(false)

    }
        // Email verify
    if (EmailValue === "") {
        let message = "Email ne peut pas être vide";
        setError(Email,message);
        array.push(false)

    }else if(Prénom_verify(Email) ){
        setSuccess(Email)
    }
    else{
        let message = "Email non valide";
        setError(Email,message);
        array.push(false)

        
       
    }
            // phone verify
            if (phoneValue === "") {
                let message = "phone ne peut pas être vide";
                setError(phone,message);
                array.push(false)
        
            }else if(Prénom_verify(phone) ){
                setSuccess(phone)
            }
            else{
                let message = "phone non valide";
                setError(phone,message);
                array.push(false)
        
                
               
            }
                    // CIN verify
    if (CINValue === "") {
        let message = "Email ne peut pas être vide";
        setError(CIN,message);
        array.push(false)

    }else if(Prénom_verify(CIN) ){
        setSuccess(CIN)
    }
    else{
        let message = "Email non valide";
        setError(CIN,message);
        array.push(false)

        
       
    }
            // occupation verify
            if (occupationValue === "") {
                let message = "Email ne peut pas être vide";
                setError(occupation,message);
                array.push(false)
        
            }else if(Prénom_verify(occupation) ){
                setSuccess(occupation)
            }
            else{
                let message = "Email non valide";
                setError(occupation,message);
                array.push(false)
        
                
               
            }
                        // Password verify
            if (PasswordValue === "") {
                let message = "Password ne peut pas être vide";
                setError(Password,message);
                array.push(false)
        
            }else if(Prénom_verify(Password) ){
                setSuccess(Password)
            }
            else{
                let message = "Email non valide";
                setError(Password,message);
                array.push(false)
        
                
               
            }
                       // Conferme_Password verify
                       if (Conferme_PasswordValue === "") {
                        let message = "Conferme_Password ne peut pas être vide";
                        setError(Conferme_Password,message);
                        array.push(false)
                
                    }else if(Prénom_verify(Conferme_Password) ){
                        setSuccess(Conferme_Password)
                    }
                    else{
                        let message = "Email non valide";
                        setError(Conferme_Password,message);
                        array.push(false)
                
                        
                       
                    } 
    document.querySelector('.error-gender').innerHTML = "Please you have to choose your gender"
    arr.push(false)
    array.push(false)


  
  if (clubs.length === 0) {
    document.querySelector('.error-clubs').innerHTML = "you have to select at least one item in clubs , can't be empty ";
    arr.push(false)
    array.push(false)


  } else if (clubs.length > 3) {
    document.querySelector('.error-clubs').innerHTML = "you have selected too many choices max is 3 ";
    arr.push(false)
    array.push(false)


  }else{
    document.querySelector('.error-clubs').innerHTML = "";

  }
  array = []
  if (array.length === 0 ){
    document.getElementById("form").submit();
  }
 
}

function setError(elem,message) {
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');

    // Ajout du message d'erreur
    small.innerText = message

    // Ajout de la classe error
    formControl.className = "form-control error";
}

function setSuccess(elem) {
    const formControl = elem.parentElement;
    formControl.className ='form-control success'
}
function Nom_verify(Nickname){
    return /(([aA-zZ])?){3,15}$/.test(Nickname.value);
};
function Prénom_verify(Full_name){
    return /[a-z]{3,15}$/.test(Full_name.value);

};


function email_verify(Email) {

    return /(\w+)?.?(\w+)?.?(\w+)?\d?@(gmail|hotmail|yahoo|ofppt).(com|org|net|ma)/.test(Email);
};
function Télephone_verify( phone) {
    return /(06|07|05)\d{8}/.test(phone.value);
};



Nickname.addEventListener('blur',function(e){
    if (Nickname.value === "") {
        let message = "Nom ne peut pas être vide";
        setError(Nickname,message);
    }else if(Nom_verify(Nickname) === true){
        setSuccess(Nickname)
    }
    else{
        let message = "Nom non valide";
        setError(Nickname,message);
    }
});
Full_name.addEventListener('blur',function(e){ 
    if (Full_name.Value === "") {
    let message = "Prénom ne peut pas être vide";
    setError(Full_name,message);
     }else if(Prénom_verify(Full_name) ){
     setSuccess(Full_name)
     }else{
     let message = "Prénom non valide";
     setError(Full_name,message);
    
   
}

});
Address.addEventListener('blur',function(e){
    if (Address.value === "") {
        let message = "Address ne peut pas être vide";
        setError(Address,message);
    }else if(email_verify(Address.Value) === false){
        let message = "Address non valide";
        setError(Address,message);
    }

    else{
        setSuccess(Address)
    }
    

});
Email.addEventListener('blur',function(e){
    if (Email.value=== "") {
        let message = "Télephone ne peut pas être vide";
        setError(Email,message);
    }else if(Télephone_verify( Email) ){
        setSuccess(Email);
    }else{
        let message = "Email non valide";
        setError (Email,message);
    }
});
