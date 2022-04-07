<html>

    <body>

        <form action="conf.php" method = "POST">        
            <fieldset>
                <legend>
                    Connessione DataBase:
                </legend>

                    query <input type="text" name="query">
                    <input type="submit" value="Fatto">

            </fieldset>
        </form>

<?php

$hostname = "miele.riccardo.tave.osdb.it";
$user = "c185_uno";
$password = "Az-92604";
$db = "c185_uno";

        $conn = new mysqli($hostname, $user, $password, $db);

            if ($conn ->connect_error) { 

                die('connessione fallita:'  . $conn->connect_error); 
        }
        else{ 
            echo 'connessione riuscita!';
        }

        $query = $_POST['query'];
        

        $result = $conn->query($query);
        echo $result;

?>

</html>
