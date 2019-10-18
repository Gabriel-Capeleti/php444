<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Comissões</title>
</head>
<body>
    <h1>Calcula a Comissão dos Vendedores</h1>
    <hr>
    
    <form method="GET">
        
        Nome:
        <br>
        <input type="text" name="txtnome" > <br>
        <br>

        Salario Fixo:
        <br>
        <input type="text" name="txtsalfixo"> <br>
        <br>
    
        Total Vendido:
        <br>
        <input type="text" name="txtvendas"> <br>
        <br>

        % de Comissão:
        <br>
        <input type="text" name="txtcomissao"> <br>
        <br>
        
        <input type="submit" name="btncalcular" value="Calcular" >
        
    </form>

    <?php
    
        if ($_GET) {
        
            //Rcebe dados do formulário
            $nome=$_GET['txtnome'];
            $salfixo=$_GET['txtsalfixo'];
            $vendas=$_GET['txtvendas'];
            $comissao=$_GET['txtcomissao'];

            // Calcula Comissao
            $vrcomissao = ($vendas*$comissao)/100;
            $saltotal = $salfixo+$vrcomissao;

            // Mostrando Resultado
            
            echo "<br> <hr> O Salário Total de $nome é $saltotal";
            echo "<hr>";
           
            if ($comissao<=10000) {
                echo "<br> <hr> A comissao é de 10% ";
            }else {
                echo "<br> <hr> A comissao é de 5%";
            }
        
        }
    ?>

</body>
</html>
