<div class="content-wrapper">
    <section class="content">
        <?php foreach ($wilayah as $wil) { ?>
        <form action="<?php echo base_url().'wilayah/update'; ?>"
            method="post">
            <div class="form-group">
                <label>Provinsi</label>
                <input type="hidden" name="id" class="form-control"
                value="<?php echo $wil->id ?>">

                <select class="form-control" name="provinsi" value="<?php echo $wil->provinsi ?>">
                <option>Jawa Tengah</option>
                <option>Jawa Timur</option>
                <option>Jawa Barat</option>
              </select>
                
            </div>

            <div class="form-group">
                <label>Kota</label>
                <input type="text" name="kota" class="form-control"
                value="<?php echo $wil->kota ?>">
            </div>

            <div class="form-group">
                <label>Pasar</label>
                <input type="text" name="pasar" class="form-control"
                value="<?php echo $wil->pasar ?>">
            </div>

            <div class="form-group">
              <label>Kecamatan</label>
              <input type="text" name="kecamatan" class="form-control"
              value="<?php echo $wil->kecamatan ?>">

            </div>

            <div class="form-group">
              <label>Jenis Pasar</label>

              <select class="form-control" name="jenis" value="<?php echo $wil->pasar ?>">
                <option>Induk</option>
                <option>Anak</option>
              </select>

            </div>

            <div class="form-group">
              <label>No Telp</label>
              <input type="text" name="telp" class="form-control"
              value="<?php echo $wil->telp ?>">

            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form> 
        <?php } ?>
    </section>
</div>