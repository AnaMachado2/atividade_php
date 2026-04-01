<?php
require 'conexao.php';

try {
    $sql = "SELECT id_roupa, roupa, preco, loja FROM public.usuario ORDER BY id_roupa ASC";
    $stmt = $pdo->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitrine de Roupas | Ana Júlia</title>
    <style>
        /* Estilização Moderna */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }

        .container {
            width: 100%;
            max-width: 900px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 8px;
        }

        thead {
            background-color: #3498db;
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        tbody tr:hover {
            background-color: #f1f9ff;
            transition: 0.3s;
        }

        .price-tag {
            color: #27ae60;
            font-weight: bold;
        }

        .badge-loja {
            background: #e1e8ed;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.85em;
            color: #7f8c8d;
        }

        .no-data {
            text-align: center;
            padding: 40px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>

    <h1>✨ Catálogo de Roupas</h1>

    <div class="container">
        <?php if ($resultados): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Peça de Roupa</th>
                        <th>Preço</th>
                        <th>Localização</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultados as $linha): ?>
                        <tr>
                            <td>#<?php echo $linha['id_roupa']; ?></td>
                            <td><strong><?php echo htmlspecialchars($linha['roupa']); ?></strong></td>
                            <td class="price-tag">R$ <?php echo number_format($linha['preco'], 2, ',', '.'); ?></td>
                            <td><span class="badge-loja"><?php echo htmlspecialchars($linha['loja']); ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="no-data">Ops! O estoque está vazio no momento. 🛍️</div>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
} catch (PDOException $e) {
    echo "<div style='color:red; font-family:sans-serif;'>Erro ao carregar vitrine: " . $e->getMessage() . "</div>";
}
?>
