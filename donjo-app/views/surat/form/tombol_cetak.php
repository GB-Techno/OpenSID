<div class="box-footer">
    <?php if ($mandiri): ?>
        <button type="reset" onclick="window.history.back();" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
    <?php elseif ($periksa): ?>
        <a href="<?= site_url("permohonan_surat_admin/konfirmasi/{$periksa['id']}"); ?>" class="btn btn-social btn-danger btn-sm" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Konfirmasi Belum Lengkap"><i class="fa fa-times"></i> Belum Lengkap</a>
    <?php else: ?>
        <button type="reset" onclick="$('#validasi').trigger('reset');" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
    <?php endif; ?>
    <?php if ($mandiri): ?>
        <button type="button" onclick="$('#validasi').attr('action', '<?= site_url(MANDIRI . '/surat/kirim/' . $permohonan['id']) ?>'); $('#validasi').submit();" class="btn btn-social btn-success btn-sm pull-right" style="margin-right: 5px;"><i class="fa fa-file-text"></i> Kirim</button>
    <?php else: ?>
        <button type="button" id="cetak-surat" onclick="tambah_elemen_cetak('cetak_pdf');" class="btn btn-social btn-info btn-sm pull-right" style="margin-right: 5px;"><i class="fa fa-file-word-o"></i> Lanjutkan Cetak</button>
    <?php endif; ?>
    <a href="<?= site_url('keluar/masuk') ?>" id="next" class="btn btn-social btn-info btn-sm btn-sm pull-right visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" style="display: none !important;">
        ke Permohonan Surat<i class="fa fa-arrow-circle-right"></i></a>
</div>
<script type="text/javascript">
    function tambah_elemen_cetak($nilai) {
        $('<input>').attr({
            type: 'hidden',
            name: 'submit_cetak',
            value: $nilai
        }).appendTo($('#validasi'));

        $('#validasi').submit();

        if ($('.box-body').find('.has-error').length < 1) {
            $('#next').removeClass('hide');
            $('#cetak-surat').remove();
        }
    }
</script>