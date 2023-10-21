var firstTab = document.getElementById('tab-section-first');
var secondTab = document.getElementById('tab-section-second');

firstTab.addEventListener('click', function(){
    
    var firstDiv = document.getElementById('first-tab-items');
    var secondDiv = document.getElementById('second-tab-items');  
   
    firstDiv.style.display = "block";
    secondDiv.style.display = "none";
    
})

secondTab.addEventListener('click', function(){
    
    var firstDiv = document.getElementById('first-tab-items');
    var secondDiv = document.getElementById('second-tab-items');
   
    secondDiv.style.display = "block";
    firstDiv.style.display = "none";
})

// Disable inspect element
// $(document).bind("contextmenu",function(e) {
//     e.preventDefault();
//   });
//   $(document).keydown(function(e){
//     if(e.which === 123){
//       return false;
//   }
//   });

const sr = ScrollReveal({
    origin: 'bottom',
    distance: '30px',
    duration: 1500,
    reset: true
});
console.log(sr);
sr.reveal(`.animate__fadeInUp, .home-section`, {
    interval: 200
})
  $(function() {
   


    let dat = new Date();
    $("#date").html(dat.getFullYear());
    
    $(".slider").not('.slick-initialized').slick({

      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]

    });

    
  });
