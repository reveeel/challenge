<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calcular Idade</title>
</head>
<body>
    <div> 
        <?php
            $name = $_GET['name'];
            $aa = $_GET['aa'];
            $an = $_GET['an'];

            $idade = $aa - $an;
        
            echo "{$name} sua idade é {$idade}"
        ?>
        <a href="index.html">Voltar </a>
    </div>
</body>
</html>