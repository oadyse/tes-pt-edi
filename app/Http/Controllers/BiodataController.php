<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Pekerjaan;
use App\Models\Pelatihan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function index()
    {
        $data = Biodata::where('id_user', Auth::user()->id)->first();
        $exist = Biodata::where('id_user', Auth::user()->id)->count();
        return view('biodata.bio', compact('data', 'exist'));
    }

    public function createForm()
    {
        return view('biodata.create');
    }

    public function addNew(Request $request)
    {
        $add = Biodata::create([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'no_ktp' => $request->no_ktp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'status' => $request->status,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_domisili' => $request->alamat_domisili,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'close_person' => $request->close_person,
            'skills' => $request->skills,
            'placement' => $request->placement,
            'salary' => $request->salary,
        ]);
        $add1 = Pendidikan::create([
            'id_biodata' => $add->id,
            'jenjang' => $request->jenjang,
            'institusi' => $request->institusi,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
            'ipk' => $request->ipk,
        ]);
        $add2 = Pelatihan::create([
            'id_biodata' => $add->id,
            'nama_kursus' => $request->nama_kursus,
            'sertifikat' => $request->sertifikat,
            'tahun' => $request->tahun,
        ]);
        $add3 = Pekerjaan::create([
            'id_biodata' => $add->id,
            'perusahaan' => $request->perusahaan,
            'posisi' => $request->posisi,
            'salary' => $request->salary,
            'tahun' => $request->tahun,
        ]);
        $add->save();
        $add1->save();
        $add2->save();
        $add3->save();

        if ($add) {
            return redirect('/biodata')->with("successAdd", "Data added successfully");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $data = Biodata::where('id', $id)->first();
        return view('biodata.update', compact('id', 'data'));
    }

    public function detail($id)
    {
        $id = base64_decode($id);
        $data = Biodata::where('id', $id)->first();
        return view('biodata.detail', compact('id', 'data'));
    }

    public function processUpdate(Request $request, $id)
    {
        $id = base64_decode($id);
        $process = Biodata::findOrFail($id)->update([
            'id_user' => $request->id_user,
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'no_ktp' => $request->no_ktp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'status' => $request->status,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_domisili' => $request->alamat_domisili,
            'no_hp' => $request->no_hp,
            'close_person' => $request->close_person,
            'skills' => $request->skills,
            'placement' => $request->placement,
            'salary' => $request->salary,
        ]);
        $process1 = Pendidikan::findOrFail($id)->update([
            'id_biodata' => $process->id,
            'jenjang' => $request->jenjang,
            'institusi' => $request->institusi,
            'jurusan' => $request->jurusan,
            'tahun_lulus' => $request->tahun_lulus,
            'ipk' => $request->ipk,
        ]);
        $process2 = Pelatihan::findOrFail($id)->update([
            'id_biodata' => $process->id,
            'nama_kursus' => $request->nama_kursus,
            'sertifikat' => $request->sertifikat,
            'tahun' => $request->tahun,
        ]);
        $process3 = Pekerjaan::findOrFail($id)->update([
            'id_biodata' => $process->id,
            'perusahaan' => $request->perusahaan,
            'posisi' => $request->posisi,
            'salary' => $request->salary,
            'tahun' => $request->tahun,
        ]);

        if ($process) {
            return redirect('/biodata')->with("successUpdate", "Data updated successfully");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    public function delete($id)
    {
        $id = base64_decode($id);
        try {
            $process = Biodata::findOrFail($id)->delete();
            $process1 = Biodata::findOrFail($id)->delete();
            $process2 = Biodata::findOrFail($id)->delete();
            $process3 = Biodata::findOrFail($id)->delete();
            if ($process) {
                return redirect()->back()->with("delete", "Poof! Your data has been deleted!");
            } else {
                return redirect()->back()->withErrors("Terjadi kesalahan saat menghapus data");
            }
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
