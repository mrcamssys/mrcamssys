<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Validation\Validation;

class ClienteModel extends Model{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    protected $returntype = 'array';
    //campos de la base de datos
    protected $allowedFiels = ['nombre', 'apellido', 'telefono', 'correo'];
    protected $useTimestamps = true;
    protected $createField = 'create_at';
    protected $updatedField = 'update_at';

    //validaciones para la tabla

    protected $validationRules = [
        'nombre'=> 'required|alpha_space|min_length[3]|max_length[25]',
        'apellido' => 'required|alpha_space|min_length[3]|max_length[25]',
        'telefono' => 'required|alpha_space|min_length[8]|max_length[8]',
        'correo' => 'permit_empty|valid_email|max_length[85]',
    ];

    protected $validationMessages=[
        'correo' => ['valid_email' => "El correo electronico no es corrwecto" ]
    ];

    protected $skipValidation = true;


}