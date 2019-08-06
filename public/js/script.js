var toggle = document.getElementById('toggle');
var show = document.getElementById('menuResponsivo');

toggle.addEventListener('click', function(){
    this.classList.toggle("close");
    show.classList.toggle("show");
})

// jquery

$(document).ready(function() {
    $("#carousel-card").on("slide.bs.carousel", function(e) {

      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $(".card-carousel-item").length;

      if (idx >= totalItems - (itemsPerSlide)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $(".card-carousel-item")
              .eq(i)
              .appendTo(".card-carousel-inner");
          } else {
            $(".card-carousel-item")
              .eq(0)
              .appendTo($(this).find(".card-carousel-inner"));
          }
        }
      }
    });
  });
