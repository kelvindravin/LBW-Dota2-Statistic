<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Stats</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <h1 class="text-center mt-5">
            Your All Time Stats VS <?php echo $comparatorData["profile"]["personaname"] ?>
            <br>
            <a href="<?php echo site_url('stats')?>" class="btn btn-danger mt-2">Back to Your Stats</a>
        </h1>

    </header>

    <content>
        <div class="container my-5">
            <div class="row text-center justify-content-center d-flex">
                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5 class="card-title">Gold Per Minute (GPM)</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/Gold.png" class="mb-3">
                        <p class="card-text">
                        <b>Your's VS Their's</b><br>
                        <?php 
                            if($statsPlayer[4]['n'] < $comparatorStats[4]['n']){
                                echo '<span class="red">' . $statsPlayer[4]['n'] . '</span> VS <span class="green">' . $comparatorStats[4]['n']. '</span><br>';
                            }else if($statsPlayer[4]['n'] == $comparatorStats[4]['n']){
                                echo '<span class="yellow">' . $statsPlayer[4]['n'] . '</span> VS <span class="yellow">' . $comparatorStats[4]['n']. '</span><br>';
                            }else{
                                echo '<span class="green">' . $statsPlayer[4]['n'] . '</span> VS <span class="red">' . $comparatorStats[4]['n']. '</span><br>';
                            }
                        ?>
                        </p>
                    </div>
                </div>

                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5>Kill</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/Kill.png" class="mb-3">
                        <p class="card-text">
                        <b>Your's VS Their's</b><br>
                        <?php 
                            //Hero Kill
                            if($statsPlayer[0]['sum'] < $comparatorStats[0]['sum']){
                                echo '<span class="red">' . $statsPlayer[0]['sum'] . '</span> VS <span class="green">' . $comparatorStats[0]['sum'] . '</span><br>';
                            }else if($statsPlayer[0]['sum'] == $comparatorStats[0]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[0]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[0]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[0]['sum'] . '</span> VS <span class="red">' . $comparatorStats[0]['sum'] . '</span><br>';
                            }
                            //Creep Denies
                            if($statsPlayer[7]['sum'] < $comparatorStats[7]['sum']){
                                echo '<span class="red">' . $statsPlayer[7]['sum'] . '</span> VS <span class="green">' . $comparatorStats[7]['sum'] . '</span><br>';
                            }else if($statsPlayer[7]['sum'] == $comparatorStats[7]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[7]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[7]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[7]['sum'] . '</span> VS <span class="red">' . $comparatorStats[7]['sum'] . '</span><br>';
                            }
                            //Last Hits
                            if($statsPlayer[6]['sum'] < $comparatorStats[6]['sum']){
                                echo '<span class="red">' . $statsPlayer[6]['sum'] . '</span> VS <span class="green">' . $comparatorStats[6]['sum'] . '</span><br>';
                            }else if($statsPlayer[6]['sum'] == $comparatorStats[6]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[6]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[6]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[6]['sum'] . '</span> VS <span class="red">' . $comparatorStats[6]['sum'] . '</span><br>';
                            }
                        ?>
                        </p>
                    </div>
                </div>

                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5>Damage Dealt</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/damage.png" class="mb-3">
                        <p>
                        <b>Your's VS Their's</b><br>
                        <?php 
                            //Damage to enemy
                            if($statsPlayer[11]['sum'] < $comparatorStats[11]['sum']){
                                echo '<span class="red">' . $statsPlayer[11]['sum'] . '</span> VS <span class="green">' . $comparatorStats[11]['sum'] . '</span><br>';
                            }else if($statsPlayer[11]['sum'] == $comparatorStats[11]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[11]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[11]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[11]['sum'] . '</span> VS <span class="red">' . $comparatorStats[11]['sum'] . '</span><br>';
                            }
                            //damage to Tower
                            if($statsPlayer[12]['sum'] < $comparatorStats[12]['sum']){
                                echo '<span class="red">' . $statsPlayer[12]['sum'] . '</span> VS <span class="green">' . $comparatorStats[12]['sum'] . '</span><br>';
                            }else if($statsPlayer[12]['sum'] == $comparatorStats[12]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[12]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[12]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[12]['sum'] . '</span> VS <span class="red">' . $comparatorStats[12]['sum'] . '</span><br>';
                            }
                        ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row text-center justify-content-center d-flex mt-2">
                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5 class="card-title">XP Per Minute (XPM)</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/xp.png" class="mb-3">
                        <p class="card-text">
                        <b>Your's VS Their's</b><br>
                        <?php 
                            if($statsPlayer[5]['n'] < $comparatorStats[5]['n']){
                                echo '<span class="red">' . $statsPlayer[5]['n'] . '</span> VS <span class="green">' . $comparatorStats[5]['n']. '</span><br>';
                            }else if($statsPlayer[5]['n'] == $comparatorStats[5]['n']){
                                echo '<span class="yellow">' . $statsPlayer[5]['n'] . '</span> VS <span class="yellow">' . $comparatorStats[5]['n']. '</span><br>';
                            }else{
                                echo '<span class="green">' . $statsPlayer[5]['n'] . '</span> VS <span class="red">' . $comparatorStats[5]['n']. '</span><br>';
                            }
                        ?>
                        </p>
                    </div>
                </div>

                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5>Objective Kills</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/Attack.png" class="mb-3">
                        <p class="card-text">
                        <b>Your's VS Their's</b><br>
                        <?php 
                            //tower destroyed
                            if($statsPlayer[15]['sum'] < $comparatorStats[15]['sum']){
                                echo '<span class="red">' . $statsPlayer[15]['sum'] . '</span> VS <span class="green">' . $comparatorStats[15]['sum'] . '</span><br>';
                            }else if($statsPlayer[15]['sum'] == $comparatorStats[15]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[15]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[15]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[15]['sum'] . '</span> VS <span class="red">' . $comparatorStats[15]['sum'] . '</span><br>';
                            }
                            //neutral creep killed
                            if($statsPlayer[16]['sum'] < $comparatorStats[16]['sum']){
                                echo '<span class="red">' . $statsPlayer[16]['sum'] . '</span> VS <span class="green">' . $comparatorStats[16]['sum'] . '</span><br>';
                            }else if($statsPlayer[16]['sum'] == $comparatorStats[16]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[16]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[16]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[16]['sum'] . '</span> VS <span class="red">' . $comparatorStats[16]['sum'] . '</span><br>';
                            }
                            //courrier killed
                            if($statsPlayer[17]['sum'] < $comparatorStats[17]['sum']){
                                echo '<span class="red">' . $statsPlayer[17]['sum'] . '</span> VS <span class="green">' . $comparatorStats[17]['sum'] . '</span><br>';
                            }else if($statsPlayer[17]['sum'] == $comparatorStats[17]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[17]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[17]['sum'] . '</span><br>';
                            }else {
                                echo '<span class="green">' . $statsPlayer[17]['sum'] . '</span> VS <span class="red">' . $comparatorStats[17]['sum'] . '</span><br>';
                            }
                        ?>
                        </p>
                    </div>
                </div>

                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5>Death</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/death.png" class="mb-3">
                        <p class="card-text">
                        <b>Your's VS Their's</b><br>
                        <?php 
                            if($statsPlayer[1]['sum'] < $comparatorStats[1]['sum']){
                                echo '<span class="green">' . $statsPlayer[1]['sum'] . '</span> VS <span class="red">' . $comparatorStats[1]['sum']. '</span><br>';
                            }else if($statsPlayer[1]['sum'] == $comparatorStats[1]['sum']){
                                echo '<span class="yellow">' . $statsPlayer[1]['sum'] . '</span> VS <span class="yellow">' . $comparatorStats[1]['sum']. '</span><br>';
                            }else{
                                echo '<span class="red">' . $statsPlayer[1]['sum'] . '</span> VS <span class="green">' . $comparatorStats[1]['sum']. '</span><br>';
                            }
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </content>
</body>

</html>