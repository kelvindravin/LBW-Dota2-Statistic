<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dota 2 Statistics - Home</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
    <?php } ?>
    <header>
        <h1 class="text-center mt-5">
            Welcome to Dota 2 Statistics
        </h1>
    </header>

    <content>
        <div class="container mt-5">
            <h4 class="text-center">Tentang Dota 2 Statistic</h4>
            <p align="justify" class="mt-3">
                Dota 2 merupakan sebuah multiplayer online battle arena (MOBA) yang dipublikasi oleh
                Valve. DImana permainan ini akan dimainkan oleh kedua belah tim yang dikategorikan sebagai
                Radiant ataupun Dire, dimana kedua tim ini memiliki tujuan utama untuk menghancurkan
                “Ancient” dari lawannya. Video game ini menduduki peringkat dua (sumber:
                <a href="https://steamcharts.com/">Steam Charts</a>) dalam popularitas video game yang dimiliki oleh steam, dengan
                jumlah pemain yang pernah terdaftar mencapai sebelas juta pemain individual. Oleh karena itu,
                dibutuhkan suatu sistem untuk mencari suatu statistic dari seorang player. Berdasarkan kebutuhan itulah, Dota 2 Statistic ini ada.
            </p>

            <div class="mt-5">
                <h4 class="text-center">Cari Player Berdasarkan Dota 2 PlayerID</h4>
                <form action="searchByID" class="text-center mt-3" enctype="multipart/form-data" method="post">
                    <input type="text" id="playerid" name="playerid" placeholder="Dota 2 Player ID">
                    <input type="submit" value="Cari">
                </form>
            </div>

            <div class="mt-5">
                <h4 class="text-center">Cari Steam PlayerID Berdasarkan Dota 2 Persona Name</h4>
                <form action="searchByPersonaName" class="text-center mt-3" enctype="multipart/form-data" method="post">
                    <input type="text" id="playerpersona" name="playerpersona" placeholder="Dota 2 Persona Name">
                    <input type="submit" value="Cari">
                </form>
            </div>
        </div>
    </content>
</body>

</html>