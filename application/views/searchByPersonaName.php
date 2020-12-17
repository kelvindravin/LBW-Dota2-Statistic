<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Persona Name</title>
</head>
<body>
    <div class="container">
        <br>
        <div class="col">
            <h1 class="text-center">Pencarian untuk Persona name dota 2 </h1>
        </div>
        <br>
        <div class="col justify-content-center">
            <table id = "tablePersonaName" class="table table-striped table-bordered">
                <thead></thead>
                    <tr>
                        <th>Persona Name</th>
                        <th>Profile Picture</th>
                        <th>Last Matches</th>
                        <th>Account Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    for ($i=0;$i<30;$i++){ ?>
                    <tr>
                        <td>Johny</td>
                        <td></td>
                        <td>2020-10-12</td>
                        <td>166168145</td>
                        <td>Lihat Statistik</td>
                    <tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>    
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