<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/<?php echo $this->template
?>/css/template.css" type="text/css" />
</head>
<body>
<!-- Contenedor -->
<div id="contenedor">
<!-- Comienzo header -->
<div id="header">
<h1><a href="index.php"><?php echo $mainframe->getCfg('sitename');?></a></h1>
</div>
<!-- Fin header -->
<!-- Comienzo navegacion-->
<div id="navegacion">
<jdoc:include type="modules" name="user3" style="xhtml" />
</div>
<!-- Fin navegacion -->
<!-- Comienzo columna izquierda -->
<div id="izquierda">
<jdoc:include type="modules" name="left" style="xhtml" />
</div>
<!-- Fin columna izquierda -->
<!-- Comienzo contenido -->
<div id="contenido">
<jdoc:include type="component" />
</div>
<!-- Fin contenido -->
<!-- Comienzo columna derecha -->
<div id="derecha">
<jdoc:include type="modules" name="right" style="xhtml" />
</div>
<!-- Fin columna derecha -->
<!-- Comienzo footer -->
<div id="footer">
<!--Cargo el footer-->
<?php include_once('includes/footer.php'); ?>
</div>
<!-- Fin footer -->
</div>
<!-- Fin contenedor -->
</body>
</html>
