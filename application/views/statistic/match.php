<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Match</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <h1 class="text-center mt-5">
            Matches
        </h1>
        
    </header>

    <content>
        <div class="container mt-5">
            <table id="table_matches" class="table table-striped table-bordered  nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Match ID</th>
                        <th>Tanggal</th>
                        <th>Durasi Match</th>
                        <th>Winner</th>
                        <th>Hero</th>
                        <th>K/D/A</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for($i = 0; $i<sizeof($matches); $i++) {
                        $unix = $matches[$i]['start_time'];
                        $tanggal = strtotime("+360 minutes", $unix);
                        $isWin = $matches[$i]['radiant_win'];
                        $winner = "";
                        if($isWin){
                            $winner = 'Radiant';
                        }
                        else{
                            $winner = 'Dire';
                        }

                        echo '
                        <tr>
                            <td>' . $matches[$i]['match_id'] . '</td>
                            <td>' . date('d-m-Y H:i:s',$tanggal) . ' WIB</td>
                            <td>' . gmdate("H:i:s", $matches[$i]['duration']) . '</td>
                            <td>' . $winner . '</td>
                            <td>' . $matches[$i]['heroes'] . '</td>
                            <td>' . $matches[$i]['kills'] .'/'. $matches[$i]['deaths'] .'/'. $matches[$i]['assists'] . '</td>
                        </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </content>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#table_matches').DataTable({
            "order": [[ 0, "desc" ]],
            responsive: true

        });
        new $.fn.dataTable.FixedHeader(table);
    });
</script>

</html>