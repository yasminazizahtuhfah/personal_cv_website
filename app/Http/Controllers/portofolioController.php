<?php
namespace App\Http\Controllers;
use App\Models\portofolio; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\identitas;

class portofolioController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)) {
            $data = portofolio::where('id', 'like', "%$katakunci%")
                ->orWhere('nama_proyek', 'like', "%$katakunci%")
                ->orWhere('deskripsi', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = portofolio::orderBy('id', 'desc')->paginate($jumlahbaris);
        }
        return view('portofolio.index')->with('data', $data); 
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $identitasData = identitas::all();

        return view('portofolio.create')->with('identitasData', $identitasData); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_proyek', $request->nama_proyek);
        Session::flash('deskripsi', $request->deskripsi);

        $validator = Validator::make($request->all(), [
            'identitas_id' => [
                'required',
                'exists:identitas,id',
            ],
        ]);
        
        if ($validator->fails()) {
            return redirect("portofolio/create")
                        ->withErrors($validator)
                        ->withInput();
        }

        // Periksa apakah file telah diunggah
        if ($request->hasFile('foto_proyek')) {
            $foto_file = $request->file('foto_proyek');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
            $foto_file->move(public_path('foto_proyek'), $foto_nama);
        } else {
            // Tidak ada file yang diunggah, atur nilai $foto_nama ke string kosong
            $foto_nama = 'default.jpg';
        }

        $data = [
            'nama_proyek' => $request->nama_proyek,
            'deskripsi' => $request->deskripsi,
            'foto_proyek' => $foto_nama
        ];
        
        $identitas_id = $request->input('identitas_id');
        if ($identitas_id) {
            $data['identitas_id'] = $identitas_id;
        }
        portofolio::create($data);

        return redirect()->to('portofolio')->with('success', 'Berhasil menambahkan data');
    }

    /**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
   //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $data = portofolio::where('id', $id)->first(); 
    return view('portofolio.edit')->with('data', $data); 
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $data = [
        'nama_proyek' => $request->nama_proyek,
        'deskripsi' => $request->deskripsi,
    ];

    if ($request->hasFile('foto_proyek')) {

        $foto_file = $request->file('foto_proyek');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . '.' . $foto_ekstensi;
        $foto_file->move(public_path('foto_proyek'), $foto_nama);

        $data['foto_proyek'] = $foto_nama;
    }

    portofolio::where('id', $id)->update($data);
    return redirect()->to('portofolio')->with('success', 'Berhasil melakukan update data');
}


/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    portofolio::where('id', $id)->delete(); 
    return redirect()->to('portofolio')->with('success', 'Berhasil melakukan delete data'); 
}

}