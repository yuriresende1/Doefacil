<?php
    $date_today = date('Y-m-d');
    $sql_active = "SELECT * FROM acoes WHERE expiration_date >= '$date_today' ORDER BY expiration_date ASC LIMIT 3";
    $stmt_active = $conn->query($sql_active);
    $result_active = $stmt_active->fetchAll(PDO::FETCH_OBJ);

    if(count($result_active) > 0) {
        foreach($result_active as $row) {
            $extension = strtolower(substr($row->thumbnail, -4));
            echo "
                <section class='box1'>
                    <h2 class='titleAction'>".$row->title."</h2>
                    <img class='imgAction' src='./assets/thumbnails/".$row->title.$extension."' alt='imagem da ação \"".$row->title."\"'>
                    <p class='historia1'>".$row->short_description."</p>
                    <p>Responsável pela ação: ".$row->action_creator."</p>";
    
                    if (!isset($_SESSION['id'])) {
                        echo "<a href='./Views/login.php' class='donationNow'>Contribuir agora</a>";
                    } else {
                        echo "<a href='./Views/contribuition.php?id=".$row->id."' class='donationNow'>Contribuir agora</a>";
                    }
    
                    echo "</section>";
        }
    } else {
        $sql_expired = "SELECT * FROM acoes WHERE expiration_date <= '$date_today' ORDER BY expiration_date DESC LIMIT 3";
        $stmt_expired = $conn->query($sql_expired);
        $result_expired = $stmt_expired->fetchAll(PDO::FETCH_OBJ);

        foreach ($result_expired as $row) {
            $extension = strtolower(substr($row->thumbnail, -4));
            echo "
                <section class='box1'>
                    <h2 class='titleAction'>".$row->title."</h2>
                    <img class='imgAction' src='./assets/thumbnails/".$row->title.$extension."' alt='imagem da ação \"".$row->title."\"'>
                    <p class='historia1'>".$row->short_description."</p>
                    <p>Responsável pela ação: ".$row->action_creator."</p>";

            if (!isset($_SESSION['id'])) {
                echo "<a href='./Views/login.php' class='donationNow'>Contribuir agora</a>";
            } else {
                echo "<a href='./Views/contribuition.php?id=".$row->id."' class='donationNow'>Contribuir agora</a>";
            }

            echo "</section>";
        }
    }
    


?>

<!-- if ($result === 0) {
        $sql = "SELECT * FROM acoes WHERE expiration_date <= '$date_today' ORDER BY expiration_date ASC LIMIT 3";
        $stmt = $conn->query($sql);
        return $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    } -->