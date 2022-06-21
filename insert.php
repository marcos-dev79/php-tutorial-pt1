<?php 
/**
 * Este é um tutorial muito básico para fins educacionais
 * e não estão sendo consideradas regras de segurança
 * @ItsSince79
 */


include('conexao.php');

printf('Connected successfully.<br />');
   
$sql = "CREATE TABLE tutorials_tbl( ".
        "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
        "tutorial_title VARCHAR(100) NOT NULL, ".
        "tutorial_author VARCHAR(40) NOT NULL, ".
        "submission_date DATE, ".
        "PRIMARY KEY ( tutorial_id )); ";

if ($mysqli->query($sql)) {
    printf("Tabela tutorials_tbl criada com sucesso.<br />");
}

if ($mysqli->errno) {
    printf("Não pode criar a tabela: %s<br />", $mysqli->error);
}
        
$sql_insert = "INSERT into tutorials_tbl(tutorial_id, tutorial_title, tutorial_author, submission_date) VALUES ";
$sql_insert.= " (1, 'PHP&MySQL pt 1', 'Marcos Marras', '2022-06-21'), (2, 'PHP&MySQL pt 2', 'Marcos Marras', '2022-06-25'); ";

if ($mysqli->query($sql_insert)) {
    printf("Dados tutorials_tbl inseridos com sucesso.<br />");
}

if ($mysqli->errno) {
    printf("Erro na inserção: %s<br />", $mysqli->error);
}

$mysqli->close();

