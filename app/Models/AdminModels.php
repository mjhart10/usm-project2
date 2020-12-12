<?php
    namespace App\Models;
    use CodeIgniter\Database\ConnectionInterface;
    use CodeIgniter\Model;

    class AdminModels extends Model {
        protected $table = 'admin';

        protected $allowedFields = ['id_admin', 'nama_admin', 'username', 'password'];
    }
?>