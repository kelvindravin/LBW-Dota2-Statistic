<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Stats</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <h1 class="text-center mt-5">
            Your All Time Stats
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
                        <p class="card-text">You have snagged <span class="text-success"><?php echo $stats[4]['n']; ?> </span> gold per minute.
                            Ooohhhh shiny!</p>
                    </div>
                </div>

                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5>Kill</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/Kill.png" class="mb-3">
                        <p class="card-text">You have killed <span class="text-danger"><?php echo $stats[0]['sum']; ?></span> total of heroes,
                        with <span class="text-danger"><?php echo $stats[7]['sum']; ?></span> creep denies and <span class="text-danger"><?php echo $stats[6]['sum']; ?></span> total of 
                        last hits!
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
                        <p class="card-text">You have total damages of <span class="text-danger"><?php echo $stats[11]['sum']; ?></span> to enemy heroes, 
                        <span class="text-danger"><?php echo $stats[12]['sum']; ?></span> damage to enemy towers.
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
                        <p class="card-text">You have received <span class="text-success"><?php echo $stats[5]['n']; ?> </span> xp per minute. The more you know!
                    </div>
                </div>

                <div class="card col-sm-3 mx-2" style="width: 18rem;">
                    <div class="card-img-top text-center mt-3 stats-card-top">
                        <h5>Objective Kills</h5>
                    </div>
                    <hr>
                    <div class="card-body">
                        <img src="./assets/images/Stats/Attack.png" class="mb-3">
                        <p class="card-text">You have destroyed <span class="text-danger"><?php echo $stats[15]['sum']; ?></span> total of towers,
                        <span class="text-danger"><?php echo $stats[16]['sum']; ?></span> neutral creep killed and <span class="text-danger"><?php echo $stats[17]['sum']; ?></span> total of 
                        courrier killed!
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
                        <p class="card-text">You have total death of <span class="text-danger"><?php echo $stats[1]['sum']; ?></span>. Not all of us is perfect, it's fine.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </content>
</body>

</html>