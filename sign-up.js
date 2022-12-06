function validation(event){

  event.preventDefault();
  let hasError = false;

  if(document.f.User.value==""){
    alert("entrez votre nom d'utilisateur!");
    document.f.User.focus();
    hasError = true;
  }
  if(document.f.Name.value==""){
    alert("entrez votre nom svp!");
    document.f.User.focus();
    hasError = true;
  }
  if(document.f.Email.value==""){
    alert("entrez votre email svp!");
    document.f.User.focus();
    hasError = true;
  }
  if(document.f.phone.value=="" ||  isNaN(document.f.phone.value) || document.f.phone.value.length !=8){
    alert("Vérifier votre numéro svp!");
    document.f.User.focus();
    hasError = true;
  }

  if(!hasError){
    document.f.submit();
  }
}
