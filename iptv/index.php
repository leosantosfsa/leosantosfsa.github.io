   <head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>  

<?php


$path = "arquivos/";


echo "<h2>Lista de Arquivos:</h2><br />";
foreach (new DirectoryIterator($path) as $fileInfo) {
        if($fileInfo->isDot()) continue;

    echo "<table>

    <tr>
    <th>Nome</th>
    </tr>
    <tr>
    <td><a href='".$path.$fileInfo->getFilename() ."'>".$fileInfo->getFilename()."</a><br /></td>
    </tr>

</table>";
}
?>
</body>
</html>

<?php
