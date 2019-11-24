 <?php
    $feira = $_GET["feira"];

    switch($feira){
        case "pepino":
        echo "<img src='img/pepino.jpg'>";
        break;
        case "goiaba":
        echo "<img src='img/goiaba.jpg'>";
        break;
        case "batata":
        echo "<img src='img/batata.png'>";
        break;
        default:
        echo "Insira no minimo um dos seguintes valores: Pepino , Batata ou Goiaba";
    }