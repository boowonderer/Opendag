<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBO Utrecht</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="brand"><a href="#">MBO Utrecht</a></div>

        <nav>
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./enquete.html">Survey</a></li>
                <li><a href="./projects.html">Projects</a></li>
                <li><a href="./dashboard.php"></a></li>
            </ul>
        </nav>
    </header>
<table>
  <thead>
    <tr>
      <th>Naam</th>
      <th>Vraag1</th>
      <th>Vraag2</th>
      <th>Vraag3</th>
      <th>Vraag4</th>
      <th>Vraag5</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "repair";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT * FROM reparatie";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo  "<br><tr>
          <td data-column='Naam'> " . $row["Naam"] . "</td>
          <td data-column='Vraag1'>" . $row["Vraag1"] . "</td>
          <td data-column='Vraag2'>" . $row["Vraag2"] . "</td>
          <td data-column='Vraag3'>" . $row["Vraag3"] . "</td>
          <td data-column='Vraag4'>" . $row["Vraag4"] . "</td>
          <td data-column='Vraag5'>" . $row["Vraag5"] . "</td>
          </tr>";
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
  </tbody>
</table>
    <script src="./javascript/index.js"></script>
  </body>
</html>


