<?php
include ('../config.php');
switch ($_REQUEST['action']){
    case "sendMessage":
        //echo 'sending response back from php page';
        //global $pdo;
        session_start();
        $query = $pdo->prepare("INSERT INTO messages SET user=?, message=?");
        $row = $query->execute([$_SESSION['username'], $_REQUEST['message']]);

        if ($row){
            echo 1;
            exit;
        }

        break;

    case "getMessages":
        //echo 'working';
        $query=$pdo->prepare("SELECT * FROM messages ORDER BY date ASC");
        $row=$query->execute();
        $rs=$query->fetchAll(PDO::FETCH_OBJ);
        //echo var_dump($rs);
    $chat='';
    foreach ($rs as $message){
        //$chat.=$message->message.'<br>';
        $chat .= '<div class="single-msg">
<strong>'.$message->user.': </strong> '.$message->message.'
<span>'.date('d-m-Y h:i a', strtotime($message->date)).'</span>
</div>';
    }
    echo $chat;
        break;
}
?>