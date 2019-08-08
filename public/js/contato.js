
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


        let formulariocontato = document.querySelector("#form-parceiro");
        let variaveiscontato = document.querySelectorAll(".parceiro");
        let destinarcontato = document.querySelector("btn-parceiro");


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
                document.getElementById('formul-parceiro').submit();
            }

        }
