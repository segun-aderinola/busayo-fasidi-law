<footer class="animate__animated animate__bounce container-fluid body-dark text-white bottom-0">
  <div class="container">
    <div class="row">
      <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
        <img src="./assets/images/logo.svg" class="img-fluid" height="200" width="200" alt="logo" />

        <div class="pt-3">
          The first step towards making your American dream true is getting all your legal immigration processes in order. You don't have to go through this journey alone, as Olubusayo Fasidi PC is here to catalyze your success.
        </div>
      </div>
      <div class="col-md-4 d-flex justify-content-center align-items-center">
        <ul>
          <li><a href="#" class="active"> Quick Links </a></li>
          <li class=""><a href="#">About us</a></li>
          <li class=""><a href="#">Contact us</a></li>
          <li class=""><a href="#">About us</a></li>
          <li class=""><a href="#">Terms and Conditions</a></li>
          <li class=""><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-4 parent">
        <div class="d-flex gap-3 content">
          <div>
            <a href="#">
              <img src="./assets/images/Group 837.png" class="img-fluid" height="20" width="20" alt="twitter" />
            </a>
          </div>
          <div>
            <a href="#">
              <img src="./assets/images/Group 838.png" class="img-fluid" height="20" width="20" alt="instagram" />
            </a>
          </div>
          <div>
            <a href="#">
              <img src="./assets/images/Group 839.png" class="img-fluid" height="20" width="20" alt="facebook" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-dark border-top border-warning text-center p-4 fw-bold text-white fs-6">
      <span id="date"></span> Copyright, All Rights Reserved
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
AOS.init({
    duration: 1500,
    once: true,
  });

  $(function() {
    $('#tab-section-first').click(function() {
       $('#first-tab-items').css('display', 'block');
       $('#second-tab-items').css('display', 'none');
       $('#tab-section-second').removeClass('border-warning text-warning').addClass('border-white text-white');
       $(this).removeClass('border-white text-white').addClass('border-warning text-warning');
    });
    $('#tab-section-second').click(function() {
        $('#first-tab-items').css('display', 'none');
        $('#second-tab-items').css('display', 'block');
        $('#tab-section-first').removeClass('border-warning text-warning').addClass('border-white text-white');
       $(this).removeClass('border-white text-white').addClass('border-warning text-warning');
     });



    let dat = new Date();
    $("#date").html(dat.getFullYear());
    
    $(".slider").slick({

      dots: true,
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
// Disable inspect element
// $(document).bind("contextmenu",function(e) {
//     e.preventDefault();
//   });
//   $(document).keydown(function(e){
//     if(e.which === 123){
//       return false;
//   }
//   });
</script>

</body>
</html>