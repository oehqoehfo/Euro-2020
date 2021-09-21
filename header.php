<?php 
    $rootFolder='/euro 2020';
?>
<header id="Header">
        <h1><a href="<?php echo $rootFolder;?>">Euro 2020</a></h1>
        <div id="Menu">
            <div id="Hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo $rootFolder;?>">home</a></li>
                    <li><a href="<?php echo ($rootFolder.'/groups');?>">groups</a></li>
                    <li><a href="<?php echo ($rootFolder.'/matches/tournament');?>">tournaments</a></li>
                    <li><a href="#">stadiums</a></li>
                </ul>
            </nav>
        </div>
    </header>