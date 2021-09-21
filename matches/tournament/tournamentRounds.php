<?php 
    $visibility='';
    $roundName='';
    if($i===0||$i===1||$i===2){
        $visibility='visible';
    }else{
        $visibility='hidden';
    }
    if($i===0){
        $roundName='Round of 16';
    }elseif($i===1){
        $roundName='Quarter final';
    }elseif($i===2){
        $roundName='Semi final';
    }
    else
        $roundName='Final';
?>
<section class="<?php echo("$visibility round-".$i)?>">
    <div class="matchList">
        <h2><?php echo $roundName?></h2>
        <?php 
            $totalMatchesInRound='';
            if(!function_exists('renderTournamentMatches')){
                include('./tournamentMatch.php');
            }
            if($i===0){
                $totalMatchesInRounds=8;
            }elseif($i===1){
                $totalMatchesInRounds=4;
            }
            elseif($i===2){
                $totalMatchesInRounds=2;
            }
            else{
                $totalMatchesInRounds=1;
            }
            for($match=1;$match<=$totalMatchesInRounds;$match++){
                renderTournamentMatches();
            }
        ?>
    </div>
</section>