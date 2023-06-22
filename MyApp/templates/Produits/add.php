<h1>Nouveau produit</h1>
<strong> Retourner à la liste : <?= $this->Html->Link("/Produits") ?> </strong>
<?php
    echo $this->Form->create($produit);
    echo $this->Form->control('nom');
    echo $this->Form->control('prix');
    echo $this->Form->control('description');
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('image', ['type' => 'hidden', 'value' => NULL]);
    echo $this->Form->button(__('Submit'));
    echo $this->Form->end();
?>