

<table border = "1">
    <thead>
        <tr>
            <th>
                Nome
            </th>
            <th>
                Cognome
            </th>
            <th>
                Email
            </th>
            <th>
                Telefono
            </th>
            <th>
                Ragione Sociale
            </th>
            <th>
                Provincia
            </th>
            <th>
                Attività
            </th>
            <th>
                Messaggio
            </th>
        </tr>
    </thead>
<?php 
$results = get_data();

foreach ($results as $r) {
    echo("<tr>");
    foreach ($r as $d){
        echo("<td>".$d."</td>");
    }
    echo("</tr>");
}
?>
</table>