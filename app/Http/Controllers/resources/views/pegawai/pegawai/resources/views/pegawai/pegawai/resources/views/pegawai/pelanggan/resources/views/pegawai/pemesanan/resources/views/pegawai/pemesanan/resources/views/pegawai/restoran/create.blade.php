@@ -8,6 +8,9 @@
@section('jabatan_pegawai', $pegawai['jabatan_pegawai'])

@section('content')
                <div class="col-lg-8">
                    <div class="card" style="background: #f5f5f5">
                            <div class="basic-form">
                    <form method="POST" action="{{ URL('pegawai/restoran') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
@@ -26,4 +29,7 @@
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
