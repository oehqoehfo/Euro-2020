<?php 
    include('../api/api.php'); 
    include('../matches/match.php'); 
    $apiData = callAPI('standings');
    $groupArray = [];
    $groupCountryList = array();
    function createGroups(){
        global $groupArray;
        global $apiData;
        global $groupCountryList;
        $countryData;
        for($i=0;$i<sizeof($apiData->season->groups);$i++){
            $group = $apiData->season->groups[$i];
            for($j=0;$j<sizeof($group->standings);$j++){
                $countryStandingOptions = json_decode($group->standings[$j]->options);
                if(empty($countryStandingOptions->goalscore_chk)){
                    $countryStandingOptions->goalscore_chk=0;
                }
                if(empty($countryStandingOptions->goalconc_chk)){
                    $countryStandingOptions->goalconc_chk=0;
                }
                $countryData = array(
                    'countryName'=> $group->standings[$j]->teamName,
                    'totalMatch'=>$countryStandingOptions->played_chk,
                    'totalWins'=>$countryStandingOptions->win_chk,
                    'totalDraw'=>$countryStandingOptions->draw_chk,
                    'totalLose'=>$countryStandingOptions->lost_chk,
                    'totalGoals'=>$countryStandingOptions->goalscore_chk,
                    'totalGoalsConc'=>$countryStandingOptions->goalconc_chk,
                    'totalPoints'=>$countryStandingOptions->point_chk
                );
                array_push($groupCountryList,$countryData);
            }
            array_push($groupArray,$groupCountryList);
            $groupCountryList = array();
        }
        //print_r($groupArray);
    }
    function setGroupName($index){
        $groupName ='';
        switch($index){
            case 0:
                $groupName= 'Group A';
                break;
            case 1:
                $groupName= 'Group B';
                break;
            case 2:
                $groupName= 'Group C';
                break;
            case 3:
                $groupName = 'Group D';
                break;
            case 4:
                $groupName= 'Group E';
                break;
            case 5:
                $groupName ='Group F';
                break;
        }
        return $groupName;
    }
    function renderTableHead(){
        echo '<tr><th>Team</th><th>Match</th><th>W</th><th>D</th><th>L</th><th>G</th><th>GA</th><th>GD</th><th>P</th></tr>';
    }
    function renderTableBody($country){
        $totalGoalsNumber = (int)$country['totalGoals'];
        $totalGoalsConcNumber = (int)$country['totalGoalsConc'];
        $goalDifference = $totalGoalsNumber-$totalGoalsConcNumber;
        echo '<tr><td>'.$country['countryName'].'</td><td>'.$country['totalMatch'].'</td><td>'.
        $country['totalWins'].'</td><td>'.$country['totalDraw'].'</td><td>'.$country['totalLose'].
        '</td><td>'.$country['totalGoals'].'</td><td>'.$country['totalGoalsConc'].'</td>'.
        '<td>'.$goalDifference.'</td><td>'.$country['totalPoints'].'</tr>';

    }

    //$matchSchedules = getMatchList();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/groups.css">
    <title>Groups</title>
</head>
<body>
    <?php include('../header.php'); ?>
    <section id="Contents">
        <h2>Here can you see group results and group schedules</h2>
        <?php ?>
        <section id="Groups">
            <?php 
                createGroups();
                for($i=0;$i<sizeof($groupArray);$i++){
            ?>
                <div class="groups collapsed">
                    <h3 class="groupTitle"><?php echo(setGroupName($i))?></h3>
                    <div class="groupInfo">
                        <table class="groupTable">
                            <?php 
                                for($j=0;$j<sizeof($groupArray[$i]);$j++){
                                    if($j===0){
                                        echo '<thead><tr class="groupName"><th colspan="9">'.
                                        setGroupName($i);
                                        echo '</th></tr></thead>';
                                        renderTableHead();
                                    }
                                    $countryInfo = $groupArray[$i][$j];
                                    renderTableBody($countryInfo);
                                }
                            ?>
                        </table>
                        <div class="groupSchedule">
                            <div class="matchContainer">
                                <?php 
                                    for($matchCount=0;$matchCount<6;$matchCount++){
                                        renderMatch();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php       
                }
            ?>
        </section>
    </section>
    <?php include('../footer.php');?>
    <script src="../script/events.js" type="text/javascript"></script>
    <script src="../script/fetch.js" type="text/javascript"></script>
    <script src="../script/groups.js" type="text/javascript"></script>
</body>
</html>