<?php
$conect = new mysqli('localhost', 'root', '', 'usuarios');

$nome = @$_POST['nome'];
$senha = @$_POST['senha'];
$senhaC = @$_POST['senha_Conf'];
$date = @$_POST['date'];
$email = @$_POST['email'];
$gen = @$_POST['genero'];

$dataA = new DateTime();
$dataA->modify('-1 day');
$dataU = new DateTime($date);

//$sql = "INSERT INTO pessoas (nome, idade, cidade) VALUES ('$nome', '$idade', '$cidade')";
//$conect->query($sql);

//----------------------------------------------------------------

if(empty($nome)){  //Nome vazio
    echo("<script>alert('Você não colocou seu nome')</script>");
}
else if(strlen($nome) < 3){  //Nome menor que 3 carac.
    echo("<script>alert('Seu nome tem que ter, no mínimo, 3 caracteres')</script>");
}
else if(strlen($nome) > 100){  //Nome maior que 100 carac.
    echo("<script>alert('Seu nome não pode ter mais de 100 caracteres')</script>");
}
else{ 
    if(strlen($senha) < 8){  //Senha menor que 8 carac.
        echo("<script>alert('Senha tem que ter um mínimo de 8 caracteres')</script>");
    }
    else if(strlen($senha) > 100){  //Senha maior que 100 carac.
        echo("<script>alert('Escolha uma senha menor que 100 caracteres')</script>");
    }
    else if($senha != $senhaC){  //Senha e senha confirmada igualadas
        echo("<script>alert('Senha ou confirmação de senha incorretos')</script>");
    }
    else{
        if(empty($date)){  //Data nasc. vazio
            echo("<script>alert('Você deve selecionar sua data de nascimento')</script>");
        }
        else if($dataA == $dataU || $dataA < $dataU){  //data de hoje igual a data de nasc. || data futuro a atual
            echo("<script>alert('Você ainda não nasceu. Volte mais tarde')</script>");
        }
        else{
            if(empty($email)){  //Email vazio
                echo("<script>alert('Você precisa preencher o email')</script>");
            }
            else if(strlen($email) > 150){  //Email grande demais
                echo("<script>alert('Escolha um email com menos de 150 caracteres')</script>");
            }
            else{
                if(empty($gen)){  //Genero vazio
                    echo("<script>alert('Caso não queira preencher, selecione a opção neutra')</script>");
                }
                else{
                    header('Location: sist_login.php');
                }
            }
        }
    }
}

//----------------------------------------------------------------

//if(count($erros) > 0){
    //header('Location: sist_login.php');
//}
?>


