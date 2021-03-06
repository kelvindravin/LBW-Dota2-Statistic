<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Compare by Persona Name</title>
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
                        <th>Last Matches</th>
                        <th>Account Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($persona_data as $row){ ?>
                    <tr>
                        <td><?=$row->personaname?></td>
                        <td style="padding:0"><img src ="<?=$row->avatarfull?>" class="img-fluid mx-auto d-block" ></td>
                        <td><?=empty($row->last_match_time)?'tidak tersedia':date_format(new DateTime($row->last_match_time),'Y-m-d H:i:s')?></td>
                        <td><?=$row->account_id?></td>
                        <td>
                        <form id ="compareBySearchPersona" action="compareByID" enctype="multipart/form-data" method="post">
                            <input type="hidden" value="<?=$row->account_id?>" name="playerid">
                            <a id="submit" href="#" onclick="document.getElementById('compareBySearchPersona').submit();">Pilih</a>
                        </form>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </content>
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