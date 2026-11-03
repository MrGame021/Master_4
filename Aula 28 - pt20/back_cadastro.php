<?php
session_start();
// ----- CONEXÃO COM BANCO: -----

include_once('conect.php');

// ------------------------------
// ---------- VARIÁVEIS: ----------

$nome = @$_POST['nome']; //Nome
$senha = @$_POST['senha']; //senha
$senhaC = @$_POST['senha_Conf'];//confirmação de senha( == senha)
$date = @$_POST['date'];//nascimento
$email = @$_POST['email'];//email(unico)
$gen = @$_POST['genero'];//genero

// --------------------------------
// ----- MANTER INFORMAÇÕES: -----

$_SESSION['old'] = $_POST;

// -------------------------------
// ----- DATA E HORA: -----

$dataA = new DateTime();
$dataA->modify('-1 day');//exclui as ultimas 24h, ou seja, dia atual nn pode ser seu nascimento
$dataU = new DateTime($date);//nascimento do usuario

// ------------------------
$erros = [];
// ----- LINK COM BANCO: -----

$sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
$result = $conect->query($sql);

// ---------------------------
// ----- VERIFICAÇÃO DE ALGO ERRADO: -----
if(empty($nome)){  //Nome vazio
    $erros[] = "<script>alert('Você não colocou seu nome')</script>";
}
else if(strlen($nome) < 3){  //Nome menor que 3 carac.
    $erros[] = "<script>alert('Seu nome tem que ter, no mínimo, 3 caracteres')</script>";
}
else if(strlen($nome) > 100){  //Nome maior que 100 carac.
    $erros[] = "<script>alert('Seu nome não pode ter mais de 100 caracteres')</script>";
}
else{ 
    if(strlen($senha) <= 7){  //Senha menor que 8 carac.
        $erros[] = "<script>alert('Senha tem que ter um mínimo de 8 caracteres')</script>";
    }
    else if(strlen($senha) > 100){  //Senha maior que 100 carac.
        $erros[] = "<script>alert('Escolha uma senha menor que 100 caracteres')</script>";
    }
    else if($senha != $senhaC){  //Senha e senha confirmada igualadas
        $erros[] = "<script>alert('Senha ou confirmação de senha incorretos')</script>";
    }
    else{
        if(empty($date)){  //Data nasc. vazio
            $erros[] = "<script>alert('Você deve selecionar sua data de nascimento')</script>";
        }
        else if($dataA <= $dataU){  //data de hoje igual a data de nasc. || data futuro a atual
            $erros[] = "<script>alert('Você ainda não nasceu. Volte mais tarde')</script>";
        }
        else{
            if(empty($email)){  //Email vazio
                $erros[] = "<script>alert('Você precisa preencher o email')</script>";
            }
            else if(strlen($email) > 150){  //Email grande demais
                $erros[] = "<script>alert('Escolha um email com menos de 150 caracteres')</script>";
            }
            else if($result->num_rows > 0){
                $erros[] = "<script>alert('Este email já foi cadastrado anteriormente. Por favor, troque para poder prosseguir.')</script>";
            }
                if(empty($gen)){  //Genero vazio
                    $erros[] = "<script>alert('Caso não queira preencher, selecione a opção neutra')</script>";
                }
            }
        }
}
// ---------------------------------------
// ----- CRIPTOGRAFIA: -----

$senhaCrip = password_hash($senha, PASSWORD_DEFAULT);

// -------------------------
// ----- VOLTANDO CASO OS ERROS SEJAM VERDADEIROS: -----

if(count($erros)>0){
    $_SESSION['erros'] = $erros;
    header('Location: sist_cadastro.php');
}
else{
    // ---------- FOTO: ----------
    $nome_ft = 'default.jpg'; // valor padrão
    if(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK){
        $extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $novo_nome = uniqid().'.'.$extension;
        $destino = "usuarios/".$novo_nome;
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $destino)){
            $nome_ft = $novo_nome;
        }
    }
    // ---------------------------
    $sql = "INSERT INTO usuarios (NOME, SENHA, DATA_NASC, EMAIL, FOTO, GENERO) VALUES ('$nome', '$senhaCrip', '$date', '$email', '$nome_ft', '$gen')";
    $conect->query($sql);
    header('Location: sist_login.php');
}
// -----------------------------------------------------
?>