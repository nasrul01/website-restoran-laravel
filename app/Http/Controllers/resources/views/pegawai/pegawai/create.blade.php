@@ -8,43 +8,44 @@
@section('jabatan_pegawai', $pegawai['jabatan_pegawai'])

@section('content')
                    <form method="POST" action="{{ URL('pegawai/pegawai') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="nama_pegawai" placeholder="Nama Pegawai" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="" name="email_pegawai" placeholder="Email Pegawai" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="username_pegawai" placeholder="Username Pegawai" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="" name="password_pegawai" placeholder="Password Pegawai" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Jabatan Pegawai</label>
                            <div class="col-sm-10">
                                <select name="jabatan_pegawai" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Super Admin">Super Admin</option>
                                </select>
                            </div>
                        </div>
                        <div style="text-align: right;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
<div class="col-lg-8">
    <div class="card" style="background: #f5f5f5">
        <div class="basic-form">

            <form method="POST" action="{{URL('pegawai/pelanggan')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input id="name" class="form-control" type="text" name="nama_pegawai" placeholder="Nama" required autofocus>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input id="email" class="form-control" type="email" name="email_pegawai" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input id="username" class="form-control" type="text" name="username_pegawai" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" class="form-control" type="password" name="password_pegawai" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label>Jabatan Pegawai</label>
                    <select name="jabatan_pegawai" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Super Admin">Super Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input id="foto" class="form-control" type="file" name="foto_pegawai" required>
                </div>

                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

            </form>
        </div>
    </div>
</div>
@endsection
