<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
  });
   </script>
   <style>
   .image_size{
    width: 27%;
   }
   .mini_image{
    width: 5%;
    margin-right: 5px;
   }
   .description{
    display: inline-block;
    vertical-align: top;
    margin-left: 50px;
    width: 500px;
   }
   .mini_image2{
    width: 10%;
    margin-right: 20px;
   }
   </style>

   </head>
<body class='container'>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PlaceHolder eCommerce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="collapsible.html">Shopping Cart(40)</a></li>
      </ul>
    </div>
  </nav>
  <a href="/index">Go Back</a>
  <h3>Product</h3>
  <ul>
    <li><img class='image_size' src="../assets/images/image1.jpg"><p class='description'>All I want is to be a monkey of moderate intelligence who wears a suit&hellip; that's why I'm transferring to business school! Kif, I have mated with a woman. Inform the men. We're also Santa Claus! Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. Is today's hectic lifestyle making you tense and impatient? No! Don't jump!</p></li>
    <li><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"></li>
  </ul>

  <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Quantity</option>
      <option value="1">$19.99</option>
      <option value="2">$29.99</option>
      <option value="3">$39.99</option>
    </select>
    <label>Materialize Select</label>
  </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Buy!
    <i class="material-icons">send</i>
  </button>
  <h4>Similar Items</h4>
  <ul>
    <li><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"></li>
  </ul>

</body>
</html>