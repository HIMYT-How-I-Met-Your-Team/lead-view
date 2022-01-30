
<br>
<h1>
    How to use <i>Lead View</i>
</h1>
<br>
<p>
    Lead View is a simple plugin aimed to simplify the process of inserting and printing the data collected by a form in a database.<br>
    At the current state it's still deeply subject to updates, as well as fondamentally in a raw state.<br><br>
    In this page you can find the description of <i>Lead View</i>'s functions and how to use them, as follows.
</p>
<hr>
<h2>
    <i>Inserter</i> - Data Insertion
</h2>
<h4>
    function <i>inserter</i>( (array)<i>$data_to_insert</i> );
</h4>
<p>
    <br>
    <br>
    One of the main functions of <i>Lead View</i>, <b>Inserter</b> is used to insert an array of data passed to it as a parameter into the table.<br>
    <br>
    In the future, it will be expanded, especially adding the possibility of custom tables inside the database.
</p>
<hr>
<h2>
    <i>Getter</i> - Data Retrieval
</h2>
<h4>
    function <i>getter</i>( (String)<i>$name_of_column_to_sort_by</i> );
</h4>
<p>
    <br>
    <br>
    Second of the main functions of <i>Lead View</i>, <b>Getter</b> is used to retrieve the data from a table inside the database.<br>
    It uses the string passed as parameter to choose how to sort the table.<br>
    <br>
    In the future, it will be expanded, especially adding the possibility of custom tables inside the database.
</p>
<hr>