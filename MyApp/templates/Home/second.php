<!DOCTYPE html>
<html>
    <head>
        <title>CakePHP second</title>
    </head>
    <body>

    <h1>WORLD HELLO</h1>

    <?php
    echo "Bonjour, je suis un script PHP !";
    ?>

    <table>
        <thead>
            <th>a</th>
            <th>b</th>
            <th>c</th>
        </thead>
        <tbody>
            <tr>
                <td>d</td>
                <td>e</td>
                <td>f</td>
            <tr>
        </tbody>
    </table>

    <p>All of the exercices are done on the second page : <?= $this->Html->link("/secondHome/index")?> </p>

    </body>
</html>