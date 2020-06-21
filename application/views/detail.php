<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA WILAYAH</strong></h4>
        <table class="table">
            <tr>
                <th>Provinsi </th>
                <td><?php echo $detail -> provinsi?></td>
            </tr>
            <tr>
                <th>Kota </th>
                <td><?php echo $detail -> kota?></td>
            </tr>
            <tr>
                <th>Pasar </th>
                <td><?php echo $detail -> pasar?></td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td><?php echo $detail -> kecamatan?></td>
            </tr>
            <tr>
                <th>Jenis</th>
                <td><?php echo $detail -> jenis?></td>
            </tr>
            <tr>
                <th>Telp</th>
                <td><?php echo $detail -> telp?></td>
            </tr>
        </table>

        <a href="<?php echo base_url('wilayah/index'); ?>" class="btn btn-primary">Kembali</a>
        
    </section>
</div>