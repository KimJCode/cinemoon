<header>
    <nav>         
        <a href = "index.php" title = "cinemoon-Homepage" class = "logo" id = "Desktoplogo">
            <img src = "Medien/Bilder/Logo.png" alt = "Logo von cinemoon">
        </a>
        <ul>
            <li><a <?php $name = "$_SERVER[PHP_SELF]"; if($name == "/cinemoon/index.php" ){ print("class=\"currentpage\"");}?> href = "index.php">Home</a></li>
            <li><a <?php $name = "$_SERVER[PHP_SELF]"; if($name == "/cinemoon/Programmseite.php" ){ print("class=\"currentpage\"");}?> href = "Programmseite.php">Programm</a></li>
            <li><a <?php $name = "$_SERVER[PHP_SELF]"; if($name == "/cinemoon/Eventseite.php" ){ print("class=\"currentpage\"");}?> href = "Eventseite.php">Events</a></li>
            <li><a <?php $name = "$_SERVER[PHP_SELF]"; if($name == "/cinemoon/Gastroseite.php" ){ print("class=\"currentpage\"");}?> href = "Gastroseite.php">Gastro</a></li>
            <li><a <?php $name = "$_SERVER[PHP_SELF]"; if($name == "/cinemoon/Uber-uns-seite.php" ){ print("class=\"currentpage\"");}?>href = "Uber-uns-seite.php">Über Uns</a></li>
        </ul>
    </nav> 
</header>