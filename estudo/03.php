<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// exclui as variaveis das sessoes
session_unset();

// exclui todas a sessao
session_destroy();

// exlcui somente a selecionadasssssssss
unset($_SESSION['']);
?>

</body>
</html>