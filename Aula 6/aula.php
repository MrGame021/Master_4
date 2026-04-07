<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Banco de Dados</h1>
    <p>Um banco de dados é um local onde armazenamos informações de forma organizada. Exemplos:</p>
    <ul>
        <li>Lista de alunos;</li>
        <li>Produtos de uma loja;</li>
        <li>Usuários de um sistema.</li>
    </ul>
    <br><br>
    <h1>MySQL</h1>
    <p>O <i>MySQL</i> é um sistema gerenciador de banco de dados. Ele permite:</p>
    <ul>
        <li>Criar banco de dados;</li>
        <li>Criar tabelas;</li>
        <li>Inserir, editar e apagar dados;</li>
        <li>Fazer consultas.</li>
    </ul>

    <h2>Exemplo de estrutura de tabela:</h2>

    <table border>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>idade</th>
        </tr>
        <tr>
            <td>0</td>
            <td>João</td>
            <td>20</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Maria</td>
            <td>22</td>
        </tr>
    </table>
    

    <hr>

    <h2>CRUD</h2> 
    <p>
        C = Create = INSERT INTO <i>variavel do banco de dados</i>( <i>coluna que quer saber</i>, ... ) VALUES ( <i>item exato que quer criar</i>, <i>dados adicionais</i> );<br>
        R = Read = SELECT * FROM <i>variavel do banco de dados</i>;<br> <!-- * = todos -->
        U = Update = UPDATE <i>variavel do banco de dados</i> SET <i>coluna que quer usar/saber</i> = <i>n'</i> WHERE <i>outra coluna</i> = <i>n";</i><br>
        D = Delete = DELETE FROM <i>variavel do banco de dados</i> WHERE <i>coluna escolhida</i> = <i>n</i>;
    </p>

</body>
</html>