<html>
    <head>
        <meta charset="UTF-8">
        <title>gestion de stock</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<div class="form-container">
    <h1 style="border-left-color: #d9534f;">Sortie de Stock</h1>
    <form action="traitement_sortie.php" method="POST">
        <label>Produit à déstocker</label>
        <select name="produit"><option>Sélectionner...</option></select>
        <label>Quantité Sortante</label>
        <input type="number" name="quantite">
        <label>Motif / Client</label>
        <input type="text" name="motif" placeholder="Ex: Livraison Douala">
        <button type="submit" class="btn-submit" style="background: #444;">ENREGISTRER LA SORTIE</button>
    </form>
</div>
    </body>
</html>