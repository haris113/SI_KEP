<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_model;
use App\Models\anggota_model;
use App\Models\kegiatan_model;
use App\Models\kelembagaan_model;
use App\Models\arsip_dokumen_model;
use App\Models\penyusutan_model;
use App\Models\pinjaman_model;
use App\Models\alsintan_model;
use App\Models\perawatan_model;
use App\Models\penggunaan_alsintan_model;
use App\Models\laporan_upja_model;
use App\Models\laporan_keuangan_model;
use App\Models\operator_model;

class admin_controller extends Controller
{
     public function index()
    {
        $data =[
        'title' => 'Beranda | SI-KEP',
        'page'  => 'Beranda',
        'role'  => 'Admin',
        ];
        return view('pages.Admin.dashboard_admin',$data);
    }

    // ------------------------------------------------------- CRUD USER ------------------------------------------------------
        public function user()
    {
        $data = [
            'judul' => 'DATA AKUN KELEMBAGAAN',
            'title' => 'Akun | SI-KEP',
            'page'  => 'user',
            'user' => user_model::all()
        ];

        return view('pages.Admin.user.user', $data);
    }
    
    
    public function detail_user($id)
    {
        $user = user_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL AKUN KELEMBAGAAN',
            'title'  => 'Detail Akun | SI-KEP',
            'page'   => 'user',
            'user'=> $user
        ];

