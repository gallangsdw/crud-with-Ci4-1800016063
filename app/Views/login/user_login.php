<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style>
      body {
         margin: 0;
         padding: 0;
         font-family: sans-serif;
         background: linear-gradient(to right, #b92b27, #1565c0)
      }

      .box {
         width: 500px;
         padding: 40px;
         position: absolute;
         top: 50%;
         left: 50%;
         background: #191919;
         ;
         text-align: center;
         transition: 0.25s;
         margin-top: 100px
      }

      .box input[type="text"],
      .box input[type="password"] {
         border: 0;
         background: none;
         display: block;
         margin: 20px auto;
         text-align: center;
         border: 2px solid #3498db;
         padding: 10px 10px;
         width: 250px;
         outline: none;
         color: white;
         border-radius: 24px;
         transition: 0.25s
      }

      .box h1 {
         color: white;
         text-transform: uppercase;
         font-weight: 500
      }

      .box input[type="text"]:focus,
      .box input[type="password"]:focus {
         width: 300px;
         border-color: #2ecc71
      }

      .box input[type="submit"] {
         border: 0;
         background: none;
         display: block;
         margin: 20px auto;
         text-align: center;
         border: 2px solid #2ecc71;
         padding: 14px 40px;
         outline: none;
         color: white;
         border-radius: 24px;
         transition: 0.25s;
         cursor: pointer
      }

      .box input[type="submit"]:hover {
         background: #2ecc71
      }

      .forgot {
         text-decoration: underline
      }

      ul.social-network {
         list-style: none;
         display: inline;
         margin-left: 0 !important;
         padding: 0
      }

      ul.social-network li {
         display: inline;
         margin: 0 5px
      }

      .social-network a.icoFacebook:hover {
         background-color: #3B5998
      }

      .social-network a.icoTwitter:hover {
         background-color: #33ccff
      }

      .social-network a.icoGoogle:hover {
         background-color: #BD3518
      }

      .social-network a.icoFacebook:hover i,
      .social-network a.icoTwitter:hover i,
      .social-network a.icoGoogle:hover i {
         color: #fff
      }

      a.socialIcon:hover,
      .socialHoverClass {
         color: #44BCDD
      }

      .social-circle li a {
         display: inline-block;
         position: relative;
         margin: 0 auto 0 auto;
         border-radius: 50%;
         text-align: center;
         width: 50px;
         height: 50px;
         font-size: 20px
      }

      .social-circle li i {
         margin: 0;
         line-height: 50px;
         text-align: center
      }

      .social-circle li a:hover i,
      .triggeredHover {
         transform: rotate(360deg);
         transition: all 0.2s
      }

      .social-circle i {
         color: #fff;
         transition: all 0.8s;
         transition: all 0.8s
      }
   </style>

   <title>Hello, world!</title>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="card">
               <form class="box">
                  <h1>Login</h1>
                  <p class="text-muted"> Please enter your email and password!</p>
                  <input type="text" name="" placeholder="Email">
                  <input type="password" name="" placeholder="Password"> <a class="forgot text-muted" href="#">Forgot password?</a>
                  <input type="submit" value="Login">
                  <div class="col-md-12">
                     <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                     </ul>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>