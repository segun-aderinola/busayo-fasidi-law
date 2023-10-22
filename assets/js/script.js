// AOS.init({
//     duration: 1500,
//     once: true,
//   });

//   $(function() {
//     $('#tab-section-first').click(function() {
//        $('#first-tab-items').css('display', 'block');
//        $('#second-tab-items').css('display', 'none');
//        $('#tab-section-second').removeClass('border-warning text-warning').addClass('border-white text-white');
//        $(this).removeClass('border-white text-white').addClass('border-warning text-warning');
//     });
//     $('#tab-section-second').click(function() {
//         $('#first-tab-items').css('display', 'none');
//         $('#second-tab-items').css('display', 'block');
//         $('#tab-section-first').removeClass('border-warning text-warning').addClass('border-white text-white');
//        $(this).removeClass('border-white text-white').addClass('border-warning text-warning');
//      });



//     let dat = new Date();
//     $("#date").html(dat.getFullYear());
    
//     $(".slider").slick({

//       dots: true,
//       infinite: false,
//       speed: 300,
//       slidesToShow: 4,
//       slidesToScroll: 4,
//       responsive: [{
//           breakpoint: 1024,
//           settings: {
//             slidesToShow: 3,
//             slidesToScroll: 3,
//             infinite: true,
//             dots: true
//           }
//         },
//         {
//           breakpoint: 600,
//           settings: {
//             slidesToShow: 2,
//             slidesToScroll: 2
//           }
//         },
//         {
//           breakpoint: 480,
//           settings: {
//             slidesToShow: 1,
//             slidesToScroll: 1
//           }
//         }

//       ]

//     });

    
//   });
// // Disable inspect element
// // $(document).bind("contextmenu",function(e) {
// //     e.preventDefault();
// //   });
// //   $(document).keydown(function(e){
// //     if(e.which === 123){
// //       return false;
// //   }
// //   });