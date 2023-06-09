<?php
    $date_today = date('Y-m-d');
    $sql = "SELECT * FROM acoes WHERE expiration_date >= '$date_today' ORDER BY expiration_date ASC LIMIT 3";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($result as $row) {
        $extension = strtolower(substr($row->thumbnail, -4));
        echo "
            <section class='box1'>
                <h2>".$row->title."</h2>
                <img src='./assets/thumbnails/".$row->title.$extension."' alt='imagem da ação \"".$row->title."\"'>
                <br>
                <br>
                <p class='historia1'>".$row->description."</p>
                <br>
                <p>".$row->action_creator."</p>
                <a href='#'>Contribuir agora</a>
            </section>
        ";
    }
?>
