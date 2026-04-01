<?php
require 'conexao.php'; // Usa o arquivo que já configuramos

try {
    // Consulta os dados com os nomes de colunas novos
   $sql = "SELECT id_roupa, roupa, preco, loja FROM public.usuario ORDER BY id_roupa ASC";
    $stmt = $pdo->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Estoque de Roupas - Ana Júlia</h1>";
    
    if ($resultados) {
        echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 80%;'>";
        echo "<tr style='background-color: #eee;'>
                <th>ID</th>
                <th>Peça de Roupa</th>
                <th>Preço</th>
                <th>Loja</th>
              </tr>";

        foreach ($resultados as $linha) {
            echo "<tr>";
            echo "<td>" . $linha['id_roupa'] . "</td>";
            echo "<td>" . $linha['roupa'] . "</td>";
            echo "<td>R$ " . number_format($linha['preco'], 2, ',', '.') . "</td>";
            echo "<td>" . $linha['loja'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum dado encontrado na tabela.";
    }

} catch (PDOException $e) {
    echo "Erro ao visualizar dados: " . $e->getMessage();
}
?>