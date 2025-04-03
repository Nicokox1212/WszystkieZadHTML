<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>
    <section id="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "egzamin44bt") ;
        $zapytanie = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0;";
        $wynik = mysqli_query($conn,$zapytanie);
        while($query = mysqli_fetch_array($wynik)) {
            echo "$query[0].$query[1], cena: $query[2]<br>";
        }
        mysqli_close($conn);
        ?>


    </section>
    <main>
        <section id="lewy">
            <h3>NAJTANIEJ</h3>
            <table>
                <tr>
                    <td>Włochy</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Francja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Hiszpania</td>
                    <td>od 1400 zł</td>
                </tr>
            </table>
        </section>
        <section id="srodkowy">
            <h3>TU BYLIŚMY</h3>
            <?php
        $conn = mysqli_connect("localhost", "root", "", "egzamin44bt") ;
        $zapytanie = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
        $wynik = mysqli_query($conn,$zapytanie);
        while($query = mysqli_fetch_array($wynik)) {
            echo "<img src='$query[0]' alt='$query[1]'>";
        };
        mysqli_close($conn);
        ?>
        </section>
        <section id="prawy">
            <h3>SKONTAKTUJ SIĘ</h3>
            <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </section>
    </main>

    <footer>
        <p>Stronę wykonał: Chriskyy#0181</p>
    </footer>
</body>

</html>