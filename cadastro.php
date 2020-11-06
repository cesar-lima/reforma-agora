<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <title>Reforma Agora</title>
</head>
<body>
    <div id="cabecalho">
        <img src="images/logo_com_letreiro.png"/>
    </div>
    <nav id="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="precos.html">Lista de preços</a></li>
            <li><a href="cadastro.html">Orçamento</a></li>       
        </ul>
    </nav>
    <?php
        $host           = 'localhost';
        $usuario        = 'root';
        $senhabd        = '';
        $bd             = 'reformaagora';

        $nome           = $_POST['tnome'];
        $email          = $_POST['tmail'];
        $dtNasc         = $_POST['tdate'];
        $telefone       = $_POST['ttel']; 
        $logradouro     = $_POST['trua'];
        $numero         = $_POST['tnum'];
        $estado         = $_POST['test']; 
        $cidade         = $_POST['tcidade'];
        $servico        = $_POST['tsoli'];
        
        $conexao = mysqli_connect($host,$usuario,$senhabd,$bd);

        if (!$conexao) {
            die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
        }

        $query1 = "INSERT INTO `orcamento` (`nome`,`email`,`dtNasc`,`telefone`,'logradouro','numero','estado','cidade','servico')
        VALUES ('$nome', '$email', '$dtNasc', '$telefone', '$logradouro', '$numero', '$estado', '$cidade', '$servico')";

        $return = mysqli_query($conexao, $query1);

        echo $return;

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

    ?>

    <a class="voltar" href="cadastro.html" >Voltar</a>
    <footer id="rodape">
        <p>copyright &copy; - 2020 by César Lima Correia</p>
        <p><a href="https://www.facebook.com/cesar.limacorreia.16" target="blank">Facebook</a> | <a href="https://www.instagram.com/cesinha.lc/" target="blank">Instagram</a> | <a href="https://github.com/cesar-lima" target="blank">Github</a></p> 
    </footer>
</body>
</html>
</body>
</html>