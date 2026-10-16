<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Islandia</title>
</head>
<body>
    <?php 
        $conn = mysqli_connect("localhost", "root", "", "islandia")
    ?>
    <header>
        <h1><a href="islandia.php">Zwiedzaj Islandię</a></h1>
    </header>
    <aside>
        <h3>Do zwiedzania</h3>
        <ul>
            <li>Wodospady:
                <?php 
                $query = 'SELECT nazwa FROM obiekty WHERE panstwo = "Islandia" AND idRodzaj = 10';
                $result = mysqli_query($conn, $query);
                echo "<ol>";
                while($res = mysqli_fetch_array($result)){
                    echo "<li>$res[0]</li>";
                }
                echo "</ol>"
                ?>
            </li>
            <li>Siedliska zwierząt:
                <?php
                    $query = 'SELECT nazwa FROM obiekty WHERE panstwo = "Islandia" AND idRodzaj = 14';
                    $result = mysqli_query($conn, $query);
                    echo "<ol>";
                    while($res = mysqli_fetch_array($result)){
                        echo "<li>$res[0]</li>";
                    }
                    echo "</ol>"
                ?>
            </li>
        </ul>
    </aside>
    <main>
        <section>
            <h2>Opis miejsca</h2>
        </section>
    </main>
    <footer>
        <hr>
        <p>Autor:0000000000000</p>
    </footer>
    <?php mysqli_close($conn)?> 
</body>
</html>