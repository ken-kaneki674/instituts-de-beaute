<?php
require_once 'models/Availability.php';
require_once 'models/Institute.php';
require_once 'models/Database.php';

class AvailabilityController {
    private $db;
    private $availability;
    private $institute;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->availability = new Availability($this->db);
        $this->institute = new Institute($this->db);
    }

    public function create() {
        $institute_id = isset($_GET['institute_id']) ? $_GET['institute_id'] : null;
        
        if ($institute_id) {
            $this->institute->id = $institute_id;
            $this->institute->readOne();
        }
        
        if ($_POST) {
            $this->availability->jour = $_POST['jour'];
            $this->availability->heureDebut = $_POST['heureDebut'];
            $this->availability->heureFin = $_POST['heureFin'];
            $this->availability->institut_id = $_POST['institut_id'];
            
            if ($this->availability->create()) {
                header("Location: index.php?page=institutes&action=show&id=" . $_POST['institut_id']);
            } else {
                $error = "Impossible de créer la disponibilité.";
            }
        }
        
        include 'views/availability/create.php';
    }
}
?>