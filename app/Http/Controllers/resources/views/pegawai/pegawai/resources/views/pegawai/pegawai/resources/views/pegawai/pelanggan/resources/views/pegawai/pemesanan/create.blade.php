@@ -9,50 +9,74 @@

@section('content')

                    <form method="POST" action="{{ URL('pegawai/pemesanan/') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="id_restoran" class="col-sm-2 col-form-label">Restoran</label>
                            <div class="col-sm-10">
                                <select name="id_restoran" class="form-control">
                                    @foreach($restoran as $restoran)
                                    <option value="{{$restoran->id_restoran}}">{{$restoran->nama_restoran.' - '.$restoran->alamat_restoran}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama Pegawai</label>
                            <div class="col-sm-10">
                                <select name="id_pegawai" class="form-control">
                                    @foreach($pegawais as $pegawais)
                                    <option value="{{$pegawais->id_pegawai}}">{{$pegawais->nama_pegawai}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                            <div class="col-sm-10">
                                <select name="id_pelanggan" class="form-control">
                                    @foreach($pelanggan as $pelanggan)
                                    <option value="{{$pelanggan->id_pelanggan}}">{{$pelanggan->nama_pelanggan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($hidangan as $hidangan)
                            <div class="col-md-3">
                                <input type="checkbox" name="hidangan[]" value="{{$hidangan->id_hidangan}}">{{$hidangan->nama_hidangan}}
                                <input type="text" class="form-control" name="harga_hidangan{{$hidangan->id_hidangan}}" value="{{$hidangan->harga_hidangan}}" readonly="">
                                <input type="text" class="form-control" name="jumlah_hidangan{{$hidangan->id_hidangan}}" placeholder="Jumlah">
                    <div class="card">
                            <div class="basic-form">
                                 <form method="POST" action="{{ URL('pegawai/pemesanan/') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="id_restoran">Restoran</label>
                                        <select name="id_restoran" class="form-control">
                                            @foreach($restoran as $restoran)
                                            <option value="{{$restoran->id_restoran}}">{{$restoran->nama_restoran.' - '.$restoran->alamat_restoran}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <ul class="nav nav-tabs customtab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#makanan" role="tab"><span class="hidden-sm-up"><i class="ti-fire"></i></span> <span class="hidden-xs-down">Makanan</span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#minuman" role="tab"><span class="hidden-sm-up"><i class="ti-fire"></i></span> <span class="hidden-xs-down">Minuman</span></a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="makanan" role="tabpanel">
                                            <div class="row">
                                            @foreach($makanan as $makanan)
                                            <div class="col-md-3">
                                                <div class="card">
                                                  <img class="card-img-top" src="{{ asset('images/hidangan/'.$makanan->foto_hidangan) }}">
                                                  <div class="card-body">
                                                    <h4 class="card-title">{{$makanan->nama_hidangan}}</h4>
                                                    <p class="card-text">Rp {{$makanan->harga_hidangan}}</p>
                                                    <div class="row">
                                                        <input type="checkbox" class="form-control col-md-4" name="hidangan[]" value="{{$makanan->id_hidangan}}">
                                                        <input type="hidden" class="form-control" name="harga_hidangan{{$makanan->id_hidangan}}" value="{{$makanan->harga_hidangan}}">
                                                        <input type="text" class="form-control col-md-8" name="jumlah_hidangan{{$makanan->id_hidangan}}" placeholder="Jumlah">
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="minuman" role="tabpanel">
                                            <div class="row">
                                            @foreach($minuman as $minuman)
                                            <div class="col-md-3">
                                                <div class="card">
                                                  <img class="card-img-top" src="{{ asset('images/hidangan/'.$minuman->foto_hidangan) }}">
                                                  <div class="card-body">
                                                    <h4 class="card-title">{{$minuman->nama_hidangan}}</h4>
                                                    <p class="card-text">Rp {{$minuman->harga_hidangan}}</p>
                                                    <div class="row">
                                                        <input type="checkbox" class="form-control col-md-4" name="hidangan[]" value="{{$minuman->id_hidangan}}">
                                                        <input type="hidden" class="form-control" name="harga_hidangan{{$minuman->id_hidangan}}" value="{{$minuman->harga_hidangan}}">
                                                        <input type="text" class="form-control col-md-8" name="jumlah_hidangan{{$minuman->id_hidangan}}" placeholder="Jumlah">
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            </div>
                                        </div>

                                        <div style="text-align: right;">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a class="btn btn-danger" href="{{URL('pegawai/pemesanan')}}">Batal</a>
                                        </div>
                                    </div>                                    
                                </form>
                            </div>
                            @endforeach
                        </div>
                        <input type="hidden" name="id_pegawai" value="1">
                        <div style="text-align: right;">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                    </div>
@endsection
