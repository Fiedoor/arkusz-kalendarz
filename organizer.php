<!DOCTYPE html>
<html lang="pl">
<?php
$conn = mysqli_connect('localhost', 'root', '', 'kalendarz');
if (isset($_POST['wyd'])) {
    $wyd = $_POST['wyd'];
    $q2 = "UPDATE `zadania` SET `wpis`='$wyd' WHERE dataZadania='2020-08-09'";
    mysqli_query($conn, $q2);
}
?>

<head>
    <meta charset="UTF-8">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>
    <header>
        <div id="left">
            <h1>Organizer:Sierpień</h1>
        </div>
        <div id="mid">
            <form action="organizer.php" method="post">
                <label for="wyd">Zapisz wydarzenie:
                    <input type="text" name="wyd">
                </label>
                <input type="submit" value="OK">
            </form>
        </div>
        <div id="right">
            <img src="logo2.png" alt="sierpień">
        </div>
    </header>
    <main>
        <?php
        $q1 = "SELECT dataZadania,wpis FROM `zadania` WHERE miesiac='sierpien'";
        $res = mysqli_query($conn, $q1);
        foreach ($res as $row) {
            echo "<div class='block'>";
            echo "<h5>" . $row['dataZadania'] . "</h5>";
            echo "<hp>" . $row['wpis'] . "</p>";
            echo "</div>";
        }
        mysqli_close($conn);
        ?>
    </main>
    <footer>
        Stronę wykonał: Stanisław Fiedoruk 5J
    </footer>
</body>

</html>