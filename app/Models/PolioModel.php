<?php

namespace App\Models;

use CodeIgniter\Model;

class PolioModel extends Model {

    protected $table = 'profiles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'nama', 'umur', 'alamat', 'email'];

    public function getUserById($profiles_id) {
        return $this->find($profiles_id);
    }

    public function updateProfiles($profiles_id, $data) {
        return $this->update($profiles_id, $data);
    }
}
?>
