<h1>listar modelo</h1>
<?php 
    $sql = "SELECT * FROM modelo AS mo
            INNER JOIN marca AS ma
            ON mo.marca_id_marca = ma.id_marca
    ";
    $res = $conn -> query($sql);
    $qtd = $res -> num_rows;

    if($qtd > 0){
        echo "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
        echo "<table class = 'table table-bordered table-striped table-hover'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Marca</th>";
        echo "<th>Modelo</th>";
        echo "<th>Cor</th>";
        echo "<th>Ano</th>";
        echo "<th>Placa</th>";
        echo "<th>ações</th>";
        echo "</tr>";

        while($row = $res -> fetch_object()){
            echo "<tr>";
            echo "<td>".$row->id_modelo."</td>";
            echo "<td>".$row->nome_marca."</td>";
            echo "<td>".$row->nome_modelo."</td>";
            echo "<td>".$row->cor_modelo."</td>";
            echo "<td>".$row->ano_modelo."</td>";
            echo "<td>".$row->placa_modelo."</td>";
            echo "<td>
                    <button onclick = \"location.href='?page=modelo-editar&id_modelo=".$row->id_modelo."';\" class = 'btn btn-primary'>Editar</button>

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=modelo-salvar&acao=excluir&id_modelo=".$row->id_modelo."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Não encontrou resultados";
    }
?>
