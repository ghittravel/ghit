<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style media="screen">
      .sub-section {
        background: #00CBC8;
        color: white;
      }

      .sub-section.alt {
        padding: 80px 0;
      }

      .sub-section h1 {
        font-size: 42px;
      }

      .sub-section h3 {
        font-size: 26px;
        font-weight: 200;
      }

      #logo {
        height: 50px;
        margin: 30px;
        margin-bottom: 40px;
      }
      .screenshot {
        margin: 30px;
      }
      .desc {
        text-align: left;
      }
      #signup-input input[type="text"] {
        color: white;
        font-weight: 100;
        background: none;
        padding: 11px;
        border: 1px solid white;
        width: 400px;
        margin-top:12px;
      }
      #signup-input input[type="submit"] {
        background: white;
        font-weight: 100;
        color: #666;
        border: none;
        padding: 12px;
      }
      #signup-input input::placeholder {
        color: rgba(255,255,255,.5);
      }
      #email-error {
        display: block;
      }
      #wrapper h2 {
        margin-top: 30px;
        padding: 0;
        font-size: 20px;
      }
      @media (min-width: 768px) {
        .sub-section {
          height: 100vh;
        }
      }
      @media (max-width: 576px) {
        #signup-input input[type="text"] {
          width: 250px;
        }
        .screenshot {
          width: 240px;
          margin: 30px;

        }
        .screenshot-container {
          text-align: center;
        }
        .screenshot-text {
          text-align: center;
        }
        .screenshot-text h1 {
          font-size: 24px;
        }
        .screenshot-text h3 {
          font-size: 14px;
        }
        #logo {
          margin: auto;
          margin-top: 30px;
          margin-bottom: 30px;
        }
        #logo-container {
          text-align: center;
        }

      }
    </style>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Ghit: Travel as you like it</title>
  </head>
  <body>

    <div class="sub-section">
      <div class="container">
        <div class="row" id="logo-container">
          <img id="logo" src="assets/img/logo.png">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm col-md-8 desc align-self-center screenshot-text">
            <h1>Travel as you like it</h1>
            <h3>We’re redefining how you travel from the ground up. <br>Ghit helps you find local experiences you will love. <br>Our goal is to give you best time wherever you are.</h3>
            <div id="wrapper">
              <h2>Looking for early access?</h2>
          		<form id="signup" class="formee" action="subscribe.php" method="post">
          			<fieldset>
          				<div id="signup-input">
          					<input placeholder="Enter your email here" name="email" id="email" type="text" /><input class="right inputnew" type="submit" title="Send" value="Subscribe" />
          				</div>
          			</fieldset>
          		</form>
              <div id="response">
                <label id="email-error"></label>
              </div>
          	</div>
          </div>
          <div class="col-sm col-md-3 screenshot-container">
            <img data-aos="fade-up" class="screenshot img-fluid" src="assets/img/sc1.png">
          </div>
        </div>
      </div>
    </div>
    <div class="sub-section alt" style="background: white; color:#484A5E;">
      <div class="container">
        <div class="row">
          <div class="col-sm col-md-8 desc align-self-center screenshot-text">
            <h1>The Upwork for travelers</h1>
            <h3>Gives travelers instant access to local experiences <br>from people who love what they do.</h3>
          </div>
          <div class="col-sm col-md-3 screenshot-container">
            <img data-aos="fade-up" class="screenshot img-fluid" src="assets/img/sc3.png">
          </div>
        </div>
      </div>
    </div>
    <div class="sub-section alt" style="background: #4B59D7;">
      <div class="container">
        <div class="row">
          <div class="col-sm col-md-8 desc align-self-center screenshot-text">
            <h1>Proppers</h1>
            <h3>A Propper is your personal travel advisor who will help you with all your travel needs. You get recommendations based on their availability and rating.</h3>
          </div>
          <div class="col-sm col-md-3 screenshot-container">
            <img data-aos="fade-up" class="screenshot img-fluid" src="assets/img/sc2.png">
          </div>
        </div>
      </div>
    </div>
    <div class="sub-section alt" style="background: white; color:#484A5E;">
      <div class="container">
        <div class="row">
          <div class="col-sm col-md-8 desc align-self-center screenshot-text">
            <h1>Explore </h1>
            <h3>Looking for something to do? What? Where? When?<br> Explore thousands of experiences using predefined filters. </h3>
          </div>
          <div class="col-sm col-md-3 screenshot-container">
            <img data-aos="fade-up" class="screenshot img-fluid" src="assets/img/sc1.png">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" >
        <p class="col" style="text-align: center;">© 2019 ghit Ltd.</P>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
  		$(document).ready(function() {
  			// jQuery Validation
  			$("#signup").validate({
  				// if valid, post data via AJAX
  				submitHandler: function(form) {
            $.post("subscribe.php", { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val() }, function(data) {
  						$('#response').html(data);
  					});
  				},
  				// all fields are required
  				rules: {
  					email: {
  						required: true,
  						email: true
  					}
  				}
  			});
  		});
      AOS.init({
        duration: 1200
      });
  	</script>
  </body>
</html>
