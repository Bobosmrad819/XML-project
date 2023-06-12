<!DOCTYPE html>
<html>
<head>
    <title>XML Data Table</title>
    <style>
        header{
            footer {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
            color:#333;
        }
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        footer {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
            color:#333;
        }
        footer a {
            color: #339966;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tablica kamiona ucitana iz XML datoteke</h1>
    </header>

    <table>
        <tr>
            <th>Naziv</th>
            <th>Snaga</th>
            <th>Payload</th>
            <th>Model</th>
        </tr>
        <?php
        $xmlFile = 'kamioni.xml';

        // Provjerite postoji li datoteka
        if (file_exists($xmlFile)) {
            // Učitajte XML datoteku
            $xml = simplexml_load_file($xmlFile);

            // Iterirajte kroz svaki truck element
            foreach ($xml->truck as $truck) {
                echo "<tr>";
                echo "<td>" . $truck->naziv . "</td>";
                echo "<td>" . $truck->snaga . "</td>";
                echo "<td>" . $truck->payload . "</td>";
                echo "<td>" . $truck->model . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>XML datoteka ne postoji.</td></tr>";
        }
        ?>
    </table>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Juraj Poljak | <a href="prva.php">Prva stranica</a></p>
    </footer>
</body>
</html>
