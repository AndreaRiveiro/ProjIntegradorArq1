let formulariocadastro = document.querySelector("#form-cadastro");
let variaveiscadastro = document.querySelectorAll(".casds");
let destinarcadastro = document.querySelector("button");
// function valida(){
//     console.log(formulario);
// }

// document.getElementById('bt_submit').onclick = valida;

formulariocadastro.onsubmit = function (event) {
    
  event.preventDefault();
  numeroEnviado = 0;
  for (input of variaveiscadastro) {
    if (input.value == "") {
      input.style.border = "1px solid red";
      input.setAttribute("placeholder", "Preencha os dados corretamente");
    } else {
      input.style.border = "1px solid #ccc";
      numeroEnviado++;
    }
  }
  
  if (numeroEnviado == variaveiscadastro.length) {
    document.getElementById('form-cadastro').submit();
  }
  
}