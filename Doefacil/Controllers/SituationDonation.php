<?php
    $myEmail = $_SESSION['email'];
    $sql = "SELECT * FROM situation_donations WHERE email_donor='$myEmail'";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    echo "<h2>Suas doações</h2>";            
    if(count($result) >= 1) {
        foreach($result as $row) {
            echo $row->donor."<br/>";
            echo $row->id_donor."<br/>";
            echo $row->recipient."<br/>";
            echo $row->status_donation."<br/>";
            echo $row->information."<br/>";
            echo $row->email_donor;
        }
    } else {
        echo "Você não tem doações cadastradas";
    }

    echo "<h2>Suas solicitações de ações</h2>";            

?>