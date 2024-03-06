<h1>Cadastrar modelos</h1>
<form action = "?page=modelo-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class = "mb-3">
        <label>Marca</label>
        <select name="marca_id_marca" class = "form-control">
            <option><strong>-Escolher marca-</strong></option>
            <?php 
                $sql = "SELECT * FROM marca";
                $res = $conn->query($sql);
                if($res->num_rows > 0){
                    while($row = $res->fetch_object()){
                        echo "<option value = '".$row->id_marca."'>".$row->nome_marca."</option>";
                    }
                }else{
                    echo "<option>não temos marcas cadastradas</option>";
                }
            ?>
        </select>
    </div>
    <div class = "mb-3">
        <label>Modelo</label>
        <input type="text" name="nome_modelo" class = form-control>
    </div>
    <div class = "mb-3">
        <label>cor</label>
        <input type="text" name="cor_modelo" class = form-control>
    </div>
    <div class = "mb-3">
        <label>ano</label>
        <input type="text" name="ano_modelo" class = form-control>
    </div>
    <div class = "mb-3">
        <label>placa</label>
        <input type="text" name="placa_modelo" class = form-control>
    </div>
    <div class = "mb-3">
        <button type = "submit" class = "btn btn-success">Enviar</button>
    </div>
</form>