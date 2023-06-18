<?php
    $sql = "SELECT * FROM acoes WHERE id=".$_REQUEST['id']."";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach($result as $row) {
        $extension = strtolower(substr($row->thumbnail, -4));
        echo "
            <section class='card'>
                <h2 class='titleAction'>".$row->title."</h2>
                <p class='actionCreator'><b>Responsável pela ação:</b> <span>".$row->action_creator."</span></p>
                <img class='imgAction' src='../assets/thumbnails/".$row->title.$extension."' alt='imagem da ação \"".$row->title."\"'>
                <p class='shortDescription'>".$row->short_description."</p>
                <p class='fullDescription'>".$row->full_description."</p>
                <h3>O que pode ser doado?</h3>
                <p class='donated'>".$row->donated."</p>
            </section>
        ";
    }
?>