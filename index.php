<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <title>Introdução ao PHP</title>
    <meta name='author' content='PhobosXD' />
    <meta name='description' content='Curso introdutório ao PHP' />
    <meta name='viewport' content='width=devide-width, initial-scale=1' />
</head>

<body>
    <h1>Formulário de inscrição</h1>

    <form action='script.php' method='post'>
        <p>
            Nome:
            <input type='text' name='name' />
        </p>

        <p>
            Idade:
            <input type='number' name='age' />
        </p>

        <?php
            $mensagemDeErro = isset($_SESSION['error-message']) ? $_SESSION['error-message'] : '';
            if (!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            } else {
                echo $_SESSION['sucess-message'];
            }
        ?>

        <p>
            <input type='submit' value='inscrever' />
        </p>
    </form>
</body>

</html>