<?php include 'views/templates/header.php'; ?>

<div class="container mt-4">
    <h1>Modifier l'institut</h1>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <form action="index.php?page=institutes&action=edit&id=<?php echo $institute->id; ?>" method="post">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de l'institut</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $institute->nom; ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?php echo $institute->description; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $institute->adresse; ?>" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" value="<?php echo $institute->telephone; ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $institute->email; ?>" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">URL de l'image</label>
            <input type="url" class="form-control" id="image" name="image" value="<?php echo $institute->image; ?>">
        </div>

        <div class="mb-3">
            <label for="themeCouleur" class="form-label">Couleur du thème</label>
            <input type="color" class="form-control" id="themeCouleur" name="themeCouleur" value="<?php echo $institute->themeCouleur; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="index.php?page=institutes&action=show&id=<?php echo $institute->id; ?>" class="btn btn-secondary">Annuler</a>
    </form>
</div>

<?php include 'views/templates/footer.php'; ?>
