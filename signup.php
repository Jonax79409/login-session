<?php require "header.php"; ?>
<main>
  <div>
    <section>
      <h1>Signup</h1>
      <?php
        if(isset($_GET['error'])){
          if($_GET['error']=="emptyfileds"){
            echo "<p>Fill in all fields!</p>";
          }
        }
        else if($_GET['signup']=="success"){

          echo "Signup successfull";
          
        }
      ?>
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="password">
        <input type="password" name="pwd-repeat" placeholder="password">
        <button type="submit" name="signup-submit">Signup</button>
      </form>
    </section>
  </div>
</main>

<?php require "footer.php"
?>
