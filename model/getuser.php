<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = $_GET["q"];
$type = $_GET["type"];


include '../includes/config.php';
include '../includes/database.php';

$sql=" SELECT * FROM widgets WHERE Name LIKE '$q%'";
$result = mysqli_query($mysqli,$sql);


if ($q == ""){

}else {
    while ($row = mysqli_fetch_array($result)) {
        echo "<p id='" . $row['image'] . "' onclick=\"showUser(this.id,'answer')\" style=\"cursor:pointer\">" . $row['image'] . "</p><br>";
        $id = $row['image'];
    }
    $sql2=" SELECT * FROM widgets WHERE Name LIKE '$id'";
    $result2 = mysqli_query($mysqli,$sql2);


    if ($type == "answer") {
        echo "<table>
    <tr>
    <th>Code</th>
    <th>Name</th>
    <th>Continent</th>
    <th>Region</th>
    </tr>";
        while ($row = mysqli_fetch_array($result2)) {
            echo "<tr>";
            echo "<td>" . $row['text'] . "</td>";
            echo "<td>" . $row['image'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
mysqli_close($mysqli);
?>
</body>
</html>