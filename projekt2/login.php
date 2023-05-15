<?php 

function Decode()
{
    $content = file_get_contents("password.txt");
    $offsets = array(5,-14,31,-9,3);

    $result = "";

    foreach(explode("\n", $content) as $line)
    {
        if (strlen($line) == 0)
            continue;

        for($i = 0; $i < strlen($line); $i++)
        {
            $result .= chr(ord($line[$i]) - $offsets[$i % count($offsets)]);
        }
        $result .= "\n";
    }   

    return $result;
}


function Get_Color($LogInUser)
{

    $sname= "127.0.0.1";
    $uname= "root";
    $password = "";
    $db_name = "adatbazisom";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    if (!$conn)
    {
        echo "Connection failed!";
    }

    $sql = "SELECT titkos FROM `project2` WHERE username='$LogInUser'";

    $color = mysqli_query($conn, $sql);

    $color = mysqli_fetch_assoc($color);

    $color = $color['titkos'];

    $colors =array("piros" => "red", "zold" => "green","sarga" => "yellow", "kek" => "blue",  "fekete" => "black", "feher" => "white");

    $color = $colors[$color];

    return $color;
}


$LogInUser = $_POST['user'];
$LogInPassword = $_POST['password'];

$passwords = Decode();

$validUser = false;
$correctPassword = false;

foreach(explode("\n", $passwords) as $line)
{
    if (strlen($line) == 0)
        continue;

    $line = explode("*", $line);

    if ($line[0] == $LogInUser)
    {
        $validUser = true;
        if ($line[1] == $LogInPassword)
        {
            $correctPassword = true;
            break;
        }
    }
}

if ($validUser == false){
    header("Location: alap.php?response=Sikertelen bejelentkezés!");
}
else if ($correctPassword == false){
    header("Location: alap.php?response=Rossz Jelszó! &redirect=police.hu&delay=3");

}else{
    $color = Get_Color($LogInUser);
    header("Location: alap.php?response=Sikeres Bejelentkezés!&color=$color");
}

?>