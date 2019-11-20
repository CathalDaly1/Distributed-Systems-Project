<!DOCTYPE html>
<html>


<style>
    table, th, td {
        border: 1px solid black;
    }

    #joinGame {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #joinGame td, #customers th {
        border: 1px solid #000FFF;
        padding: 8px;
    }

    #joinGame tr:nth-child(even){background-color: #f2f2f2;}

    #joinGame tr:hover {background-color: #ddd;}

    #joinGame th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
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
    <h2>Tic-Tac-Toe Open Games</h2>
    <table id="joinGame">
        <tr>
            <th>Game ID</th>
            <th>Host</th>
            <th>Game Date</th>
            <th>Select</th>
        </tr>
        <tr>
            <td>Test</td>
            <td>test</td>
            <td>test</td>
            <td><button onclick="location.href=''" type="button" class="button button1"><b>Join</b></button></td>
        </tr>
        <tr>
            <td>Test</td>
            <td>test</td>
            <td>test</td>
            <td><button onclick="location.href=''" type="button" class="button button1"><b>Join</b></button></td>
        </tr>
    </table>
</div>
<br><button onclick="location.href='createNewGame.php'" type="button" class="button button1"><b>Back</b></button>
</body>
</html>

