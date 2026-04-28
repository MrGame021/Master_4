<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pessoas do Banco de Dados:</h1>

    <?php

    // Conexao com o banco de dados
    $conect = new mysqli('localhost', 'root', '', 'aula6');
    
    // montar uma query (comando pra ser executado no slq)
    $sql = "SELECT * FROM pessoas";

    $result = $conect->query($sql);

    // percorrer o resultado linha por linha
    //Contruindo uma table em html automatico
    echo('
    <table border>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>CIDADE</th>
            <th>REMOVER</th>
        </tr>');
    while($line = $result->fetch_assoc()){
        echo('<tr>
                <td>'.$line['id'].'</td>
                <td>'.$line['nome'].'</td>
                <td>'.$line['idade'].'</td>
                <td>'.$line['cidade'].'</td>
                <td><a href=""> X </a></td>
        </tr>');

        //echo('<tr>');
        //echo('<td>'.$line['id'].'</td>');
        //echo('<td>'.$line['nome'].'</td>');
        //echo('<td>'.$line['idade'].'</td>');
        //echo('<td>'.$line['cidade'].'</td>');
        //echo('</tr>');
    }
    echo('</table>');

    ?>
    <br>
    <button><a href="frontend_forms.php">VOLTAR</a></button>
    

</body>
</html>