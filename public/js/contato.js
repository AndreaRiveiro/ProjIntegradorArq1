
        let formulariocontato = document.querySelector("#form-contato");
        let variaveiscontato = document.querySelectorAll(".conts");
        let destinarcontato = document.querySelector("btn-conts");


        formulariocontato.onsubmit = function (event) {

            event.preventDefault();
            numeroEnviado = 0;
            for (input of variaveiscontato) {
                if (input.value == "") {
                    input.style.border = "1px solid red";
                    input.setAttribute("placeholder", "Preencha os dados corretamente");
                } else {
                    input.style.border = "1px solid #ccc";
                    numeroEnviado++;
                }
            }

            if (numeroEnviado == variaveiscontato.length) {
                document.getElementById('formul-contato').submit();
            }

        }


        let formularioParceiro = document.querySelector("#form-parceiro");
        let parceiroContato = document.querySelectorAll(".parceiro");
        let destinarParceiros = document.querySelector("btn-parceiro");


        formularioParceiro.onsubmit = function (event) {

            event.preventDefault();
            numerbsSent = 0;
            for (input of parceiroContato) {
                if (input.value == "") {
                    input.style.border = "1px solid red";
                    input.setAttribute("placeholder", "Preencha os dados corretamente");
                } else {
                    input.style.border = "1px solid #ccc";
                    numerbsSent++;
                }
            }

            if (numerbsSent == parceiroContato.length) {
                document.getElementById('formul-parceiro').submit();
            }

        }
