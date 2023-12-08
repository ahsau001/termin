let handlekurv = ""
let ps5 = "ps5, 6999kr"
let headset = "<class = 'produkt1'>headset, kr 999, </class><img src='img/headset.png' class='jsprodukter'>"
let keyboard = "<class = 'produkt1'>keyboard, kr 1199, </class><img src='img/keyboard.png' class='jsprodukter'>"
let mus = "<class = 'produkt1'>mus, kr 1099,</class><img src='img/mus.png' class='jsprodukter'>"

function kjøpHeadset() {
  handlekurv += headset
  localStorage.setItem("lagretHandlekurv", handlekurv)
}

//let handlekurv = ""
function kjøpKeyboard() {
  handlekurv += keyboard
  localStorage.setItem("lagretHandlekurv", handlekurv)

}

//let handlekurv = ""
function kjøpMus() {
  handlekurv += mus
  localStorage.setItem("lagretHandlekurv", handlekurv)

}

function showCart() {
  document.getElementById("cart").innerHTML = localStorage.lagretHandlekurv;
}

//Funksjonen under erstatter innholdet i cartVar med en tom verdi. "ShowCart()" aktiverer funksjonen på linje 36 igjen.
//for å hvise frem carten uten noen knapper så skriver vi en atribut i body tagen på slik måte: <body onload="showCart()"
function emptyCart() {
  handlekurv = "";
  localStorage.setItem("lagretHandlekurv", handlekurv)
  showCart()
}
function kjøpPs5(){
  handlekurv += ps5
  localStorage.setItem("lagertHandlekurv", handlekurv)
}
