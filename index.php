<?php
    session_start();
    include 'services/Session-message.php';
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
            $errorMessage = get_error_message();
            $sucessMessage = get_sucess_message();

            if ($errorMessage != null) {
                echo $errorMessage;
            } else if ($sucessMessage != null) {
                echo $sucessMessage;
            }

            delete_error_message();
            delete_sucess_message();
        ?>

        <p>
            <input type='submit' value='inscrever' />
        </p>
    </form>
</body>

</html>