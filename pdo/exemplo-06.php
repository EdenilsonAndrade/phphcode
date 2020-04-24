<?php 
// exemplo de transação
// conexão com o banco
$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

$conn->beginTransaction();

// outra forma de utilizar o valor a ser informado que neste caso seria o id pode ser utilizado o ?
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

// crio uma variavel para cada valor que será inserido no banco
$id = 2;

// dentro do execute informo um array e vou informando nos parametros conforme a sequencia separando por virgula, acaso conter mais do que um
$stmt->execute(array($id));

// posso confirmar a operação com um commit, ou voltar a informação com um rollback
// $conn->rollback();
$conn->commit();

echo "Delete OK!";

 ?>