<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoro - Entrar</title>
</head>
<body>
    <form method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="cargo">Cargo</label>
        <input type="text" name="cargo">
        <input type="submit" value="Entrar" name="acao">
    </form>
    <div>
        <a href="index.php">Voltar</a>
        <br/>
        <a href="cadastro.php">Não é um jogador?</a>
    </div>

    <?php
        if(isset($_POST['acao'])) {
            if(isset($_POST['nome']) || isset($_POST['cargo'])) {
                if(strlen($_POST['nome']) == 0) {
                    echo "<script> alert('Insira seu nome.') </script>";
                } else if(strlen($_POST['cargo']) == 0) {
                    echo "<script> alert('Insira seu cargo.') </script>";
                } else {

                }
            }
        }
    ?>
    
</body>
</html>