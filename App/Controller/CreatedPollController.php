<?php 
namespace App\Controller;
use App\Model\CreatedPollModel;

class CreatedPollController{

    public function __construct()
    {
        $this->model = new CreatedPollModel();
    }


    public function pollResult($pollId){
        
        $pollId = $_GET["poll_id"];
        $getPoll = $this->model->getPoll($pollId);
        $getPollAcceptedId = $getPoll[0]->accepted_id;
        $getPollFirstAnswer = $getPoll[0]->poll_answer1;
        $getPollSecondAnswer = $getPoll[0]->poll_answer2;
       // faire le calcul des scores
       $getPollResult = $this->model->getPollResult($pollId);
       $pollId = $getPollResult[0]->poll_id; 
       $votesAnswer1 = $getPollResult[0]->poll_answer1_votes; 
       $votesAnswer2 = $getPollResult[0]->poll_answer2_votes; 
       $totalVotes = $votesAnswer1 + $votesAnswer2;
       if($votesAnswer1 == 0 && $votesAnswer2 == 0){
           $votesAnswer1Percents = 0;
           $votesAnswer2Percents = 0;
       }else if($votesAnswer1 == 0 && $votesAnswer2 !== 0){
           $votesAnswer1Percents = 0;
           $votesAnswer2Percents = round(($votesAnswer2/$totalVotes)*100);
       }
       else if($votesAnswer2 == 0 && $votesAnswer1 !== 0){
           $votesAnswer2Percents = 0;
           $votesAnswer1Percents = round(($votesAnswer1/$totalVotes)*100);
       }
       else if($votesAnswer1 !== 0 && $votesAnswer2 !== 0){
           $votesAnswer1Percents = round(($votesAnswer1/$totalVotes)*100);
           $votesAnswer2Percents = round(($votesAnswer2/$totalVotes)*100);
       }
       require ROOT."/App/View/ResultPollView.php";
    }

    public function saveMessage(){
        if(isset($_POST["sendMessage"])){
            $pollId = $_GET["poll_id"];

            // get current message 
            $currentMessage = $_POST["message"];
            
            $getLastMessage = $this->model->getLastMessage($pollId);
            if(count($getLastMessage) !== 0){
                $lastMessage = $getLastMessage[0]->message_content;
                 header("Location: ../public/index.php?page=createdPoll&poll_id=$pollId");

            }
          
            if($currentMessage !== ""){
                    if(isset($_POST['message'])){
                        echo('Nickel bro');
                        $pollId = $_GET["poll_id"];
                        $getUsername = $this->model->sendMessage($pollId, $_SESSION["id"], $_SESSION["user_name"], $currentMessage);
                    }
            }else{
                echo('Merci de ne pas mettre un message vide');
            }
        }else{
        }
   
    }

    // Display poll's messages 
    public function getMessages(){
        $pollId = $_GET["poll_id"];
        $getMessages = $this->model->getMessages($pollId);
        foreach($getMessages as $getMessage) : ?>
            <tr>
                <br>
                <td><?= $getMessage->user_name ?> : </td>
                <td><?= $getMessage->message_content ?> </td>
                <td>(<?= $getMessage->message_date ?>)</td>
                <br>
            </tr>
        <?php endforeach;
    }

    public function createdPoll(){
        $pollId = $_GET["poll_id"];
        $getPoll = $this->model->getPoll($pollId);
        $getPollAcceptedId = $getPoll[0]->accepted_id;
        $getPollFirstAnswer = $getPoll[0]->poll_answer1;
        $getPollSecondAnswer = $getPoll[0]->poll_answer2;

        require ROOT."/App/View/CreatedPollView.php";

        // Si c'est le creator du poll qui regarde 
        if($_SESSION["id"] == $getPollAcceptedId){
            return $this->pollResult($pollId);
            $friendsEmailList = [];
            if(isset($_POST["sharePoll"])){
                $friendList = $this->model->getFriendsList($_SESSION["id"]);
                for($i = 0; $i<count($friendList);$i++){
                    $friendId = $friendList[$i]->friend_id;
                    $friendsEmail = $this->model->getFriendsEmail($friendId);
                    $friendEmail = $friendsEmail[0]->user_email;
                    array_push($friendsEmailList, $friendEmail);
                }
                for($i = 0; $i<count($friendsEmailList);$i++){
                    // Envoie du mail : 
                    ini_set( 'display_errors', 1 );
                    error_reporting( E_ALL );
                    $from = $_SESSION["user_mail"];
                    $to = $friendsEmailList[$i];
                    $subject = "Viens répondre à mon sondage !";
                    $message = "http://localhost/poo_project/www/public/index.php?page=connexion";
                    $headers = "De: " . $from;
                    mail($to,$subject,$message, $headers);
                    header("Location: ../public/index.php?page=createdPoll&poll_id=$pollId");
                }
            }
            return $this->getMessages();

            // View pour voir les résultat           
            require ROOT."/App/View/ResultPollView.php";    
            
            // View pour partager le lien par mail 
            require ROOT."/App/View/SharePollView.php";


        // Si c'est un ami qui regarde le poll 
        }else{
            $whohasVoted = $this->model->whohasVoted($pollId, $_SESSION["id"]);
            if($whohasVoted == NULL){
                require ROOT."/App/View/ChoosePollAnswer.php";
            }
            else{
                return $this->pollResult($pollId);

                require ROOT."/App/View/ResultPollView.php";
            }
            // Choix 1
            if(isset($_POST["chooseFirstAnswer"])){
                $whohasVoted = $this->model->whohasVoted($pollId, $_SESSION["id"]);
                if($whohasVoted == NULL){
                        $vote = $this->model->vote($pollId, $_SESSION["id"]);

                        // Nb de votes actuel 
                        $getPollFirstAnswerVotes = $getPoll[0]->poll_answer1_votes;
                        $newPollFirstAnswerVotes =  $getPollFirstAnswerVotes + 1;
                        $voteAnswer1 = $this->model->voteAnswer1($pollId, $newPollFirstAnswerVotes);

                        return $this->pollResult($pollId);
                        return $this->getMessages();


                        require ROOT."/App/View/ResultPollView.php";
                }else{
                    echo("user has already voted");
                }
            }
            // Choix 2
            if(isset($_POST["chooseSecondAnswer"])){
                $whohasVoted = $this->model->whohasVoted($pollId, $_SESSION["id"]);
                if($whohasVoted == NULL){
                    $vote = $this->model->vote($pollId, $_SESSION["id"]);
                    // Nb de votes actuel 
                    $getPollFirstAnswerVotes = $getPoll[0]->poll_answer2_votes;
                    $newPollFirstAnswerVotes =  $getPollFirstAnswerVotes + 1;
                    $voteAnswer1 = $this->model->voteAnswer2($pollId, $newPollFirstAnswerVotes);

                    return $this->pollResult($pollId);
                    return $this->getMessages();

                    require ROOT."/App/View/ResultPollView.php";
                }else{
                    echo("user has already voted");
                }
            } 
            

        }

    }

}

?>