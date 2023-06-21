<?php
    $myEmail = $_SESSION['email'];

    if($_SESSION['type_user'] === 'admin') {
        $sql = "SELECT * FROM situation_donations WHERE status_donation='Pendente'";
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo '<h2 class="text-center mt-5 mb-5">Doações pendentes</h2>';
    
        if (count($result) >= 1) {
            echo '
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Doador</th>
                            <th>ID do Doador</th>
                            <th>Causa Ajudada</th>
                            <th>Status da Doação</th>
                            <th>Informações</th>
                            <th>Email do Doador</th>
                        </tr>
                    </thead>
                    <tbody>';

        foreach ($result as $row) {
            echo '
                <tr>
                    <td>' . $row->donor . '</td>
                    <td>' . $row->id_donor . '</td>
                    <td>' . $row->recipient . '</td>
                    <td>
                        <form method="post" action="../Controllers/AdminActions.php">
                            <input type="hidden" name="acao" value="editSituation">
                            <input type="hidden" name="rowId" value="' . $row->id . '">
                            <label for="status_donation_pending_' . $row->id . '">
                                <input type="radio" name="status_donation_' . $row->id . '" id="status_donation_pending_' . $row->id . '" value="Pendente" ' . ($row->status_donation == "Pendente" ? 'checked' : '') . '> Pendente
                            </label>
                            <label for="status_donation_completed_' . $row->id . '">
                                <input type="radio" name="status_donation_' . $row->id . '" id="status_donation_completed_' . $row->id . '" value="Concluído" ' . ($row->status_donation == "Concluído" ? 'checked' : '') . '> Concluído
                            </label>
                            <button type="submit" name="editButton_<?php echo $row->id; ?>" class="btn btn-primary">Atualizar</button>
                        </form>
                    </td>
                    <td>' . $row->information . '</td>
                    <td>' . $row->email_donor . '</td>
                </tr>';
        }

        echo '
                </tbody>
            </table>';
        } else {
            echo "<p>Não existem doações pendentes</p>";
        }

        echo '<h2 class="text-center mt-5 mb-5">Solicitações pendentes</h2>';

        $sql2 = "SELECT * FROM situation_creation WHERE status_creation='Pendente'";
        $stmt2 = $conn->query($sql2);
        $result2 = $stmt2->fetchAll(PDO::FETCH_OBJ);

        if (count($result2) >= 1) {
            echo '
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Criador</th>
                            <th>ID do Criador</th>
                            <th>Status da Criação</th>
                            <th>Informações</th>
                            <th>Email do Criador</th>
                        </tr>
                    </thead>
                    <tbody>';

            foreach ($result2 as $row2) {
                echo '
                    <tr>
                        <td>' . $row2->creator . '</td>
                        <td>' . $row2->id_creator . '</td>
                        <td>
                            <form method="post" action="../Controllers/AdminActions.php">
                                <input type="hidden" name="acao" value="editSituation">
                                <input type="hidden" name="rowId" value="' . $row2->id . '">
                                <label for="status_creation_pending_' . $row2->id . '">
                                    <input type="radio" name="status_creation_' . $row2->id . '" id="status_creation_pending_' . $row2->id . '" value="Pendente" ' . ($row2->status_creation == "Pendente" ? 'checked' : '') . '> Pendente
                                </label>
                                <label for="status_creation_completed_' . $row2->id . '">
                                    <input type="radio" name="status_creation_' . $row2->id . '" id="status_creation_completed_' . $row2->id . '" value="Concluído" ' . ($row2->status_creation == "Concluído" ? 'checked' : '') . '> Concluído
                                </label>
                                <button type="submit" name="editButton_<?php echo $row->id; ?>" class="btn btn-primary">Atualizar</button>
                            </form>
                        </td>
                        <td>' . $row2->information . '</td>
                        <td>' . $row2->email_creator . '</td>
                    </tr>';
            }

            echo '
                    </tbody>
                </table>';
        } else {
            echo "<p>Não existem solicitações pendentes</p>";
        }

    } else {
        $donationsQuery = "SELECT * FROM situation_donations WHERE email_donor='$myEmail'";
        $donationsStmt = $conn->query($donationsQuery);
        $donationsResult = $donationsStmt->fetchAll(PDO::FETCH_OBJ);

        echo '<h2 class="text-center mt-5 mb-5">Suas doações</h2>';
        
        if (count($donationsResult) >= 1) {
            echo '
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Doador</th>
                            <th>Causa Ajudada</th>
                            <th>Informações</th>
                            <th>Status da Doação</th>
                        </tr>
                    </thead>
                    <tbody>';

            foreach ($donationsResult as $donation) {
                echo '
                    <tr>
                        <td>' . $donation->donor . '</td>
                        <td>' . $donation->recipient . '</td>
                        <td>' . $donation->information . '</td>
                        <td>' . $donation->status_donation . '</td>
                    </tr>';
            }

            echo '
                    </tbody>
                </table>';
        } else {
            echo "<p>Você não tem doações cadastradas</p>";
        }

        echo '<h2 class="text-center mt-5 mb-5">Suas solicitações de ações</h2>';

        $creationQuery = "SELECT * FROM situation_creation WHERE email_creator='$myEmail'";
        $creationStmt = $conn->query($creationQuery);
        $creationResult = $creationStmt->fetchAll(PDO::FETCH_OBJ);

        if (count($creationResult) >= 1) {
            echo '
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Criador</th>
                            <th>Informações</th>
                            <th>Status da Criação</th>
                        </tr>
                    </thead>
                    <tbody>';

            foreach ($creationResult as $creation) {
                echo '
                    <tr>
                        <td>' . $creation->creator . '</td>
                        <td>' . $creation->information . '</td>
                        <td>' . $creation->status_creation . '</td>
                    </tr>';
            }

            echo '
                    </tbody>
                </table>';
        } else {
            echo "<p>Você não tem solicitações de ações cadastradas</p>";
        }
    }
?>
