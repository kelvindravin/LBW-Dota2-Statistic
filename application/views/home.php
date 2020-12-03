<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics</title>
</head>

<body>
    <h1 class="text-center">
        Welcome to Dota 2 Statistics
    </h1>

    <div class="container">
        <h4>Here is the heroes :</h4><br>
        <table id="table_heroes" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th>Hero ID</th>
                    <th>Name</th>
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
        $('#table_heroes').DataTable()
    });

    var table = $('#table_heroes').DataTable({
        "ordering": true
    });
</script>

</html>