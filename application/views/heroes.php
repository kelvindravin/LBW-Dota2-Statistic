<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Heroes</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <h1 class="text-center">
            Heroes of Dota 2 
        </h1>
    </header>

    <content>
        <div class="container-fluid my-5">
            <table id="table_heroes" class="table table-striped table-bordered  nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Hero ID</th>
                        <th>Hero Picture</th>
                        <th>Dota2 Name</th>
                        <th>Primary Attribute</th>
                        <th>Attack Type</th>
                        <th>Roles</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($hero as $key => $value) {
                        echo '
                        <tr>
                            <td>' . $value->id . '</td>
                            <td>' . $value->name . '</td>
                            <td>' . $value->localized_name . '</td>
                            <td>' . $value->primary_attr . '</td>
                            <td>' . $value->attack_type . '</td>
                            <td>' . implode(', ', $value->roles) . '</td>
                        </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    
</body>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#table_heroes').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });
</script>

</html>