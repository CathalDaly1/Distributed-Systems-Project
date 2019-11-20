<!DOCTYPE html>
<html>


<style>
    table, th, td {
        border: 1px solid black;
    }

    #leaderboard {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #leaderboard td, #customers th {
        border: 1px solid #000FFF;
        padding: 8px;
    }

    #leaderboard tr:nth-child(even){background-color: #f2f2f2;}

    #leaderboard tr:hover {background-color: #ddd;}

    #leaderboard th {
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

    <link rel="stylesheet" type="text/css" href="Styling.css" />
</head>
<body>
<?php include "templates/header.php"; ?>
<div class="header">
    <h2>Leader Board</h2>
    <table id="leaderboard">
        <tr>
            <th>Game ID</th>
            <th>Player 1</th>
            <th>Player 2</th>
            <th>Game status</th>
            <th>Game Date</th>
        </tr>
        <tr>
            <td>Test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
    </table>
    <br><button onclick="location.href='createNewGame.php'" type="button" class="button button1"><b>Back</b></button>
</div>
</body>
</html>