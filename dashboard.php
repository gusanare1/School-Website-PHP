<?php 
@session_start();

?>
<h1> Bienvenido <?php echo "".$_SESSION['Mobile_number'];?> </h1>

<h3><a href="index.php?option=cerrar"> Cerrar </a></h3>
