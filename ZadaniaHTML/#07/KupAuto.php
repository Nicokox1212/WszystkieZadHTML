<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1><em>KupAuto!</em> Internetowy Komis Samochodowy</h1>
    </header>
    <main>
        <section id="baner">
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'kupauto');
            $zapytanie = 'SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id=10;';
            $query = mysqli_query($conn, $zapytanie);
            while($obiekt = mysqli_fetch_row($query)) {
                echo '<img src="' . $obiekt[5] . '" alt="oferta dnia"><h4>Oferta Dnia: Toyota ' . $obiekt[0] . '</h4><p>Rocznik: ' . $obiekt[1] . ', przebieg: ' . $obiekt[2] . ', rodzaj paliwa: ' . $obiekt[3] . '</p><h4>Cena: ' . $obiekt[4] . '</h4>'; }

            ?>
        </section>

        <section id="oferty">
            <h2>Oferty wyróznione</h2>
            <?php
            $conn1 = mysqli_connect('localhost', 'root', '', 'kupauto');
            $zapytanie1 = ' SELECT nazwa, model, rocznik, cena, zdjecie FROM samochody JOIN marki ON samochody.marki_id = marki.id WHERE wyrozniony=1 LIMIT 4;';
            $query1 = mysqli_query($conn1, $zapytanie1);
            while($obiekt1 = mysqli_fetch_row($query1)) {
                echo "<div class='blok'><img src='" . $obiekt1[4] . "' alt='" . $obiekt1[1] . "'><h4>" . $obiekt1[0] . " " . $obiekt1[1] . "</h4><p>Rocznik: " . $obiekt1[2] . "</p><h4>Cena: " . $obiekt1[3] . "</h4></div>";}

            ?>

        </section>
        <section id="marki">
            <h2>Wybierz markę</h2>
            <form action="KupAuto.php" method="post">
                <select name="marka">
                <?php
            $conn2 = mysqli_connect('localhost', 'root', '', 'kupauto');
            $zapytanie2 = 'SELECT nazwa FROM marki;';
            $query2 = mysqli_query($conn2, $zapytanie2);
            while($obiekt2 = mysqli_fetch_row($query2)) {
                echo "<option>".$obiekt2[0]."</option>";}

            ?>
                </select>
                <button type="submit" name="wyszukaj">Wyszukaj</button>


            </form>
            <?php
                if (isset($_POST['wyszukaj'])){
                $marka = $_POST["marka"];
            $conn3 = mysqli_connect('localhost', 'root', '', 'kupauto');
            $zapytanie3 = "SELECT nazwa, model, cena, zdjecie, marki.nazwa FROM samochody JOIN marki ON samochody.marki_id = marki.id WHERE nazwa = '$marka';";
            $query3 = mysqli_query($conn3, $zapytanie3);
            while($obiekt3 = mysqli_fetch_array($query3)) {
                echo "<div class = 'blok'>";
                echo "<img src='$obiekt3[3]' alt='$obiekt3[0]'>";
                echo "<h4>$obiekt3[4] $obiekt3[1]</h4>";
                echo "</div>";
            }
        }
        mysqli_close($conn3);

            ?>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: </p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </footer>
</body>

</html>