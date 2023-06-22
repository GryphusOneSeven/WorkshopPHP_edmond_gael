<!DOCTYPE html>
<html>
    <head>
        <title>CakePHP Home</title>
    </head>
    <body>

    <h1>HELLO WORLD IN BIG TEXT</h1>

    <?php
    echo "Bonjour, je suis un script PHP !";
    ?>

    <table>
        <thead>
            <th>Name</th>
            <th>Date</th>
            <th>Description</th>
        </thead>
        <tbody>
            <tr>
                <td>No</td>
                <td>25/03</td>
                <td>Not yes</td>
            <tr>
        </tbody>
    </table>

    <p>All of the exercices are done on the second page : <?= $this->Html->link("/secondHome/index")?> </p>

    </body>
</html>