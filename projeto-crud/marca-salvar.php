<?php 
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $sql = "INSERT INTO marca 
                        (nome_marca) 
                    VALUES 
                        ('".$_POST['nome_marca']."')";

            $res = $conn->query($sql);

            if($res ==true){
                echo"<script>alert('Cadastrou com sucesso');</script>";
                echo"<script>location.href='?page=marca-listar';</script>";
            }else{
                echo "<script>alert('não foi possivel');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            }
            break;
        case 'editar':
            $sql = "UPDATE marca SET 
                        nome_marca='".$_POST['nome_marca']."' 
                    WHERE 
                        id_marca=".$_POST["id_marca"];
            $res = $conn->query($sql);
            if($res ==true){
                echo"<script>alert('Editou com sucesso');</script>";
                echo"<script>location.href='?page=marca-listar';</script>";
            }else{
                echo "<script>alert('não foi possivel');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            }

            break;
        case 'excluir':
            $sql = "DELETE FROM
                        marca 
                    WHERE 
                        id_marca= ".$_REQUEST['id_marca'];
            $res = $conn->query($sql);
            if($res ==true){
                echo"<script>alert('Excluiu com sucesso');</script>";
                echo"<script>location.href='?page=marca-listar';</script>";
            }else{
                echo "<script>alert('não foi possivel');</script>";
                echo "<script>location.href='?page=marca-listar';</script>";
            }
            break;
    }
?>