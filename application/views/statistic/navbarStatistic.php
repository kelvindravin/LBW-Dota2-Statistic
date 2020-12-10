<!-- Navigation -->
<html>
    <?php 
        $data = $this->session->userdata('user_data');
        $personaName = $data["profile"]["personaname"];
    ?>
    <body>
    <nav class="navbar sticky-top navbar-expand-lg home-navbar">
        <img src="./assets/images/Dota 2 Icon.png" width="70px" height="70px" class="mr-5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('home')?>">Matches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('stats')?>">Stats</a>
                    </li>
                </ul>
            </div>
            <div class="txt-size-20 float-right mx-5 text-white">Hello <span class="text-warning"><?php echo $personaName;?></span></div>
            <a class="nav-link logout-id-btn" href="<?php echo site_url('changeID') ?>">Change ID</a>
        </nav>
    </body>
</html>