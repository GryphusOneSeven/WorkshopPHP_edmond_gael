<?= $this->Html->css('site') ?>
<?= $this->fetch('css') ?>

<?= $this->Html->script(['site', 'mdb.min']) ?>
<?= $this->fetch('site') ?>

<header>
    <h1>This is my layout</h1>
    <p>first page : <?= $this->Html->link("/Home/index")?> </p>
    <p>Second page : <?= $this->Html->link("/secondHome/index")?> </p>
    <p>third page : <?= $this->Html->link("/Home/second")?> </p>
</header>

<main class="main">
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
</main>

<footer>
    <p>©2023 CakePHP</p>
</footer>
