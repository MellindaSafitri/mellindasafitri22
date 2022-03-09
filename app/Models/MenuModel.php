<?php
namespace App\Models;                       

use CodeIgniter\model;

class MenuModel extends Model{
    protected $table    ='menu';
    //Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama','harga','jumlah','jenis','keterangan'];

}    