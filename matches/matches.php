<?php
    if(isset($_GET['rounds'])){
        header('Content-Type: application/json');
        include('../api/api.php'); 
        function getMatchList(){
            $matchAPI = callAPI('matches');
            return $matchAPI;
        }
        $matches =getMatchList();
        $matchesOutput = json_encode($matches->calendar->matchdays);
        echo $matchesOutput;
    }
?>