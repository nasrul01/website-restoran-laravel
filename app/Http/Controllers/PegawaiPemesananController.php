@@ -31,8 +31,9 @@ public function create(){
        $restoran = Restoran::all();
        $pelanggan = Pelanggan::all();
        $pegawais = Pegawai::all();
        $hidangan = Hidangan::all();
        return view('pegawai.pemesanan.create', compact('pegawais', 'restoran', 'pelanggan', 'hidangan', 'pegawai'));
        $makanan = Hidangan::where('jenis_hidangan', 'Makanan')->get();
        $minuman = Hidangan::where('jenis_hidangan', 'Minuman')->get();
        return view('pegawai.pemesanan.create', compact('pegawais', 'restoran', 'pelanggan', 'makanan','minuman', 'pegawai'));
    }

    public function store(Request $request){
