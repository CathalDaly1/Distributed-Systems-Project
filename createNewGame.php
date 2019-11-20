<html lang="en">
<style>
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #000FFF;
    }

</style>

<head>
    <meta charset="UTF-8">
    <title>Start New Game</title>
    <link rel="stylesheet" type="text/css" href="Styling.css" />
</head>
<body>
<?php include "templates/header.php"; ?>
<form method="post" action="" name="">
    <fieldset>
        <h2>Tic-Tac-Toe Game Modes</h2>
        <br>
        <form actoion="#" method="post">
            <label>Select mode</label>
            <form action="#" method="post">
                <select name="myList">
                    <option value="Singe Player">Singe Player</option>
                    <option value="Multi Player">Multi Player</option>
                    <option value="Play with Friend">Play with Friend</option>
                </select>
                <button type="submit" name="submit" class="button button1"><b>Submit</b></button>
            </form>
            <br>
            <?php
            if(isset($_POST['submit'])){
                $selected_val = $_POST['myList'];  // Storing Selected Value In Variable
                echo "You have selected :" .$selected_val;  // Displaying Selected Value
            }
            ?>
            <br>
            <label>Start a game</label>
            <button onclick="location.href='game.php'" type="button" class="button button1"><b>Create Game</b></button>
            <br><br>
            <label>Player Stats</label>
            <button onclick="location.href='playerStats.php'" type="button" class="button button1"><b>Player Stats</b></button>
            <br><br>
            <label>Leaderboard</label>
            <button onclick="location.href='leaderboard.php'" type="button" class="button button1"><b>Leaderboard</b></button>
            <br><br>
            <label>Join Games</label>
            <button onclick="location.href='joinGame.php'" type="button" class="button button1"><b>Join Game</b></button>
            <br>
    </fieldset>
</form>
</body>
</html>