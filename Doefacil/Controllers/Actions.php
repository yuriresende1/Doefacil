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
                <br>
                <br>
                <p class='historia1'>".$row->description."</p>
                <br>
                <p>Responsável pela ação: ".$row->action_creator."</p>
                <a href='#' target='_blank' class='donationNow'>Contribuir agora</a>
            </section>
        ";
    }
?>