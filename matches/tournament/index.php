
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../style/tournamentMatches.css">
    <title>Tournament</title>
</head>
<body>
    <?php 
        include('../../header.php');
    ?>
    <section id="Contents">
    <?php 
        for($i=0;$i<=3;$i++){
            include('./tournamentRounds.php');
        }
    ?>
    </section>
    <?php 
        include('../../footer.php');
    ?>
    <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js" type="text/javascript"></script>
    <script src="../../script/tournamentClass.js" type="text/javascript"></script>
    <script src="../../script/fetch.js" type="text/javascript"></script>
    <script src="../../script/tournament.js" type="text/javascript"></script>
</body>
</html>