
<?php

require_once __DIR__ . './../controllers/modif.php';

ob_start();
?>

<form method="post" action="<?= htmlspecialchars($_SERVER['REQUEST_URI'])?>">
  <label for="currentpseudo">Current First Name:</label>
  <input type="text" id="currentpseudo" name="currentpseudo" placeholder="Current pseudo..." required><br><br>
  <label for="newpseudo">New First Name:</label>
  <input type="text" id="newpseudo" name="newpseudo" placeholder="New pseudo..." required><br><br>
  <input type="submit" value="Submit">

</form>
  <div>
<?php
$content = ob_get_clean();
require_once __DIR__ . './../templates/mainTemp.php';