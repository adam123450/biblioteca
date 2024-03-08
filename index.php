<!DOCTYPE html>
<html>
<head>
<title>Biblioteca</title>
</head>
<body>
<form action="index.php" method="post">
            <input type="file" name="input" id="input" accept="application/pdf">
            Solo .pdf 
            <br><br>
            <input type="submit" name="submit" value="Invia">
            <br><br>
            <?php
            echo "file: ";
            if (isset($_POST["input"])) {
                echo $_POST["input"];
            }
            <!-- un commento per prova -->     
            ?>
        </form>
</body>
</html>
