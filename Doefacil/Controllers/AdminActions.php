<?php
    include("../Models/DoeFacil.php");

    if(isset($_FILES['thumbnail'])) {
        $title = $_POST['title'];
        $short_description = $_POST['short_description'];
        $full_description = $_POST['full_description'];
        $donated = $_POST['donated'];
        $action_creator = $_POST['action_creator'];
        $expiration_date = $_POST['expiration_date'];
        
        $extensao = strtolower(substr($_FILES['thumbnail']['name'], -4)); // pegando a extensão
        $new_name = $title . $extensao;
        $directory = "../assets/thumbnails/";
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $directory.$new_name);

        $sql = "INSERT INTO acoes (title, thumbnail, short_description, full_description, donated,  action_creator, expiration_date) VALUES ('{$title}', '{$new_name}', '{$short_description}', '{$full_description}', '{$donated}', '{$action_creator}', '{$expiration_date}')";

        $stmt = $conn->query($sql);

        if($stmt) {
            echo "<script>alert('Sucesso')</script>";
            echo "<script>window.location='../Views/donations.php'</script>";
        } else {
            echo "<script>alert('Erro')</script>";
        }
    }
?>