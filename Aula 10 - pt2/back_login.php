<?php
$conect = new mysqli('localhost', 'root', '', 'usuarios');

$nome = @$_POST['nome'];
$senha = @$_POST['senha'];
$senhaC = @$_POST['senha_Conf'];
$date = @$_POST['date'];
$email = @$_POST['email'];
$gen = @$_POST['genero'];

$dataA = new DateTime();
$dataU = new DateTime($date);

//$sql = "INSERT INTO pessoas (nome, idade, cidade) VALUES ('$nome', '$idade', '$cidade')";
//$conect->query($sql);

//----------------------------------------------------------------

if(empty($nome)){  //Nome vazio
    echo('Você não colocou seu nome');
}
else if(strlen($nome) < 3){  //Nome menor que 3 carac.
    echo('Seu nome tem que ter um mínimo de 3 caracteres');
}
else if(strlen($nome) > 100){  //Nome maior que 100 carac.
    echo('Seu nome não pode ter mais de 100 caracteres');
}
else{ 
    if(strlen($senha) < 8){  //Senha menor que 8 carac.
        echo('Senha tem que ter um mínimo de 8 caracteres');
    }
    else if(strlen($senha) > 100){  //Senha maior que 100 carac.
        echo('Escolha uma senha menor que 100 caracteres');
    }
    else if($senha != $senhaC){  //Senha e senha confirmada igualadas
        echo('Senha ou confirmação de senha incorretos');
    }
    else{
        if(empty($date)){  //Data nasc. vazio
            echo('Você não pode deixar este campo em braco');
        }
        else if($dataA == $dataU || $dataA < $dataU){  //data de hoje igual a data de nasc. || data futuro a atual
            echo('Você ainda não nasceu. Volte mais tarde');
        }
        else{
            if(empty($email)){  //Email vazio
                echo('Você precisa preencher o email');
            }
            else if(strlen($email) > 150){  //Email grande demais
                echo('Escolha um email com menos de 150 caracteres');
            }
            else{
                if(empty($gen)){  //Genero vazio
                    echo('Caso não queira preencher, selecione a opção neutra');
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