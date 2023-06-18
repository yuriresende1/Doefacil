<?php
    $date_today = date('Y-m-d');
    $sql = "SELECT * FROM acoes WHERE expiration_date >= '$date_today' ORDER BY expiration_date ASC LIMIT 3";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($result as $row) {
        $extension = strtolower(substr($row->thumbnail, -4));
        echo "
            <section class='box1'>
                <h2 class='titleAction'>".$row->title."</h2>
                <img class='imgAction' src='./assets/thumbnails/".$row->title.$extension."' alt='imagem da ação \"".$row->title."\"'>
                <p class='historia1'>".$row->short_description."</p>
                <p>Responsável pela ação: ".$row->action_creator."</p>
                <a href='./Views/contribuition.php' target='_blank' class='donationNow'>Contribuir agora</a>
            </section>
        ";
    }
?>
