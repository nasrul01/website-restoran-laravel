@@ -8,6 +8,9 @@
@section('jabatan_pegawai', $pegawai['jabatan_pegawai'])

@section('content')
<div class="col-lg-12">
    <div class="card" style="background: #f5f5f5">
        <div class="basic-form">

                    <a href="{{URL('pegawai/pemesanan/create')}}" class="btn btn-success">Tambah Pemesanan</a>

@@ -33,4 +36,7 @@
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
  7 changes: 7 additions & 0 deletions7  
resources/views/pegawai/pengaturan/edit.blade.php
Original file line number	Diff line number	Diff line change
@@ -8,6 +8,10 @@
@section('jabatan_pegawai', $pegawai['jabatan_pegawai'])

@section('content')

<div class="col-lg-8">
                    <div class="card" style="background: #f5f5f5">
                            <div class="basic-form">
                    <form method="POST" action="{{URL('pegawai/pengaturan', $pegawai['id_pegawai'])}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
@@ -67,4 +71,7 @@
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
