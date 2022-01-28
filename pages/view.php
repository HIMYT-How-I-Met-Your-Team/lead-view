
<style>

  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:not(:first-child):hover th{
    /* Prevent the hover in th */
  }

  tr:hover td {
    background-color: #D6EEEE;
  }

  th {
    cursor: pointer;
  }

  #viewData {
    overflow-x: auto;
  }

</style>

<div id="viewData">
<table id="dataList">
    <thead>
        <tr>
            <th onclick="sortTable(0)">
                Nome
            </th>
            <th onclick="sortTable(1)">
                Cognome
            </th>
            <th onclick="sortTable(2)">
                Email
            </th>
            <th onclick="sortTable(3)">
                Telefono
            </th>
            <th onclick="sortTable(4)">
                Ragione Sociale
            </th>
            <th onclick="sortTable(5)">
                Provincia
            </th>
            <th onclick="sortTable(6)">
                Attività
            </th>
            <th onclick="sortTable(7)">
                Messaggio
            </th>
            <th onclick="sortTable(8)">
                Data di inserimento
            </th>
        </tr>
    </thead>
<?php 
$results = getter();

foreach ($results as $r) {
    echo("<tr>");
    foreach ($r as $d){
        echo("<td>".$d."</td>");
    }
    echo("</tr>");
}
?>
</table>
</div>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("dataList");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>