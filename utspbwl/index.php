<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMESANAN TIKET HAIROS</title>
    <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>
<body>
    
    <aside>
        
        <header>
                  <img src="layouts/assets/img/profil.png" class="brand">
                  <div class="user">Louliq Rifky</div>
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        <img class="icon" src="layouts/assets/img/home.png" alt="">HOME
                    </a>
                </li>
                <li>
                    <a href="index.php?hal=tiket_tampil">
                        <img class="icon" src="layouts/assets/img/tiket.png" alt="">TICKET
                    </a>
                </li>
                <li>
                    <a href="index.php?hal=pengunjung_tampil">
                    <img class="icon" src="layouts/assets/img/pengunjung.png" alt="">PENGUNJUNG
                </a>
                </li>
                <li>
                    <a href="index.php?hal=buyyer_tampil">
                    <img class="icon" src="layouts/assets/img/buyyer.png" alt="">BUYYER
                </a>
                </li>
            </ul>
        </nav>
    </aside>

    <main>
         <article>
                <?php 
                     require_once "vendor/autoload.php";
                     require_once "inc/Koneksi.php";
                     
                        if (isset($_GET['hal'])) {
                            require $_GET['hal'] . ".php";
                    } else {
                        require "main.php";
                    }
                ?>
        </article>
       
    </main>
    <footer>Web Design By Louliq Rifky 2023</footer>

</body>
</html>