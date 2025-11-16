<?php include 'views/templates/header.php'; ?>

<div class="container mt-4">
    <h1>Ajouter des horaires pour <?php echo $institute->nom; ?></h1>
    
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form action="index.php?page=availability&action=create" method="post">
        <input type="hidden" name="institut_id" value="<?php echo $institute->id; ?>">
        
        <div class="mb-3">
            <label for="jour" class="form-label">Jour</label>
            <select class="form-control" id="jour" name="jour" required>
                <option value="">Sélectionnez un jour</option>
                <option value="lundi">Lundi</option>
                <option value="mardi">Mardi</option>
                <option value="mercredi">Mercredi</option>
                <option value="jeudi">Jeudi</option>
                <option value="vendredi">Vendredi</option>
                <option value="samedi">Samedi</option>
                <option value="dimanche">Dimanche</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="heureDebut" class="form-label">Heure de début</label>
            <input type="time" class="form-control" id="heureDebut" name="heureDebut" required>
        </div>
        
        <div class="mb-3">
            <label for="heureFin" class="form-label">Heure de fin</label>
            <input type="time" class="form-control" id="heureFin" name="heureFin" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="index.php?page=institutes&action=show&id=<?php echo $institute->id; ?>" class="btn btn-secondary">Annuler</a>
    </form>
</div>

<?php include 'views/templates/footer.php'; ?>