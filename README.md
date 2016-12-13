##SteamAPI-Parser is a small php file that you can import using the require or include functions in PHP!

this file will make an array with your steam games (or someone else's games) using the SteamAPI

the variables that you'll be using are:
+ **[REQUIRED!] $steamAPIKey** -> this variable should be your API key remember to set it before you include steam.php
+ **[REQUIRED!] $steamID** -> this variable should be your Steam ID remember to set it before you include steam.php
+ **$steam** -> your global variable, it is an array of all the values in the JSON response from the API
+ **$steam['game_count']** -> returns the number of games you own
+ **$steam['games']** -> an array with all your steam games
+ **$steam['games']['appid']** -> the id of the game you're displaying
+ **$steam['games']['playtime_forever']** -> the total amount of time you've played the game you're displaying

that's all you need to know, enjoy!
