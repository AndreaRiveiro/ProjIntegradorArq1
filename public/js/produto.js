// const _boton = document.querySelector(".btnOpen");
// 	const _imagen = document.querySelector('.img-pop');

// 	$(document).ready(() => {
// 		var boton = $(".btnOpen");
// 		var imagen = $('.img-pop');
		
// 		boton.attr({
// 			"data-toggle": 'modal',
// 			"data-target": '.bs-example-modal-lg'
// 		});
// 		imagen.attr({
// 			"data-toggle": 'modal',
// 			"data-target": '.bs-example-modal-lg'
// 		});
		
// 		let cloneImage = (imgModal) => {
// 			var _ruta = _imagen.attributes.src.value;
// 			$(`.${imgModal}`).attr('src', _ruta);
// 		}
		
// 		boton.click(function() {
// 			cloneImage('modal img')
// 		});
// 		imagen.click(function() {
// 			cloneImage('modal img')
// 		});
// 	});

    // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption

var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

let itensModal = document.querySelectorAll(".itemModal");

for (let item of itensModal) {
    item.addEventListener("click",ativarModal)
}

function ativarModal(e){
    e.preventDefault();
    let img = this;
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}


// Get the <span> element that closes the modal
var span = document.querySelectorAll(".close")[1];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}