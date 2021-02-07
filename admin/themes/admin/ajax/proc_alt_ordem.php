<?php

require_once '../../app/ConfigAdmin.inc.php';
$conn = new Conn();

sleep(2);
$categoryController = new CategoryController();
//recuperando o id pelo POST
$array_aulas = $_POST['arrayordem'];

$cont_ordem = 1;
foreach ($array_aulas as $id_aula) {
    $stmt = $conn->getConn()->prepare("UPDATE categories SET category_ordem = :category_ordem WHERE category_id = :category_id");
    $stmt->bindValue(":category_ordem", $cont_ordem);
    $stmt->bindValue(":category_id", $id_aula);
    $stmt->execute();
    $cont_ordem ++;
}
echo "<span style='color: #333;'>Alterado com sucesso</span>";






