<?= $this->Html->css('site') ?>
<?= $this->fetch('css') ?>

<?= $this->Html->script(['site', 'mdb.min']) ?>
<?= $this->fetch('site') ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hmm yes Cake</title>
    </head>
    <body>

    <h1>HELLO WORLD IN BIG TEXT BUT IN THE SECOND PAGE</h1>

    <?php
    echo "Bonjour, je suis un script PHP !";
    ?>


    <?= $this->Html->image('pett.jpg')?>


    <table align="center">
        <thead>
            <th>Description</th>
            <th>Date</th>
            <th>Name</th>
        </thead>
        <tbody>
            <tr>
                <td>Not yes</td>
                <td>25/03</td>
                <td>no</td>
            <tr>
        </tbody>
    </table>

    <?= $this->Html->link("/home/index")?>

    </body>
</html>