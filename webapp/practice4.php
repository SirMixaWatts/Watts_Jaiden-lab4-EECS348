<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table { border-collapse: collapse; margin: 20px 0; }
        td { border: 1px solid black; padding: 8px; text-align: center; }
        .header { background-color: #f2f2f2; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        echo "<h2>Table for $num:</h2>";
        echo "<table>";
        
        // Header row
        echo "<tr><td class='header'>×</td>";
        for ($i = 1; $i <= $num; $i++) {
            echo "<td class='header'>$i</td>";
        }
        echo "</tr>";
        
        // Table body
        for ($i = 1; $i <= $num; $i++) {
            echo "<tr>";
            echo "<td class='header'>$i</td>";
            for ($j = 1; $j <= $num; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    
    <br>
    <a href="practice4.html">Go Back</a>
</body>
</html>