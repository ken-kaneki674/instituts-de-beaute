<?php include 'views/templates/header.php'; ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h2 class="text-center">Réservation confirmée</h2>
                </div>
                <div class="card-body">
                    <div class="alert alert-success text-center">
                        <i class="fas fa-check-circle fa-3x"></i>
                        <h3>Merci pour votre réservation !</h3>
                    </div>
                    
                    <h4>Détails de la réservation</h4>
                    <table class="table table-bordered">
                        <tr>
                            <th>Réservation #</th>
                            <td><?php echo $reservation->id; ?></td>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <td><?php echo $service->nom; ?></td>
                        </tr>
                        <tr>
                            <th>Institut</th>
                            <td><?php echo $institute->nom; ?></td>
                        </tr>
                        <tr>
                            <th>Date et heure</th>
                            <td><?php echo date('d/m/Y H:i', strtotime($reservation->dateHeure)); ?></td>
                        </tr>
                        <tr>
                            <th>Nom du client</th>
                            <td><?php echo $reservation->nomClient; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $reservation->emailClient; ?></td>
                        </tr>
                        <tr>
                            <th>Téléphone</th>
                            <td><?php echo $reservation->telephoneClient; ?></td>
                        </tr>
                        <tr>
                            <th>Statut</th>
                            <td><span class="badge bg-warning"><?php echo $reservation->statut; ?></span></td>
                        </tr>
                    </table>
                    
                    <div class="text-center mt-4">
                        <a href="index.php" class="btn btn-primary">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'views/templates/footer.php'; ?>