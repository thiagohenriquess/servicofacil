<?php
  include 'php/header.php';
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';
?>
<form action="solicitacao.php" method="post">
  <select name="tipo_servico" id="tipo_servico">
  <?php
    $table = "tipo_servico";
    $fields = "nome";

    $verifica = DBRead($table, null, $fields);
    sort($verifica);

    foreach ($verifica as $key => $array) {
      foreach ($array as $key2 => $value) {
        echo "<option value='{$value}'>{$value}</option><br>";
      }
    }
    ?>
  </select>
  <input type="submit" value="Entrar" name="entrar" id="entrar">

</form>
<?php
  include 'php/footer.php';
?>