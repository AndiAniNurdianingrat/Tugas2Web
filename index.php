<?php

$sumber = 'https://rs-bed-covid-api.vercel.app/api/get-provinces';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RS COVID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-3"">Ketersediaan Rumah Sakit Pasien Covid-19 disetiap Provinsi</h1>
    <div class="container">
        <div class="row">
            <?php foreach ($data ['provinces'] as $row){
            ?>
            <div class="col-4 mt-4">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h5><?php echo $row['id']?></h5>
                        <hr>
                        <p class="card-text"><?php echo $row['name']?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>