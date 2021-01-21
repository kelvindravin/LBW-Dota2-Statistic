<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Stats</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
    <header>
        <h1 class="text-center mt-5">
            Your All Time Stats
        </h1>
        <h5 class="text-center mt-2">want to be competitive? Try to compare your stats with your friend!</h5>
        <div class="mt-3 text-center">
            <div class="text-center">
                <form action="compareByID" class="" enctype="multipart/form-data" method="post">
                    <input type="text" id="playerid" name="playerid" placeholder="Dota 2 Player ID" required>
                    <input type="submit" class="btn btn-info"  value="Cari">
                </form>
                <form action="compareByPersonaName" class="text-center mt-3" enctype="multipart/form-data" method="post">
                    <input type="text" id="playerpersona" name="playerpersona" placeholder="Dota 2 Persona Name" required>
                    <input type="submit" class="btn btn-info"  value="Cari">
                </form>
            </div>
        </div>

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
                        <?php if( $stats[4]['n'] <= 400){?>
                        <p class="card-text">You have snagged <span class="text-success"><?php echo $stats[4]['n']; ?> </span> gold per minute.
                            it's below average! Git gud</p>
                        <?php 
                        }else{ ?>
                        <p class="card-text">You have snagged <span class="text-success"><?php echo $stats[4]['n']; ?> </span> gold per minute. 
                            Ooohhhh shiny! You should join pro team</p>
                        <?php } ?>
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
                        <?php if($stats[5]['n'] <= 500){ ?>
                            <p class="card-text">You have received <span class="text-success"><?php echo $stats[5]['n']; ?> </span> xp per minute. The more you know! It's really low you're slow learner huh?
                        <?php }else{ ?>
                            <p class="card-text">You have received <span class="text-success"><?php echo $stats[5]['n']; ?> </span> xp per minute. The more you know! You're above average nice.
                        <?php }?>
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