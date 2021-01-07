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
    <?php
        $numOfCols = 3;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($hero as $key => $value) {
            if($rowCount % $numOfCols == 0) { 
                ?> <div class="row my-5 mx-5"> <?php 
            }
        $rowCount++; ?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
        <div class="thumbnail card mx-5 text-center">
            <?php 
                echo '<img src="./assets/images/'.$value->name.'.jpg" style="margin: 0 auto; width=128px; height=72px; "> <br> '. 
                $value->localized_name.' <br> '.
                $value->primary_attr.' <br> '.
                $value->attack_type.' <br> '.
                implode(', ', $value->roles)
            ?>
        </div>
        </div>
        <?php
            if($rowCount % $numOfCols == 0) { ?> </div> <?php } } 
        ?>
    </content>
</body>

</html>