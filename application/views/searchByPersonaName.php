<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Persona Name</title>
</head>

<body>
    <header>
        <h1 class="text-center">
            Pencarian untuk Player Dota 2, Dengan Nama <span class="text-warning"><?php echo $persona_searched; ?></span>
        </h1>
    </header>
    <content>
        <div class="container my-5">
            <table id="tablePersonaName" class="table table-striped table-bordered  nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Persona Name</th>
                        <th>Profile Picture</th>
                        <th>Account Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($persona_data as $key => $value) {
                        echo '
                        <tr>
                            <td>' . $value->personaname . '</td>
                            <td><img src="' . $value->avatarfull . '" width=100 height=100/></td>
                            <td>' . $value->account_id . '</td>
                            <td><a href="selectSteamID?id='. $value->account_id . '" class="btn btn-success">Pilih</a></td>
                        </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </content>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#tablePersonaName').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>

</html>