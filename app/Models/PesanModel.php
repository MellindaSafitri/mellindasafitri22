<?php
namespace App\Models;                       

use CodeIgniter\model;

class PesanModel extends Model{
    protected $table    ='pesan';
    //Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user','no_nota','nama','tanggal','total_harga','no_meja','status'];

}    