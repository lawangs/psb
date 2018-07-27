<!-- Modal -->
<div class="modal fade" id="modal-seleksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <form action="<?php echo base_url('laporan/hasil_seleksi')?>" method="post" target="_BLANK">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laporan Hasil Seleksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select name="ta" class="form-control" required>
                    <?php foreach ($ta as $list) { ?>
                    <option value="<?php echo $list['ta_id'];?>">
                      <?php echo $list['ta_awal'];?>/
                      <?php echo $list['ta_akhir'];?>
                    </option>
                    <?php } ?>
                  </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Cetak</button>
      </div>
    </div>
  </form>
  </div>
</div>