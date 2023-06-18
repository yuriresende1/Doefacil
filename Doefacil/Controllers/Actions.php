<?php
    $sql = "SELECT * FROM acoes ORDER BY expiration_date";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($result as $row) {
        $extension = strtolower(substr($row->thumbnail, -4));
        echo "
            <section class='box1'>
                <h2 class='titleAction'>".$row->title."</h2>
                <img class='imgAction' src='../assets/thumbnails/".$row->title.$extension."' alt='imagem da ação \"".$row->title."\"'>
                <p class='historia1'>".$row->short_description."</p>
                <p>Responsável pela ação: ".$row->action_creator."</p>
                <div class='buttonsActions'>
        ";

        if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
            echo "
                <a href='#' class='donationNow'>Editar</a>
            ";
        }
        
        echo "
            <a href='./contribuition.php?id=".$row->id."' class='donationNow'>Contribuir agora</a>
        ";

        if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
            echo "
                <a href='#' class='donationNow'>Excluir</a>
            ";
        }

        echo "
                </div>
            </section>
        ";
    }
?>