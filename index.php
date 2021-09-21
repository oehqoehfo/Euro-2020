<?php 
    $userLocationCookie = null;
    if(!isset($_COOKIE['location'])){
        $userLocationCookie='sweden';
        setcookie('location',$userLocationCookie);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euro 2020</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/stadiums.css">
</head>
<body class="home">
    <?php 
        include('header.php');
    ?>
    <section id="Main">
        <div class="absoluteCenter">
            <h1>The biggest football competition in Europe <br><span>Uefa Euro 2020</span></h1>
            <a href="#">SEE SCHEDULE</a>
        </div>
    </section>
    <section id="Contents">
        <section id="Groups">
            <h2>GROUP LIST</h2>
            <div class="groupList">
                <div class="groups">
                    <h2>Group A</h2>
                    <p>
                        <span class="flag">
                            <img src='./image/flags/italy-162326.svg' alt="Italy">
                        </span>
                        <span class="country">Italy</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/switzerland-26891.svg" alt="Switzerland">
                        </span>
                        <span class="country">Switzerland</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/turkey-26820.svg" alt="Turkey">
                        </span>
                        <span class="country">Turkey</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/wales-28516.svg" alt="Wales">
                        </span>
                        <span class="country">Wales</span>
                    </p>
                </div>
                <div class="groups">
                    <h2>Group B</h2>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/belgium-162240.svg" alt="Belgium">
                        </span>
                        <span class="country">Belgium</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/denmark-28459.svg" alt="Denmark">
                        </span>
                        <span class="country">Denmark</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/finland-162294.svg" alt="Finland">
                        </span>
                        <span class="country">Finland</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/russia-162400.svg" alt="Russia">
                        </span>
                        <span class="country">Russia</span>
                    </p>
                </div>
                <div class="groups">
                    <h2>Group C</h2>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/austria-162233.svg" alt="Austria">
                        </span>
                        <span class="country">Austria</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/netherlands-26885.svg" alt="Netherlands">
                        </span>
                        <span class="country">Netherlands</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/country-40341.svg" alt="North Macedonia">
                        </span>
                        <span class="country">N. Macedonia</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/ukraine-26179.svg" alt="Ukraine">
                        </span>
                        <span class="country">Ukraine</span>
                    </p>
                </div>
                <div class="groups">
                    <h2>Group D</h2>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/croatia-26888.svg" alt="Croatia">
                        </span>
                        <span class="country">Croatia</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/czech-republic-162276.svg" alt="Czech Republic">
                        </span>
                        <span class="country">Czech Republic</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/flag-28514.svg" alt="England">
                        </span>
                        <span class="country">England</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/britain-151038.svg" alt="Scotland">
                        </span>
                        <span class="country">Scotland</span>
                    </p>
                </div>
                <div class="groups">
                    <h2>Group E</h2>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/poland-162393.svg" alt="Poland">
                        </span>
                        <span class="country">Poland</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/slovakia-26875.svg" alt="Slovakia">
                        </span>
                        <span class="country">Slovakia</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/spain-162428.svg" alt="Spain">
                        </span>
                        <span class="country">Spain</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/sweden-162433.svg" alt="Sweden">
                        </span>
                        <span class="country">Sweden</span>
                    </p>
                </div>
                <div class="groups">
                    <h2>Group F</h2>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/france-28463.svg" alt="France">
                        </span>
                        <span class="country">France</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/germany-31017.svg" alt="Germany">
                        </span>
                            <span class="country">Germany</span>
                        </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/portugal-162394.svg" alt="Portugal">
                        </span>
                        <span class="country">Portugal</span>
                    </p>
                    <p>
                        <span class="flag">
                            <img src="./image/flags/hungary-162317.svg" alt="Hungary">
                        </span>
                        <span class="country">Hungary</span>
                    </p>
                </div>
            </div>
            <a href="#">detailed info</a>
        </section>
        <section id="Matches">
            <h2>MATCHES</h2>
            <a href="#">SEE SCHEDULE</a>
        </section>
        <section id="Stadiums">
            <?php include('stadiums.php')?>
        </section>
    </section>
    <?php include('footer.php');?>
    <script src="./script/eventsOnAllPage.js"></script>
</body>
</html>