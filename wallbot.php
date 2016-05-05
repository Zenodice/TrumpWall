<?php

/*
 https://api.telegram.org/bot189151682:AAE-gybyHHcsMz2UE-YHqX6pG4Eo7GcqhKE/setWebHook?url=https://github.com/Zenodice/TrumpWall/blob/master/wallbot.php
*/

define('BOT_TOKEN', '189151682:AAE-gybyHHcsMz2UE-YHqX6pG4Eo7GcqhKE');
define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');

$content = file_get_contents("php://input");
$update = json_decode($content, true);
$chatID = $update["message"]["chat"]["id"];
		
$reply =  sendMessage();
		
$sendto =API_URL."sendmessage?chat_id=".$chatID."&text=".$reply;
file_get_contents($sendto);

function sendMessage(){
$message = "test";
return $message;
}

/*
// read incoming info and grab the chatID & message
$content = file_get_contents("php://input");
$update = json_decode($content, true);

$chatID = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];


switch($message) {

	case "MAGA":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "ung":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "ungh":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "ungh shit":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "shi":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "oui":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "non":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "ouis":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "pas besoin":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
	case "besoin":
			sendMessage($chatID, "The wall just got 10 feet higher!");
			break;
}

function sendMessage ($chatID, $message) {
       
        $sendto = API_URL."sendmessage?chat_id=".$chatID."&text=".$message;
        file_get_contents($sendto);
       
}
 */
 
 
 
 
?>
