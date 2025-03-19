<?php
    if (isset($_POST["lowisko"]) && isset($_POST["data"]) && isset($_POST["sedzia"])){
        $lowisko = $_POST["lowisko"];
        $data = $_POST["data"];
        $sedzia = $_POST["sedzia"];
    $polaczenie = mysqli_connect('localhost', 'root', '', 'wedkarstwo4bt');
    $kwerenda = "INSERT INTO zawody_wedkarskie VALUES (NULL,0,$lowisko,'$data', '$sedzia');";
    mysqli_query($polaczenie, $kwerenda);
    mysqli_close($polaczenie);
    }

    else {
        echo "Błędne wyłowanie strony";
    }
?>