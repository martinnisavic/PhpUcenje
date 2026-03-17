var regExUsername = /^[\S]{8,25}$/;
var regExPassword = /^[\S]{8,15}$/;
var regExTelephone =/^((\+381)6\d\s\d{2}\s\d{2}\s\d{3}|(06)\d\s\d{2}\s\d{2}\s\d{3}|(06)\d-\d{2}-\d{2}-\d{3})$/;
var regExEmail = /^[\S]{3,20}@(gmail|yahoo|outlook)\.com$/;
// //+38165 20 80 615
// 065 20 80 615
// 065-20-80-615
// (a|b|c) (ac|bc) [\d] [+381] \+
function proveraPodataka(event) {
    if (event) {
        event.preventDefault();
    }
  let email = document.getElementsByName("email")[0].value;
  let username = document.getElementsByName("username")[0].value;
  let password = document.getElementsByName("password")[0].value;
  let confirm_password = document.getElementsByName("password_confirm")[0].value;
  let telephone = document.getElementsByName("telefon")[0].value;
  let datum_rodjenja = document.getElementsByName("datum_rodjenja")[0].value;
  let pol = document.getElementsByName("pol")[0].value;
  let grad = document.getElementsByName("grad")[0].value;
  let newsletter = document.getElementsByName("newsletter")[0].value;
  let brojacGresaka=0;
  if (document.getElementsByName("regSubmit")[0].value) {
    brojacGresaka=0;
  if (!regExUsername.test(username)) {
    brojacGresaka++;
    document.getElementById("err_username").innerHTML =
      "<p>Greska kod unosa korisnickog imena</p>";
  }
  if (!regExEmail.test(email)) {
    brojacGresaka++;
    document.getElementById("err_email").innerHTML =
      "<p>Greska kod unosa mail-a</p>";
  }
  if (!regExPassword.test(password)) {
    brojacGresaka++;
    document.getElementById("err_password").innerHTML =
      "<p>Greska kod unosa sifre</p>";
  }
  if (confirm_password != password) {
    brojacGresaka++;
    document.getElementById("err_password_confirm").innerHTML =
      "<p>Greska kod unosa ponovljene sifre</p>";
  }
  if (!regExTelephone.test(telephone)) {
    brojacGresaka++;
    document.getElementById("err_telefon").innerHTML =
      "<p>Greska kod unosa telefona</p>";
  }
  if (!pol) {
    brojacGresaka++;
        document.getElementById("err_pol").innerHTML ="<p>Greska kod unosa pola</p>";
  }
  if (!grad) {
    brojacGresaka++;
        document.getElementById("err_grad").innerHTML ="<p>Greska kod unosa grada</p>";
  }
  if(!datum_rodjenja)
  {
    brojacGresaka++;
    document.getElementById('err_datum').innerHTML="<p>Unesite datum</p>";
  }
  else{
    let unet_datum=new Date(datum_rodjenja);
    let danasnjiDatum=new Date();
    let granica=new Date();
    granica.setFullYear(danasnjiDatum.getFullYear()-5);
    if (danasnjiDatum<unet_datum) {
        brojacGresaka++;
        document.getElementById('err_datum').innerHTML="<p>Nemate dovoljno godina</p>";
    }
  }
}
else if(document.getElementsByName("LogInSubmit")[0].value){
    brojacGresaka=0;
    if (!regExEmail.test(email)) {
    brojacGresaka++;
    document.getElementById("err_email").innerHTML =
      "<p>Greska kod unosa mail-a</p>";
  }
  if (!regExPassword.test(password)) {
    brojacGresaka++;
    document.getElementById("err_password").innerHTML =
      "<p>Greska kod unosa sifre</p>";
  }
}
  if (brojacGresaka==0) {
    return true;
  }
  else{
    return false;
  }
}
