
<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<?php
    if(session()->getFlashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<?= session()->getFlashdata('success')?>
<button type="button" class="close" data-dismiss="alert" aria-label="close">Close</button>
</div>
<?php
    }
?>
<button class="btn btn-primary" data-toggle="modal" data-target="#addMenu">Tambah Menu</button>
<table class="table table-stripped table-hover">
    <thead>
        <th>no</th>
        <th>nama</th>
        <th>harga</th>
        <th>jumlah</th> 
        <th>keterangan</th> 
        <th>jenis</th> 
        <th>option<th>    
    </thead>
    <tbody>
        <?php
        $no =1;
        foreach($data as $row):
        ?>
  
        <tr>
        <td><?=$no?></td>         
        <td><?=$row['nama']?></td>
        <td><?=$row['harga']?></td>
        <td><?=$row['jumlah']?></td>
        <td><?=$row['keterangan']?></td>
        <td><?=$row['jenis']?></td>
        <td>
            <button class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">edit</button>
            <a href="<?= base_url('menu/delete/' .$row['id']) ?>" onclick="return confirm('yakin mau hapus?')" class="btn btn-danger btn-sm btn delete">Delete</a>
        </td>
        </tr>
        <div class="modal fade" id="editMenu-<?=$row['id']?>" tanindex="-1" aria-labelledby="example" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example">edit menu</h5>
                <button class="close" data-dismiss="modal" aria-label="close"></button>
             </div>
             <form action="<?=base_url('menu/edit/'.$row['id'])?>" method="post">
             <div class="modal-body">
                <div class="modal-group">
                     <label form="nama">nama</label>
                     <input type="text" name="nama" class="form-control" id="nama" placeholder="inputkan nama"value="<?=$row['nama']?>">
                </div>
                <div class="modal-group">
                    <label form="harga">harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" placeholder="inputkan harga"value="<?=$row['harga']?>">
                </div>
                <div class="modal-group">
                    <label form="jumlah">jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="inputkan jumlah"value="<?=$row['jumlah']?>">
                </div>
                <div class="modal-group">
                    <label form="keterangan">keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="inputkan keterangan"value="<?=$row['keterangan']?>">
                </div>
                <div class="modal-group">
                    <label form="jenis">jenis_menu</label>
                    <select name="jenis" id="jenis"
                    class="form-control" value="<?=$row['jenis']?>">>
                        <option value="makanan">makanan</option>
                        <option value="minuman">minuman</option>
                    </select>
                </div>
    </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">close</button>
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </form>
    </div>
</div>
        <?php
         $no++;
        endforeach;
        ?>
    </tbody>
</table>
<div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="example" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example">Tambah Menu</h5>
                <button class="close" data-dismiss="modal" aria-label="close"></button>
            </div>
            <form action="<?= base_url('menu')?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label form="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="inputkan nama">
                </div>
                <div class="form-group">
                    <label form="harga">harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" placeholder="inputkan harga">
                </div>
                <div class="form-group">
                    <label form="jumlah">jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="inputkan jumlah">
                </div>
                <div class="form-group">
                    <label form="keterangan">keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="inputkan keterangan">
                </div>
                <div class="form-group">
                    <label form="jenis">jenis Menu</label>
                    <select name="jenis" id="jenis"
                    class="form-control">
                        <option value="makanan">makanan</option>
                        <option value="minuman">minuman</option>
                    </select>
                 </div>

    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type= "submit" class="btn btn-primary">Save</button>
            </div>
         </form>
    </div>
</div>


</div>
<?= $this->endSection()?>   