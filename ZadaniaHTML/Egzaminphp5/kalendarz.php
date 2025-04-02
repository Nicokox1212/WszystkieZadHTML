<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Organizer</title>
    <link rel="stylesheet" href="./styl5.css">
</head>

<body>
    <header>
        <section id="bannerOne">
            <img src="./logo1.png" alt="Mój kalendarz">
        </section>
        <section id="bannerTwo">
            <h2>KALENDARZ</h2>

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'egzamin5');
        $zapytanie = 'SELECT miesiac, rok FROM zadania WHERE dataZadania = "2020-07-01";';
        $wynik = mysqli_query($connect, $zapytanie);
        while($obiekt = mysqli_fetch_row($wynik) ){
            echo "<h3>miesiac: ".$obiekt[0]." rok ".$obiekt[1]."</h3>";
        }
        mysqli_close($connect)
        ?>
        

        </section>

    </header>
    <main>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'egzamin5');
        $zapytanie1 = 'SELECT dataZadania, wpis FROM zadania WHERE miesiac = "lipiec";';
        $wynik1 = mysqli_query($conn, $zapytanie1);
        while($obiekt1 = mysqli_fetch_row($wynik1)){
            echo "<section class='dzien'><h5>".$obiekt1[0]."</h5><p>".$obiekt1[1]."</p></section>";
        }
        ?>
    </main>
    <footer>
        <form action="./kalendarz.php" method="POST">
            <label>dodaj wpis:
                <input type="text" name="wpis">
            </label>
            <button name="wyslij">DODAJ</button>
        </form>
        <?php
        if (isset($_POST['wyslij'])){
        $wpis = $_POST['wpis'];
        $conn2 = mysqli_connect('localhost', 'root', '', 'egzamin5');
        $zapytanie2 = "UPDATE zadania SET wpis='$wpis' WHERE dataZadania = '2020-07-13';";
        $wynik2 = mysqli_query($conn2, $zapytanie2);
        mysqli_close($conn2);
        }

        ?>
       
        <p>Stronę wykonał: 0000000000000</p>
    </footer>
</body>

</html>