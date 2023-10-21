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
      2022 Copyright, All Rights Reserved
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="tex/javascript" src="./assets/css/slick/slick/slick.min.js"></script>
<script src="./assets/js/script.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
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

    let dat = new Date();

    $("#date").html(dat.getFullYear());
  });
</script>
</body>

</html>