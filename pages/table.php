
<section class="wrapper">
    <main class="row title">
        <ul>
            <li class="larger" onclick="location.href='admin.php?page=lead-view&sort=email'">
                Email
            </li>
            <li onclick="location.href='admin.php?page=lead-view&sort=nome'">
                Nome
            </li>
            <li onclick="location.href='admin.php?page=lead-view&sort=cognome'">
                Cognome
            </li>
            <li onclick="location.href='admin.php?page=lead-view&sort=telefono'">
                Telefono
            </li>
            <li onclick="location.href='admin.php?page=lead-view&sort=ragSociale'">
                Ragione Sociale
            </li>
            <li onclick="location.href='admin.php?page=lead-view&sort=provincia'">
                Provincia
            </li>
            <li onclick="location.href='admin.php?page=lead-view&sort=attivita'">
                Attività
            </li>
            <li onclick="location.href='admin.php?page=lead-view&sort=submitDate'">
                Data di invio
            </li>
        </ul>
    </main>



<?php 
$sort = "submitDate";

if(isset($_GET["sort"]))
    $sort = $_GET["sort"];

$results = getter(htmlspecialchars($sort));

foreach ($results as $r) {
    $r = (array)$r;
    $printed = []; //for some reason sometimes there are repeated values, this fixes the repetitions

    if($r['messaggio'] != "") {
        echo("
            <article class='row nfl'>
        ");
    } else {
        echo("
            <article class='row nfl no-message'>
        ");
    }

    echo("
    <ul>
        <li class='larger'>
            <a href='mailto:".$r['email']."'>
            ".$r['email']."
            </a>
        </li>
    ");

    foreach($r as $d){
        $key = array_search($d, $r);
        if ($key != 'messaggio' && $key != 'email' && !array_search($key, $printed)){
            if($key == 'submitDate'){
                echo("
                <li>
                ".date("d/m/Y H:i", strtotime($d))."
                </li>
                ");
            }else {
                echo("
                <li>
                ".$d."
                </li>
                ");
            }

            $printed[] = $key;
        }
    }

    if($r['messaggio'] != ""){
        echo("
            <ul class='more-content'>
                <li>
                ".$r['messaggio']."
                </li>
            </ul>
        ");
    }
    echo("
    </article>
    ");
}
?>
    
</section>

