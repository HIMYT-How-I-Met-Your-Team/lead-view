<?php
$id = $_GET["delete"];
if ($id) {
    deleter($id);
}
?>
<script>
    var dataList = [];
</script>

<div class="navbar">
    <div onclick="toggleDelete();" title="Delete a row">
        Delete
    </div>
    <div onclick="toggleDownload();" title="Download a row">
        Download
    </div>
    <div onclick="downloadAll(dataList);" title="Download all the rows">
        Download All
    </div>
</div>

<section class="wrapper">
    <div class="hidden" id="deletionMessage">
        <h2> Click on a row to delete it </h2>
        <h4> (<i>Deletion is permanent!</i>) </h4>
    </div>
    <div class="hidden" id="downloadMessage">
        <h2> Click on a row to download its contents </h2>
    </div>
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

    if (isset($_GET["sort"]))
        $sort = $_GET["sort"];

    $results = getter(htmlspecialchars($sort));

    $i = 0;

    foreach ($results as $r) {
        $r = (array)$r;
        $printed = []; //for some reason sometimes there are repeated values, this fixes the repetitions

        if ($r['messaggio'] != "") {
            echo ("
            <article id='" . $r['id'] . "' class='row nfl'>
        ");
        } else {
            echo ("
            <article id='" . $r['id'] . "' class='row nfl no-message'>
        ");
        }

        echo ("
    <script>
        dataList.push('|" . implode('|', $r) . "|');
    </script>
    <input class='hidden' id='hidden" . $r["id"] . "' value='|" . implode('|', $r) . "|'>
    <ul onclick='clickFunctions(" . $r["id"] . ");'>
        <li class='larger'>
            <a href='mailto:" . $r['email'] . "'>
            " . $r['email'] . "
            </a>
        </li>
    ");

        foreach ($r as $d) {
            $key = array_search($d, $r);
            if ($key != 'messaggio' && $key != 'email' && $key != 'id' && !array_search($key, $printed)) {
                if ($key == 'submitDate') {
                    echo ("
                <li>
                " . date("d/m/Y H:i", strtotime($d)) . "
                </li>
                ");
                } else {
                    echo ("
                <li>
                " . $d . "
                </li>
                ");
                }

                $printed[] = $key;
            }
        }

        if ($r['messaggio'] != "") {
            echo ("
            <ul class='more-content'>
                <li>
                " . $r['messaggio'] . "
                </li>
            </ul>
        ");
        }
        echo ("
    </article>
    ");

        $i++;
    }
    ?>

</section>