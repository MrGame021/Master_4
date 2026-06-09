<?php
session_start();

$conect = new mysqli('localhost', 'root', '', 'usuarios');

$nome = @$_POST['nome']; //Nome
$senha = @$_POST['senha']; //senha
$senhaC = @$_POST['senha_Conf'];//confirmação de senha( == senha)
$date = @$_POST['date'];//nascimento
$email = @$_POST['email'];//email(unico)
$gen = @$_POST['genero'];//genero

// manter informações
$_SESSION['old'] = $_POST;

$dataA = new DateTime();
$dataA->modify('-1 day');//exclui as ultimas 24h, ou seja, dia atual nn pode ser seu nascimento
$dataU = new DateTime($date);//nascimento do usuario

$erros = [];

$sql = "SELECT * FROM usuarios WHERE email = '$email'"
$result = $conect->query();

$sql = "INSERT INTO pessoas (nome, idade, cidade) VALUES ('$nome', '$idade', '$cidade')";
$conect->query($sql);

//----------------------------------------------------------------

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
    if(strlen($senha) < 8){  //Senha menor que 8 carac.
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
            else{
                if(empty($gen)){  //Genero vazio
                    $erros[] = "<script>alert('Caso não queira preencher, selecione a opção neutra')</script>";
                }
                else{
                    header('Location: sist_cadastro.php');
                }
            }
        }
    }
}

if(count($erros)>0){
    $_SESSION['erros'] = $erros;
    header('Location: sist_cadastro.php');
}


?>