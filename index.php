
<html>
    <head>
        <title>PHP & MySQL tutorial parte 1</title>
        <style>
            table, th, td {
                border: 1px solid;
                border-collapse: collapse;
                padding: 12px;
            }
        </style>
    </head>

    <body>

        <h1>PHP & MySQL pt 1</h1>
        <p>Possíveis datas</p>

        <table>
            <tr>
                <th>ID</th>
                <th>TUTORIAL</th>
                <th>AUTOR</th>
                <th>DATA</th>
            </tr>

            <?php
                include('conexao.php');
                
                $sql = "SELECT * FROM tutorials_tbl";
                $result = $mysqli->query($sql);

                while($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?=$row['tutorial_id'] ?></td>
                            <td><?=$row['tutorial_title'] ?></td>
                            <td><?=$row['tutorial_author'] ?></td>
                            <td><?=$row['submission_date'] ?></td>
                        </tr>
                    <?php

                }
            ?>
        </table>
    </body>
</html>