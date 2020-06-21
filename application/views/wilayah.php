<div class="content-wrapper">

    <section  class="content-header">
      <h1>
          Data Wilayah 
        <small> Control panel </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Wilayah</li>
      </ol>
    </section>

    <section class="content">
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> Tambah Data Wilayah</button>
      <table class="table">
        <tr>
          <th>NO</th>
          <th>PROVINSI</th>
          <th>KOTA</th>
          <th>PASAR</th>
          <th colspan="2">AKSI</th>
          

        </tr>

        <?php  
        $no = 1;
        foreach ($wilayah as $wil) : ?>
        
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $wil->provinsi ?></td>
            <td><?php echo $wil->kota ?></td>
            <td><?php echo $wil->pasar ?></td>
            <td><?php echo anchor('wilayah/detail/'.$wil->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?> </td>
            <td onclick="javascript: return confirm('Anda yakin hapus data ?')"><?php echo anchor('wilayah/hapus/'.$wil->id, '<div class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></div>') ?></td>
            <td><?php echo anchor('wilayah/edit/'.$wil->id,'<div class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></div>') ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </section>

    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA WILAYAH</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <!-- kesalahan 1 -->
          <form method="post" action="<?php echo base_url().'wilayah/tambah_aksi'; ?>">
          
            <div class="form-group">
              <label>Nama Provinsi</label>
                <select class="form-control" name="provinsi">
                  <option>Jawa Tengah</option>
                  <option>Jawa Timur</option>
                  <option>Jawa Barat</option>
                </select>
            </div>

            <div class="form-group">
              <label>Nama Kota</label>
              <input type="text" name="kota" class="form-control">
            </div>

            <div class="form-group">
              <label>Nama Pasar</label>
              <input type="text" name="pasar" class="form-control">
            </div>

            <div class="form-group">
              <label>Kecamatan</label>
              <input type="text" name="kecamatan" class="form-control">
            </div>

            <div class="form-group">
              <label>Jenis Pasar</label>
                <select class="form-control" name="jenis">
                  <option>Induk</option>
                  <option>Anak</option>
                </select>
            </div>

            <div class="form-group">
              <label>No Telp</label>
              <input type="text" name="telp" class="form-control">
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

          </form>
        </div>
        
      </div>
    </div>
  </div>


</div>