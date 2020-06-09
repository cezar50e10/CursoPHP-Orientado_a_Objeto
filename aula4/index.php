
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>aula - 04</title>
</head>
    <body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta(0.5);
        //$c1->setCor("Azul");
        //$c1->setModelo("ZIC");
        //$c1->setPonta(0.5);
       // $c1->tampada = true;
        
       // $c1->tampar();
        
        $c1->rabiscar();
        
        echo "minha caneta tem é a ponta {$c1->getPonta()}---{$c1->getTampada()}";
	?>
	</pre>
    </body>
</html>