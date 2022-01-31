<br />
<h1>
    How to use <i>Lead View</i>
</h1>
<br />
<p>
    Lead View is a simple plugin aimed to simplify the process of inserting and printing the data collected by a form in a database.<br>
    At the current state it's still deeply subject to updates, as well as fondamentally in a raw state.<br><br>
    In this page you can find the description of <i>Lead View</i>'s functions and how to use them, as follows.
</p>
<hr />
<div class="clickable" onclick="show('inserter');">
    <h2>
        <i>Inserter</i> - Data Insertion
    </h2>
</div>
<div id="inserter" class="expandable removed">
    <h4>
        function <span class="txFunction">inserter</span> ( (<span class="txArgType">Array</span>)<span class="txArgName">$data_to_insert</span> );
    </h4>
    <p>
        <br>
        One of the main functions of <i>Lead View</i>, <b>Inserter</b> is used to insert an array of data passed to it as a parameter into the table.<br>
        <br>
        In the future, it will be expanded, especially adding the possibility of custom tables inside the database.
    </p>
</div>
<hr />
<div class="clickable" onclick="show('getter');">
    <h2>
        <i>Getter</i> - Data Retrieval
    </h2>
</div>
<div id="getter" class="expandable removed">
    <h4>
        function <span class="txFunction">getter</span> ( (<span class="txArgType">String</span>)<span class="txArgName">$name_of_column_to_sort_by</span> );
    </h4>
    <p>
        <br>
        Second of the main functions of <i>Lead View</i>, <b>Getter</b> is used to retrieve the data from a table inside the database.<br>
        It uses the string passed as parameter to choose how to sort the table.<br>
        <br>
        In the future, it will be expanded, especially adding the possibility of custom tables inside the database.
    </p>
</div>
<hr />
<div class="clickable" onclick="show('download');">
    <h2>
        <i>Download</i> - Single Download
    </h2>
</div>
<div id="download" class="expandable removed">
    <h4>
        function <span class="txFunction">download</span> ( (<span class="txArgType">String</span>)<span class="txArgName">$name_of_file</span>, (<span class="txArgType">String</span>)<span class="txArgName">$text_to_download</span> );
    </h4>
    <p>
        <br>
        Third of the main functions of <i>Lead View</i>, <b>Download</b> is used to download the data from a table row inside a txt file named by the user.<br>
        It uses the string passed as parameter to choose how to name the file and the text to download.<br>
        <br>
        In the future, it will be expanded, especially adding the possibility of custom tables inside the database.
    </p>
</div>
<hr />
<div class="clickable" onclick="show('downloadAll');">
    <h2>
        <i>Download All</i> - Download all the data
    </h2>
</div>
<div id="downloadAll" class="expandable removed">
    <h4>
        function <span class="txFunction">downloadAll</span> ( (<span class="txArgType">Array</span>)<span class="txArgName">$list</span> );
    </h4>
    <p>
        <br>
        Fourth of the main functions of <i>Lead View</i>, <b>Download All</b> is used to download all the data from a table inside a txt file.<br>
        It uses a list of all the rows of a table passed as a parameter<br>
        <br>
        In the future, it will be expanded, especially adding the possibility of custom tables inside the database.
    </p>
</div>