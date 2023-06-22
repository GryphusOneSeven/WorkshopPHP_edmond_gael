<h1>Produits</h1>
<strong> Ajouter un produit : <?= $this->Html->Link("/Produits/add") ?> </strong>
<table>
    <tr>
        <th>En vente</th>
            </tr>
                <?php foreach ($produits as $produit): ?>
            <tr>
        <td>
            <?= $produit->nom ?>
        </td>
        <td>
            <?= $produit->image ?>
        </td>
        <td>
            <?= $produit->prix ?>
        </td>
        <td>
            <?= $produit->description ?>
        </td>
    </tr>
    <?php endforeach ?>
</table>