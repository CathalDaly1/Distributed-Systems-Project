<!DOCTYPE html>
<html>


<style>
    table, th, td {
        border: 1px solid black;
    }

    #playerStats {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #playerStats td, #customers th {
        border: 1px solid #000FFF;
        padding: 8px;
    }

    #playerStats tr:nth-child(even){background-color: #f2f2f2;}

    #playerStats tr:hover {background-color: #ddd;}

    #playerStats th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: centre;
        background-color: #000FFF;
        color: white;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #000FFF;
    }

</style>
<head>
    <meta charset="UTF-8">
    <?php include "templates/header.php"; ?>
    <link rel="stylesheet" type="text/css" href="Styling.css" />
</head>
<body>
<div class="header">
    <h2>Tic-Tac-Toe Player stats</h2>
    <table id="playerStats">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Wins</th>
            <th>Losses</th>
            <th>Draws</th>
        </tr>
        <tr>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
            <td>Test</td>
        </tr>
    </table>
    <br><button onclick="location.href='createNewGame.php'" type="button" class="button button1"><b>Back</b></button>
</div>
</body>
</html>
