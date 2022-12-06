<?php include("../landingpage/header.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBO Utrecht</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../landingpage/style.css">

</head>
git pu
<body>

    <form action="upload.php" method="POST">
        <table>
            <tr>
                <td class="enquete">Enquête</td>
            </tr>
            <tr>
                <td class="name">
                    Naam + Achternaam:
                    <input type="text" name="naam">
                </td>
            </tr>
            <tr>
                <td>
                    1) Voldoet de open dag en de informatie die je hebt ontvangen aan jouw verwachting?
                    <input type="radio" name="vraag1" value="O"> O
                    <input type="radio" name="vraag1" value="V"> V
                    <input type="radio" name="vraag1" value="G"> G
                </td>
            </tr>
            <tr>
                <td>
                    2) Wat vond je van vakinhoudelijke voorlichting?
                    <input type="radio" name="vraag2" value="O"> O
                    <input type="radio" name="vraag2" value="V"> V
                    <input type="radio" name="vraag2" value="G"> G
                </td>
            </tr>
            <tr>
                <td>
                    3) Wat vond je van gesprek met studenten
                    <input type="radio" name="vraag3" value="O"> O
                    <input type="radio" name="vraag3" value="V"> V
                    <input type="radio" name="vraag3" value="G"> G
                </td>
            </tr>
            <tr>
                <td>
                    4) Heb je de schoolsfeer als positief ervaren?
                    <input type="radio" name="vraag4" value="O"> O
                    <input type="radio" name="vraag4" value="V"> V
                    <input type="radio" name="vraag4" value="G"> G
                </td>
            </tr>
            <tr>
                <td>5) Waren de infomatie die je kreeg goed?
                    <input type="radio" name="vraag5" value="O"> O
                    <input type="radio" name="vraag5" value="V"> V
                    <input type="radio" name="vraag5" value="G"> G
                </td>
            </tr>
            <tr class="sumbit-button">
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>

<?php include("../landingpage/footer.php");?>