<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="upstate.css">
  
  <script src="upstate.js"></script>
  
</head>
<body>
  <div class="hero">
    <img class="logo" src="https://i.imgur.com/SN2JZ64.png">
    <h1 class="head">Web, branding & design for your business<h1>
      
      <button id="getstarted" onclick="" type="button">Get Started</button>
      <p>
      <input onclick="smoothScroll(document.getElementById('brand'))" id="learnmore" type=image src="https://i.imgur.com/n2yjZ60.png">
             </p>
<form action="form.php" method="post">
<p>
      <input class="fields" type="text" placeholder="Name*" name="uname" required>
      </p>
      <input class="fields" type="text" placeholder="Email*" name="psw" required>
<p>
      <button class="info" type="submit">Request Info</button>
      </p>
</form>
  </div>
  
      
           <div id="myModal" class="modal">
        <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p class="conthead">Contact Us</p>
    
    <div class="container">
      <p>
        <form action="form.php" method="post">
      <input class="fields" value="<?php echo $name;?>" type="text" placeholder="Name*" name="name" required>
      </p>
      <input class="fields" value="<?php echo $email;?>" type="text" placeholder="Email*" name="email" required>
<p>
      <button class="info" name="submit" type="submit">Request Info</button>
  </form>
    </div>
  </div>
             </div>
      
      
  <div id="brand">
    
  </div>
  
</body>
</html>
