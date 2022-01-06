<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'status', 'phone_number', 'password',
        'set_value', 'created_on', 'updated_on', 'is_deleted', 'roll_id'];
}

?>