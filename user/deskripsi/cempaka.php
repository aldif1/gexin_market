<?php
include('../../admin/db/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Cempaka</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
    <link rel="stylesheet" href="../css/styles.css">

</head>

<body>
    <div class="wrapper">
        <nav class="nav-ds position-fixed navbar navbar-expand-lg ">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Eksplor</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="tour-info">
            <?php
                $sql = mysqli_query($con, "SELECT * FROM bio_cempaka ORDER BY id ASC") or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)) {
                        echo '
                            <center>
                                <h3>'.$data['judul'].'</h3>
                            <br>
                            <img class="profilimg" style="border-radius:12px;" src="../../admin/cempaka/images/'.$data['foto'].'" style="border-radius:12px;padding:1em 0">
                            <a href="../../vt_cempaka/index.html"><br><br>
                            <input type="submit" class="tourbtn" value="Mulai Tur">
                            </a>
                            </center>
                            ';
                        echo nl2br('<p class="p tourp" style="margin-bottom:-2em;text-align:justify;text-justify: inter-word;">'.$data['deskripsi'].'</p>');
                    }
                } else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';
                }
            ?>
        </div>
        <center>
            <hr style="width:70%">
        </center>

        <div class="map">
            <div class="title d-flex">
                <h2>Peta Lokasi</h2>
                <div class="card__info">
                    <a target="_blank"
                        href="https://www.google.com/maps/dir//Desa+Wisata+Cempaka,+RT.001%2FRW.003,+Gardu,+Cempaka,+Bumijawa,+Tegal,+Jawa+Tengah+52466/@-7.1745518,109.0682329,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e6f9195bd825cad:0x4cee078548c5836c!2m2!1d109.0702654!2d-7.1746547">
                        <p class="card__price text--medium">Lihat Rute</p>
                    </a>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.57912326872!2d109.06823292162389!3d-7.174551817469833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f9195bd825cad%3A0x4cee078548c5836c!2sDesa%20Wisata%20Cempaka!5e0!3m2!1sid!2sid!4v1634477299782!5m2!1sid!2sid"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <nav class="nav-mb position-fixed fixed-bottom navbar navbar-expand-lg ">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Eksplor</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
<script src="../user/js/wow.js"></script>
<script>
new WOW().init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/fontawesome.js"></script>


</html>