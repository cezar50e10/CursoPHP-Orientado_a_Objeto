
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>aula - 02</title>
</head>
    <body>
    <p></p>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;
        
        $c1->rabiscar();
        
        //var_dump($c1);
	?>
    </body>
</html>