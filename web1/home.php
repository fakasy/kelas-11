<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <header>
                <ul>
                    <li><a href="home.php?halaman=beranda">Beranda</a></li>
                    <li><a href="home.php?halaman=biodata">Biodata</a></li>
                    <li><a href="home.php?halaman=form">Form</a></li>
                    <li><a href="home.php?halaman=tabel">Tabel</a></li>
                    <li><a href="home.php?halaman=box">BOX CSS</a></li>
                </ul>
            </header>
        </div>
    </div>
    <?php 
        if (isset($_GET['halaman'])) {
            $halaman = $_GET['halaman'];

            switch ($halaman) {
                case 'beranda':
                    require('beranda.php');
                    break;

                case 'biodata':
                    require('biodata.php');
                    break;
                case 'form':
                    require('form.php');
                    break;
                case 'tabel':
                    require('tabel.php');
                    break;
                case 'box':
                    require('box.php');
                    break;
                
                default:
                   require('beranda.php');
                    break;
            }
        }

    ?>
    </body>
</html>