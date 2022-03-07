<?php 
  include_once 'header.php';
?>
        
        <section class="signup-form">
        <h2>sign up</h2>
        <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="name" placeholder="Full name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="uid" placeholder="Username">
          <input type="text" name="pwd" placeholder="Password">
          <input type="text" name="repeatpwd" placeholder="Reapeat password">
          <button type="submit" name="submit">sign Up</button>
        
        </form>
       </div>
      </section>

        
<?php 
      include_once 'footer.php';
?>