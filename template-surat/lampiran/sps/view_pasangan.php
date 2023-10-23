<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<page orientation="portrait" format="210x330" style="font-size: 10pt">
    <p style="margin: 0; text-align: center;" class="title"><u>SURAT PERNYATAAN STATUS</u></p>

    <p>Yang bertanda tangan dibawah ini : </p>
    <table id="kop" class="disdukcapil">
        <col span="48" style="width: 2.0833%;">
        <tr>
            <td colspan="48">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="20">Nama lengkap dan alias</td>
            <td>: </td>
            <td colspan="27"><strong>[Nama_dapP]</strong></td>
        </tr>
        <tr>
            <td colspan="20">Nomor Induk Keinputan</td>
            <td>: </td>
            <td colspan="27">[Nik_dapP]</td>
            
        </tr>
        <tr>
            <td colspan="20">Jenis Kelamin</td>
            <td>: </td>
            <td colspan="27">[Jenis_kelamin_dapP]</td>
        </tr>
        <tr>
            <td colspan="20">Tempat dan Tanggal Lahir</td>
            <td>: </td>
            <td colspan="27">[Ttl_dapP]</td>
            
        </tr>
        <tr>
            <td colspan="20">Kewarganegaraan</td>
            <td>: </td>
            <td colspan="27">[Warga_negara_dapP]</td>
            
        </tr>
        <tr>
            <td colspan="20">Agama</td>
            <td>: </td>
            <td colspan="27">[Agama_dapP]</td>
            
        </tr>
        <tr>
            <td colspan="20">Pekerjaan</td>
            <td>: </td>
            <td colspan="27">[Pekerjaan_dapP]</td>
            
        </tr>
        <tr>
            <td colspan="20">Pendidikan Terakhir</td>
            <td>: </td>
            <td colspan="27">[Pendidikan_kk_dapP]</td>
            
        </tr>
        <tr>
            <td colspan="20">Alamat</td>
            <td>: </td>
            <td colspan="27">[Alamat_dapP]</td>
            
        </tr>
    </table>
    
    <p>Dengan ini menyatakan bahwa, Saya betul-betul pada saat ini berstatus [Form_status_kawin_wanitA], dan surat pernyataan ini dibuat guna persyaratan Pernikahan.</p>
    
    <p>Demikianlah surat pernyataan ini saya buat dengan sebenarnya, dalam keadaan sehat jasmani dan rohani tanpa ada paksaan dari pihak manapun. Apabila di kemudian hari menyalahi surat pernyataan ini, saya bersedia dituntut sesuai Perundang-undangan/Hukum yang berlaku dan tidak akan melibatkan aparat setempat ( Resiko Sendiri).</p>

    <!-- Penandatangan -->
    <br><br><br>
    <table class="disdukcapil" style="margin-top: -5px; border: 0px;">
        <col span="48" style="width: 2.0833%;">
        <tr>
            <td colspan="32">&nbsp;</td>
            <td colspan="15" class="tengah">Yang membuat pernyataan</td>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="32"><?= $qrcode ?? '' ?></td>
            <td colspan="15" class="tengah"><br><b><i>Materai 10.000</i></b><br><br></td>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="27">&nbsp;</td>
            <td colspan="20" class="tengah"><strong>[Nama_dapP]</strong></td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
    
    <!-- Saksi -->
    <br><br><br>
    <p>Saksi-saksi :</p>
    <table class="disdukcapil" style="margin-top: -5px; border: 0px;">
        <col span="48" style="width: 2.0833%;">
        <tr>
            <td colspan="23">1. ........................................................................</td>
            <td colspan="23" class="tengah">( ........................................................................ )</td>
            <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="23">2. ........................................................................</td>
            <td colspan="23" class="tengah">( ........................................................................ )</td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
</page>