        return view('pages.Admin.user.detail_user', $data);
    }
    public function edit_user($id)
    {
        $user = user_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT AKUN KELEMBAGAAN',
            'title'  => 'Edit Akun | SI-KEP',
            'page'   => 'user',
            'user'=> $user
        ];

        return view('pages.Admin.user.edit_user', $data);
    }
    public function tambah_user()
    {
        $user = user_model::all();

        $data = [
            'judul'  => 'TAMBAH AKUN KELEMBAGAAN',
            'title'  => 'Tambah Akun | SI-KEP',
            'page'   => 'user',
            'user'=> $user
        ];

        return view('pages.Admin.user.tambah_user', $data);
    }


    // ------------------------------------------------------- CRUD ANGGOTA ------------------------------------------------------
        public function anggota()
    {
        $data = [
            'judul' => 'DATA ANGGOTA KELEMBAGAAN',
            'title' => 'Anggota | SI-KEP',
            'page'  => 'Anggota',
            'anggota' => anggota_model::all()
        ];

        return view('pages.Admin.anggota.anggota', $data);
    }
    
    
    public function detail_anggota($id)
    {
        $anggota = anggota_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL ANGGOTA KELEMBAGAAN',
            'title'  => 'Detail Anggota | SI-KEP',
            'page'   => 'Anggota',
            'anggota'=> $anggota
        ];

        return view('pages.Admin.anggota.detail_anggota', $data);
    }
    public function edit_anggota($id)
    {
        $anggota = anggota_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT ANGGOTA KELEMBAGAAN',
            'title'  => 'Edit Anggota | SI-KEP',
            'page'   => 'Anggota',
            'anggota'=> $anggota
        ];

        return view('pages.Admin.anggota.edit_anggota', $data);
    }
    public function tambah_anggota()
    {
        $anggota = anggota_model::all();

        $data = [
            'judul'  => 'TAMBAH ANGGOTA KELEMBAGAAN',
            'title'  => 'Tambah Anggota | SI-KEP',
            'page'   => 'Anggota',
            'anggota'=> $anggota
        ];

        return view('pages.Admin.anggota.tambah_anggota', $data);
    }


    // ------------------------------------------------------- CRUD ARSIP DOKUMEN ------------------------------------------------------

            public function arsip_dokumen()
    {
        $data = [
            'judul' => 'DATA ARSIP DOKUMEN KELEMBAGAAN',
            'title' => 'Arsip Dokumen | SI-KEP',
            'page'  => 'arsip_dokumen',
            'arsip_dokumen' => arsip_dokumen_model::all()
        ];

        return view('pages.Admin.arsip_dokumen.arsip_dokumen', $data);
    }
    
    
    public function detail_arsip_dokumen($id)
    {
        $arsip_dokumen = arsip_dokumen_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL ARSIP DOKUMEN',
            'title'  => 'Detail Arsip Dokumen | SI-KEP',
            'page'   => 'arsip_dokumen',
            'arsip_dokumen'=> $arsip_dokumen
        ];

        return view('pages.Admin.arsip_dokumen.detail_arsip_dokumen', $data);
    }
    public function edit_arsip_dokumen($id)
    {
        $arsip_dokumen = arsip_dokumen_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT ARSIP DOKUMEN',
            'title'  => 'Edit Arsip Dokumen | SI-KEP',
            'page'   => 'arsip_dokumen',
            'arsip_dokumen'=> $arsip_dokumen
        ];

        return view('pages.Admin.arsip_dokumen.edit_arsip_dokumen', $data);
    }
    public function tambah_arsip_dokumen()
    {
        $arsip_dokumen = arsip_dokumen_model::all();

        $data = [
            'judul'  => 'TAMBAH ARSIP DOKUMEN',
            'title'  => 'Tambah Arsip Dokumen | SI-KEP',
            'page'   => 'arsip_dokumen',
            'arsip_dokumen'=> $arsip_dokumen
        ];

        return view('pages.Admin.arsip_dokumen.tambah_arsip_dokumen', $data);
    }

    // ------------------------------------------------------- RU KELEMBAGAAN ------------------------------------------------------

    public function kelembagaan()
    {
        $data = [
            'judul'       => 'DATA KELEMBAGAAN',
            'title'       => 'Kelembagaan | SI-KEP',
            'page'        => 'Kelembagaan',
            'kelembagaan' => kelembagaan_model::all()
        ];

        return view('pages.Admin.kelembagaan.kelembagaan', $data);
    }


   // ------------------------------------------------------- CRUD KEGIATAN ------------------------------------------------------


    public function kegiatan()
    {
        $data = [
            'judul' => 'DATA KEGIATAN KELEMBAGAAN',
            'title' => 'Kegiatan | SI-KEP',
            'page'  => 'kegiatan',
            'kegiatan' => kegiatan_model::all()
        ];

        return view('pages.Admin.kegiatan.kegiatan', $data);
    }
    
     public function detail_kegiatan($id)
    {
        $kegiatan = kegiatan_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL KEGIATAN',
            'title'  => 'Detail Kegiatan | SI-KEP',
            'page'   => 'kegiatan',
            'kegiatan'=> $kegiatan
        ];

        return view('pages.Admin.kegiatan.detail_kegiatan', $data);
    }
    public function edit_kegiatan($id)
    {
        $kegiatan = kegiatan_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT KEGIATAN',
            'title'  => 'Edit Kegiatan | SI-KEP',
            'page'   => 'kegiatan',
            'kegiatan'=> $kegiatan
        ];

        return view('pages.Admin.kegiatan.edit_kegiatan', $data);
    }
    public function tambah_kegiatan()
    {
        $kegiatan = kegiatan_model::all();

        $data = [
            'judul'  => 'TAMBAH KEGIATAN',
            'title'  => 'Tambah Kegiatan | SI-KEP',
            'page'   => 'kegiatan',
            'kegiatan'=> $kegiatan
        ];

        return view('pages.Admin.kegiatan.tambah_kegiatan', $data);
}

    // ------------------------------------------------------- CRUD LAPORAN KEUANGAN ------------------------------------------------------

    public function laporan_keuangan()
    {
        $total_masuk = laporan_keuangan_model::where('jenis', 'uang masuk')->sum('jumlah');
        $total_keluar = laporan_keuangan_model::where('jenis', 'uang keluar')->sum('jumlah');
        $saldo = $total_masuk - $total_keluar;
        $data = [
            'judul' => 'DATA LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title' => 'Kas Keuangan | SI-KEP',
            'page'  => 'laporan_keuangan',
            'laporan_keuangan' => laporan_keuangan_model::all(),
            'saldo' => $saldo
        ];

        return view('pages.Admin.laporan_keuangan.laporan_keuangan', $data);
    }
    
    
    public function detail_laporan_keuangan($id)
    {
        $laporan_keuangan = laporan_keuangan_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title'  => 'Detail Kas Keuangan | SI-KEP',
            'page'   => 'laporan_keuangan',
            'laporan_keuangan'=> $laporan_keuangan
        ];

        return view('pages.Admin.laporan_keuangan.detail_laporan_keuangan', $data);
    }
    public function edit_laporan_keuangan($id)  
    {
        $laporan_keuangan = laporan_keuangan_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title'  => 'Edit Kas Keuangan | SI-KEP',
            'page'   => 'laporan_keuangan',
            'laporan_keuangan'=> $laporan_keuangan
        ];

        return view('pages.Admin.laporan_keuangan.edit_laporan_keuangan', $data);
    }
    public function tambah_laporan_keuangan()
    {
        $laporan_keuangan = laporan_keuangan_model::all();      

        $data = [
            'judul'  => 'TAMBAH LAPORAN KEUANGAN (KAS) KELEMBAGAAN',
            'title'  => 'Tambah Kas Keuangan | SI-KEP',
            'page'   => 'laporan_keuangan',
            'laporan_keuangan'=> $laporan_keuangan
        ];

        return view('pages.Admin.laporan_keuangan.tambah_laporan_keuangan', $data);
}

        // ------------------------------------------------------- CRUD PINJAMAN ------------------------------------------------------

    
    public function pinjaman()
    {
        $data = [
            'judul' => 'DATA PINJAMAN',
            'title' => 'Pinjaman | SI-KEP',
            'page'  => 'pinjaman',
            'pinjaman' => pinjaman_model::all()
        ];

        return view('pages.Admin.pinjaman.pinjaman', $data);
    }  
    public function detail_pinjaman($id)
    {
        $pinjaman = pinjaman_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL PINJAMAN',
            'title'  => 'Detail Pinjaman | SI-KEP',
            'page'   => 'pinjaman',
            'pinjaman'=> $pinjaman
        ];

        return view('pages.Admin.pinjaman.detail_pinjaman', $data);
    }
    public function edit_pinjaman($id)
    {
        $pinjaman = pinjaman_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT PINJAMAN',
            'title'  => 'Edit Pinjaman | SI-KEP',                                                       
            'page'   => 'pinjaman',
            'pinjaman'=> $pinjaman
        ];

        return view('pages.Admin.pinjaman.edit_pinjaman', $data);
    }
    public function tambah_pinjaman()
    {
        $pinjaman = pinjaman_model::all();

        $data = [
            'judul'  => 'TAMBAH PINJAMAN',          
            'title'  => 'Tambah Pinjaman | SI-KEP', 
            'page'   => 'pinjaman',
            'pinjaman'=> $pinjaman
        ];

        return view('pages.Admin.pinjaman.tambah_pinjaman', $data);
}

        // ------------------------------------------------------- CRUD ALSINTAN ------------------------------------------------------

    
    public function alsintan()
    {
        $data = [
            'judul' => 'DATA ALSINTAN',
            'title' => 'Alsintan | SI-KEP',
            'page'  => 'alsintan',
            'alsintan' => alsintan_model::all()
        ];

        return view('pages.Admin.alsintan.alsintan', $data);
    }  
    public function detail_alsintan($id)
    {
        $alsintan = alsintan_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL ALSINTAN',
            'title'  => 'Detail Alsintan | SI-KEP',
            'page'   => 'alsintan',
            'alsintan'=> $alsintan
        ];

        return view('pages.Admin.alsintan.detail_alsintan', $data);     
    }
    public function edit_alsintan($id)
    {
        $alsintan = alsintan_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT ALSINTAN',
            'title'  => 'Edit Alsintan | SI-KEP',                                                       
            'page'   => 'alsintan',
            'alsintan'=> $alsintan
        ];

        return view('pages.Admin.alsintan.edit_alsintan', $data);
    }
    public function tambah_alsintan()
    {
        $alsintan = alsintan_model::all();

        $data = [
            'judul'  => 'TAMBAH ALSINTAN',                  
            'title'  => 'Tambah Alsintan | SI-KEP', 
            'page'   => 'alsintan',
            'alsintan'=> $alsintan
        ];

        return view('pages.Admin.alsintan.tambah_alsintan', $data);
}

        // ------------------------------------------------------- CRUD OPERATOR ------------------------------------------------------

    
    public function operator()
    {
        $data = [
            'judul' => 'DATA OPERATOR',
            'title' => 'Operator | SI-KEP',
            'page'  => 'operator',
            'operator' => operator_model::all()
        ];

        return view('pages.Admin.operator.operator', $data);
    }  
    public function detail_operator($id)
    {
        $operator = operator_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL OPERATOR',
            'title'  => 'Detail Operator | SI-KEP',
            'page'   => 'operator',
            'operator'=> $operator
        ];

        return view('pages.Admin.operator.detail_operator', $data);
    }
    public function edit_operator($id)
    {
        $operator = operator_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT OPERATOR',
            'title'  => 'Edit Operator | SI-KEP',                                                       
            'page'   => 'operator',
            'operator'=> $operator
        ];

        return view('pages.Admin.operator.edit_operator', $data);
    }
    public function tambah_operator()
    {
        $operator = operator_model::all();

        $data = [
            'judul'  => 'TAMBAH OPERATOR',          
            'title'  => 'Tambah Operator | SI-KEP', 
            'page'   => 'operator',
            'operator'=> $operator
        ];

        return view('pages.Admin.operator.tambah_operator', $data);
}

        // ------------------------------------------------------- CRUD PENGGUNAAN ALSINTAN ------------------------------------------------------

    
    public function penggunaan_alsintan()
    {
        $data = [
            'judul' => 'DATA PENGGUNAAN ALSINTAN',
            'title' => 'Penggunaan Alsintan | SI-KEP',
            'page'  => 'penggunaan_alsintan',
            'penggunaan_alsintan' => penggunaan_alsintan_model::all()
        ];

        return view('pages.Admin.penggunaan_alsintan.penggunaan_alsintan', $data);
    }  
    public function detail_penggunaan_alsintan($id)
    {
        $penggunaan_alsintan = penggunaan_alsintan_model::findOrFail($id);

        $data = [
            'judul'  => 'DETAIL PENGGUNAAN ALSINTAN',
            'title'  => 'Detail Penggunaan Alsintan | SI-KEP',
            'page'   => 'penggunaan_alsintan',
            'penggunaan_alsintan'=> $penggunaan_alsintan
        ];

        return view('pages.Admin.penggunaan_alsintan.detail_penggunaan_alsintan', $data);
    }
    public function edit_penggunaan_alsintan($id)
    {
        $penggunaan_alsintan = penggunaan_alsintan_model::findOrFail($id);

        $data = [
            'judul'  => 'EDIT PENGGUNAAN ALSINTAN',
            'title'  => 'Edit Penggunaan Alsintan | SI-KEP',                                                       
            'page'   => 'penggunaan_alsintan',
            'penggunaan_alsintan'=> $penggunaan_alsintan
        ];

        return view('pages.Admin.penggunaan_alsintan.edit_penggunaan_alsintan', $data);
    }
    public function tambah_penggunaan_alsintan()
    {
        $penggunaan_alsintan = penggunaan_alsintan_model::all();

        $data = [
            'judul'  => 'TAMBAH PENGGUNAAN ALSINTAN',          
            'title'  => 'Tambah Penggunaan Alsintan | SI-KEP', 
            'page'   => 'penggunaan_alsintan',
            'penggunaan_alsintan'=> $penggunaan_alsintan
        ];

        return view('pages.Admin.penggunaan_alsintan.tambah_penggunaan_alsintan', $data);
}
        // ------------------------------------------------------- CRUD PERAWATAN ------------------------------------------------------

    
    public function perawatan()
    {
        $data = [
            'judul' => 'DATA PERAWATAN ALSINTAN',
            'title' => 'Perawatan Alsintan | SI-KEP',
            'page'  => 'perawatan',
            'perawatan' => perawatan_model::with('alsintan')->get()
        ];

        return view('pages.Admin.perawatan.perawatan', $data);
    }  
    public function detail_perawatan($id_perawatan)
{
    $perawatan = perawatan_model::with('alsintan')->findOrFail($id_perawatan);

    $data = [
        'judul'     => 'DETAIL PERAWATAN ALSINTAN',
        'title'     => 'Detail Perawatan Alsintan | SI-KEP',
        'page'      => 'Perawatan Alsintan',
        'perawatan' => $perawatan
    ];

    return view('pages.Admin.perawatan.detail_perawatan', $data);
}

   public function edit_perawatan($id_perawatan)
{
    $data = [
        'judul'     => 'EDIT PERAWATAN ALSINTAN',
        'title'     => 'Edit Perawatan Alsintan | SI-KEP',
        'page'      => 'Perawatan Alsintan',
        'perawatan' => perawatan_model::findOrFail($id_perawatan),
        'alsintan'  => alsintan_model::all()
    ];

    return view('pages.Admin.perawatan.edit_perawatan', $data);
}

   public function tambah_perawatan()
{
    $data = [
        'judul'    => 'TAMBAH PERAWATAN ALSINTAN',
        'title'    => 'Tambah Perawatan Alsintan | SI-KEP',
        'page'     => 'Perawatan Alsintan',
        'alsintan' => alsintan_model::all()
    ];

    return view('pages.Admin.perawatan.tambah_perawatan', $data);
}


        // ------------------------------------------------------- CRUD PENYUSUTAN ------------------------------------------------------

        public function penyusutan()
    {
        $data = [
            'judul' => 'DATA PENYUSUTAN ALSINTAN',
            'title' => 'Penyusutan Alsintan | SI-KEP',
            'page'  => 'penyusutan',
            'penyusutan' => penyusutan_model::with('alsintan')->get()
        ];

        return view('pages.Admin.penyusutan.penyusutan', $data);
    }

    // ===================== DETAIL =====================
    public function detail_penyusutan($id)
    {
        $data = [
            'judul' => 'DETAIL PENYUSUTAN ALSINTAN',
            'title' => 'Detail Penyusutan | SI-KEP',
            'page'  => 'penyusutan',
            'penyusutan' => penyusutan_model::with('alsintan')->findOrFail($id)
        ];

        return view('pages.Admin.penyusutan.detail_penyusutan', $data);
    }

    // ===================== TAMBAH =====================
    public function tambah_penyusutan()
    {
        $data = [
            'judul' => 'TAMBAH PENYUSUTAN ALSINTAN',
            'title' => 'Tambah Penyusutan | SI-KEP',
            'page'  => 'penyusutan',
            'alsintan' => alsintan_model::all()
        ];

        return view('pages.Admin.penyusutan.tambah_penyusutan', $data);
    }

    public function store_penyusutan(Request $request)
    {
        $request->validate([
            'id_alsintan' => 'required',
            'tahun' => 'required',
            'nilai_perolehan' => 'required|numeric',
            'nilai_penyusutan' => 'required|numeric',
            'frekuensi' => 'required|numeric'
        ]);

        penyusutan_model::create($request->all());

        return redirect('admin/penyusutan')
            ->with('success', 'Data penyusutan berhasil ditambahkan');
    }

    // ===================== EDIT =====================
    public function edit_penyusutan($id)
    {
        $data = [
            'judul' => 'EDIT PENYUSUTAN ALSINTAN',
            'title' => 'Edit Penyusutan | SI-KEP',
            'page'  => 'penyusutan',
            'penyusutan' => penyusutan_model::findOrFail($id),
            'alsintan' => alsintan_model::all()
        ];

        return view('pages.Admin.penyusutan.edit_penyusutan', $data);
    }

    public function update_penyusutan(Request $request, $id)
    {
        $penyusutan = penyusutan_model::findOrFail($id);

        $penyusutan->update($request->all());

        return redirect('admin/penyusutan')
            ->with('success', 'Data penyusutan berhasil diperbarui');
    }

    // ===================== HAPUS =====================
    public function hapus_penyusutan($id)
    {
        penyusutan_model::findOrFail($id)->delete();

        return redirect('admin/penyusutan')
            ->with('success', 'Data penyusutan berhasil dihapus');
    }


        // ------------------------------------------------------- CRUD LAPORAN UPJA ------------------------------------------------------

    
    public function laporan_upja()
{
    $data = [
        'judul' => 'DATA LAPORAN UPJA',
        'title' => 'Laporan UPJA | SI-KEP',
        'page'  => 'Laporan UPJA',
        'laporan' => laporan_upja_model::with('user')->get()
    ];

    return view('pages.Admin.laporan_upja.laporan_upja', $data);
}

    public function detail_laporan_upja($id)
{
    $data = [
        'judul' => 'DETAIL LAPORAN UPJA',
        'title' => 'Detail Laporan UPJA | SI-KEP',
        'page'  => 'Laporan UPJA',
        'laporan' => laporan_upja_model::with('user')->findOrFail($id)
    ];

    return view('pages.Admin.laporan_upja.detail_laporan_upja', $data);
}

    public function edit_laporan_upja($id)
{
    $data = [
        'judul' => 'EDIT LAPORAN UPJA',
        'title' => 'Edit Laporan UPJA | SI-KEP',
        'page'  => 'Laporan UPJA',
        'laporan' => laporan_upja_model::findOrFail($id)
    ];
    

    return view('pages.Admin.laporan_upja.edit_laporan_upja', $data);
}
public function update_laporan_upja(Request $request, $id)
{
    $laporan = laporan_upja_model::findOrFail($id);

    $laporan->update([
        'periode' => $request->periode,
        'tanggal_laporan' => $request->tanggal_laporan,
        'total_pendapatan' => $request->total_pendapatan,
        'total_pengeluaran' => $request->total_pengeluaran,
    ]);

    return redirect()->route('admin.laporan_upja')
        ->with('success', 'Laporan UPJA berhasil diperbarui');
}


    public function tambah_laporan_upja()  
    {
        $laporan_upja = laporan_upja_model::all();

        $data = [
            'judul'  => 'TAMBAH LAPORAN UPJA',          
            'title'  => 'Tambah Laporan UPJA | SI-KEP', 
            'page'   => 'laporan_upja',
            'laporan_upja'=> $laporan_upja
        ];

        return view('pages.Admin.laporan_upja.tambah_laporan_upja', $data);
}
public function store_laporan_upja(Request $request)
{
    $request->validate([
        'periode' => 'required',
        'tanggal_laporan' => 'required|date',
        'total_pendapatan' => 'required|numeric',
        'total_pengeluaran' => 'required|numeric',
    ]);

    laporan_upja_model::create([
        'periode' => $request->periode,
        'tanggal_laporan' => $request->tanggal_laporan,
        'total_pendapatan' => $request->total_pendapatan,
        'total_pengeluaran' => $request->total_pengeluaran,
        'dibuat_oleh' => Auth::id()
    ]);

    return redirect()->route('admin.laporan_upja')
        ->with('success', 'Laporan UPJA berhasil ditambahkan');
}

public function hapus_laporan_upja($id)
{
    laporan_upja_model::findOrFail($id)->delete();

    return redirect()->route('admin.laporan_upja')
        ->with('success', 'Laporan UPJA berhasil dihapus');
}

}