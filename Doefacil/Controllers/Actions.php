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
                <p class='responsavel'>Responsável pela ação: ".$row->action_creator."</p>
                <div class='buttonsActions'>
        ";

        if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
            echo "
                <a href='./editActions.php?id=".$row->id."' class='donationNow'>Editar</a>
            ";
        }
        
        if (!isset($_SESSION['id'])) {
            echo "<a href='./login.php' class='donationNow'>Contribuir agora</a>";
        } else {
            echo "<a href='./contribuition.php?id=".$row->id."' class='donationNow'>Contribuir agora</a>";
        }

        if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
            echo "
                <a 
                    href=\"javascript:void(0)\" onclick=\"if(confirm('Tem certeza que deseja excluir essa ação?')){window.location='../Controllers/AdminActions.php?id=".$row->id."&acao=delete';}\" class='donationNow'>
                    Excluir
                </a>
            ";
        }

        echo "
                </div>
            </section>
        ";
    }
?>