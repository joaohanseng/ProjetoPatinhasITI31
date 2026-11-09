<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção - Patinhas Felizes</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🐾 Patinhas Felizes</h1>
        <p>Encontre seu novo melhor amigo</p>
    </header>

    <nav>
        <a href="index.php">Início</a>
        <a href="cadastrar.php">Cadastrar Animal</a>
        <a href="listar.php">Animais para Adoção</a>
    </nav>

    <div class="container">
        <h2>Animais Disponíveis para Adoção</h2>

        <div class="grid">
           <table>
  
        <tr>
            
            <th>Nome</th>
            <th>Espécie</th>
            <th>Idade</th>
            <th>Porte</th>
            <th>Descrição</th>
            
        </tr>
    

        <!-- Cod php que busca os animais no banco de dados e exibe nas linhas e colunas da tabela -->

        <?php
$sql = "SELECT * FROM animais";
$resultado = mysqli_query($conexao, $sql);

while ($animal = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $animal["nome"] . "</td>";
    echo "<td>" . $animal["especie"] . "</td>";
    echo "<td>" . $animal["idade"] . " ano(s)</td>";
    echo "<td>" . $animal["porte"] . "</td>";
    echo "<td>" . $animal["descricao"] . "</td>";
    echo "</tr>";
}
?>

</table>

        </div>
    </div>

    <footer>
        <p>&copy; 2026 Patinhas Felizes - Programação Web 2 | Curso Técnico em Informática | IFBA Campus Ilhéus</p>
    </footer>

</body>
</html>