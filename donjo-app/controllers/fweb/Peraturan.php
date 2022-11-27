<?php

/*
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2022 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2022 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

use App\Models\Dokumen;
use App\Models\RefDokumen;

class Peraturan extends Web_Controller
{
    public function index()
    {
        if (! $this->web_menu_model->menu_aktif('peraturan-desa')) {
            show_404();
        }

        $data = $this->includes;

        $data['pilihan_kategori'] = RefDokumen::where('id', '!=', 1)->pluck('nama', 'id');
        $data['pilihan_tahun']    = Dokumen::distinct('tahun')->hidup()->where('kategori', '!=', 1)->pluck('tahun');
        $data['halaman_statis']   = 'peraturan/index';

        $this->_get_common_data($data);
        $this->set_template('layouts/halaman_statis.tpl.php');
        $this->load->view($this->template, $data);
    }

    public function datatables()
    {
        if ($this->input->is_ajax_request()) {
            $filters = [
                'tahun'    => $this->input->get('tahun', true),
                'kategori' => $this->input->get('kategori', true),
            ];

            $query = Dokumen::select(['id', 'nama', 'tahun', 'satuan', 'kategori'])
                ->hidup()
                ->aktif()
                ->where('kategori', '!=', 1)
                ->filters($filters);

            return datatables()
                ->of($query)
                ->addIndexColumn()
                ->addColumn('kategori_dokumen', static function ($row) {
                    return $row->kategoriDokumen->nama;
                })
                ->make();
        }

        return show_404();
    }
}
