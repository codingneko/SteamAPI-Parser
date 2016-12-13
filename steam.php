<div class="master"><br><br>
    <?php
    $json_data = file_get_contents('http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/?key='. $steamAPIKey .'&steamid='. $steamID .'&format=json');
    $json = json_decode($json_data, true);
    $steam = $json['response'];
    ?>
