@@ -8,6 +8,9 @@
@section('jabatan_pegawai', $pegawai['jabatan_pegawai'])

@section('content')
<div class="col-lg-8">
                    <div class="card" style="background: #f5f5f5">
                            <div class="basic-form">
                    @foreach($restoran as $restoran)
                    <form method="POST" action="{{URL('pegawai/restoran', $restoran->id_restoran)}}">
                        {{ csrf_field() }}
@@ -28,5 +31,8 @@
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                    @endforeach
@endsection
