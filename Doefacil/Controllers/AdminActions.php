<?php
    include("../Models/DoeFacil.php");

    if(isset($_FILES['thumbnail'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $action_creator = $_POST['action_creator'];
        $expiration_date = $_POST['expiration_date'];
        $extensao = strtolower(substr($_FILES['thumbnail']['name'], -4)); // pegando a extensão
        $new_name = $title . $extensao;
        $directory = "../assets/thumbnails/";
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $directory.$new_name);

        $sql = "INSERT INTO acoes (title, thumbnail, description, action_creator, expiration_date) VALUES ('{$title}', '{$new_name}', '{$description}', '{$action_creator}', '{$expiration_date}')";

        $stmt = $conn->query($sql);

        if($stmt) {
            echo "<script>alert('Sucesso')</script>";
        } else {
            echo "<script>alert('Erro')</script>";
        }
    }
?>