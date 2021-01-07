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
        <div class="justify-content-center">
            <table id = "tablePersonaName" class="table table-striped table-bordered nowrap">
                <thead>
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
                    foreach(json_decode($result) as $row){ ?>
                    <tr>
                        <td><?=$row->personaname?></td>
                        <td style="padding:0"><img src ="<?=$row->avatarfull?>" class="img-fluid mx-auto d-block" ></td>
                        <td><?=empty($row->last_match_time)?'tidak tersedia':date_format(new DateTime($row->last_match_time),'Y-m-d H:i:s')?></td>
                        <td><?=$row->account_id?></td>
                        <td>
                        <form id ="formSearchById" action="searchByID" enctype="multipart/form-data" method="post">
                            <input type="hidden" value="<?=$row->account_id?>" name="playerid">
                            <a id="submit" href="#" onclick="document.getElementById('formSearchById').submit();">Lihat Statistik</a>
                        </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>    
    <script type="text/javascript">

    $(document).ready(function() {
        var table = $('#tablePersonaName').DataTable({
            order:[],
            responsive: true
        });
        new $.fn.dataTable.FixedHeader(table);

        document.getElementById('submit').onClick(function(e){
            e.preventDefault();
        });
    });
    </script>
</body>
</html>