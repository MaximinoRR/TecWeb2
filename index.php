<?php
echo "Funcionario : " . $_POST["tNome"];
echo "<br>Idade do funcionário: " . $_POST["tIdade"];
echo "<br>Possui filhos?: " . $_POST["possuiF"];

?>

<?php
      if (isset($_POST["btnenv"])) {
        if (isset($_POST["possuiF"])) {
        $temFilho = $_POST["possuiF"];
        $nomeFilho = $_POST["nFnome"];
        $idadeFilho = $_POST["ffIdade"];
        $gFilho = $_POST["sexo"];
           if ($temFilho == "Sim") {
                  print  (   $nomeFilho);
                  echo "Idade do filho: " print $idadeFilho;
                  echo "Gênero: " print $gFilho;
           } 
        }
      }
  ?>nFnome
