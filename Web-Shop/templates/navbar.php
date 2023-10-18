<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <ul class="navbar-nav col-3">
      <li class="nav-item">
        <?php if(isLoggedIn()):?>
          <a href="index.php/logout">Logout</a>
        <?php endif;?>
        <?php if(!isLoggedIn()):?>                    <!-- wenn eingelogt zeigt es logout an und man kann sich auslogen/ wenn man nicht eingelogt ist zeigt es login an und man wird zum login weitergeführt -->
          <a href="index.php/login">Login</a>
        <?php endif;?>
      </li>
    </ul>

  <a class="navbar-brand col-1" href='index.php'>Zur Startseite</a>


  <ul class="navbar-nav mr-auto">
    <div>
      <form method="POST">
        <select name="Auswahl">
          <option value="Vodka">Vodka</option>
          <option value="Whiskey">Whiskey</option>
          <option value="Gin">Gin</option>
        </select>
        <input name="submit" type="submit" value="Suchen">
        <?php
        $selectedValue = isset($_POST["submit"]);
        if ($selectedValue)
        {                                             #schaut was ausgewählt wurde und leitet einen dann auf die ausgewählte Kategorie Webseite weiter

          if ($_POST["Auswahl"] == "Vodka")
          {
              header("Location: index.php/VodkaSeite");
          }

          if ($_POST["Auswahl"] == "Whiskey")
          {
            header("Location: index.php/WhiskeySeite");
          }

          if ($_POST["Auswahl"] == "Gin")
          {
            header("Location: index.php/GinSeite");
          }
        }
         ?>
    </form>

    </div>
    <li class="nav-item">
      <a href="index.php/Warenkorb">Warenkorb (<?=$countCartItems ?>)</a>   <!-- führt zum Warenkorb und zeigt die Anzahl an -->
    </li>
  </ul>
</div>
</nav>
