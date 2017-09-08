
<table class="table table-bordered table-hover">
	<thead>
	  <tr>
	    <th>Username</th>
	    <th>Nama</th>
	    <th>Alamat</th>
	    <th>Telepon</th>
	    <th>Status</th>
	    <th>Email</th>
		 <th>Aksi</th>
	  </tr>
	</thead>
	<tbody>
<?php
include ("../proses/config.php");
$res = $con->query("SELECT*FROM user where jenis='Instansi'");
while ($row = $res->fetch_assoc()) {
?>
    
	  <tr>
	    <td><?php echo $row['username']; ?></td>
	    <td><?php echo $row['nama']; ?></td>
	    <td><?php echo $row['alamat']; ?></td>
	    <td><?php echo $row['no_telp']; ?></td>
	    <td><?php echo $row['Status']; ?></td>
	    <td><?php echo $row['email']; ?></td>
	    <td>
		<?php if($row['Status']=="Tidak Aktif"){
		?> <a  class="btn btn-xs btn-success" href="../proses/aktivasi_instansi.php?user=<?php echo $row['username']; ?>" onclick="return confirm('Apakah anda yakin akan mengaktifkan akun ini?')"> <i class="fa fa-check"></i>Aktifkan</a>
							<a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['username']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Ubah</a>
	   <?php }else{
	  ?> <a  class="btn btn-xs btn-danger" href="../proses/non_aktif_instansi.php?user=<?php echo $row['username']; ?>" onclick="return confirm('Apakah anda yakin akan menonaktifkan akun ini?')"> <i class="fa fa-close"></i>Non Aktifkan</a>
							<a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['username']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Ubah</a>

 <?php } ?>   
<!-- Modal -->
<div class="modal fade" id="myModal<?php echo $row['username']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['username']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['username']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="un">Username</label>
    <input type="text" class="form-control" id="un<?php echo $row['username']; ?>" value="<?php echo $row['username']; ?>">
  </div>
  <div class="form-group">
    <label for="nm">Nama</label>
    <input type="text" class="form-control" id="nm<?php echo $row['username']; ?>" value="<?php echo $row['nama']; ?>">
  </div>
  <div class="form-group">
    <label for="al">Alamat</label>
    <input type="text" class="form-control" id="al<?php echo $row['username']; ?>" value="<?php echo $row['alamat']; ?>">
  </div>
  <div class="form-group">
    <label for="tl">Telepon</label>
    <input type="text" class="form-control" id="tl<?php echo $row['username']; ?>" value="<?php echo $row['no_telp']; ?>">
  </div>
  <div class="form-group">
    <label for="el">Email</label>
    <input type="text" class="form-control" id="el<?php echo $row['username']; ?>" value="<?php echo $row['email']; ?>">
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" onclick="updatedata('<?php echo $row['username']; ?>')" class="btn btn-primary">Ubah</button>
      </div>
    </div>
  </div>
</div>
 </td>
	  </tr>
<?php
}
?>
    
	</tbody>
      </table>
