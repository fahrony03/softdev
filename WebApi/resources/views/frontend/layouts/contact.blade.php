@extends('frontend.layouts.layout')
@section('content')
    <div class="container" style="padding-top:40px; padding-bottom:40px;">
        <div class="card">
            <div class="card-body">
                <h1 ><b>Contact admin</b></h1>
                <div class="form">
                <form action="aksi.php" method="POST">
		<fieldset>
		<div>
			<label for="nama">Nama: </label>
			<input type="text" class="form-control form-control-user"  name="nama" placeholder="Isi Nama Lengkap"
            required oninvalid="this.setCustomValidity('data tidak boleh kosong')"/>
		</div>
		<div>
			<label for="alamat">Alamat: </label>
			<input type="text" class="form-control form-control-user"  name="alamat" placeholder="Isi Alamat Lengkap"
            required oninvalid="this.setCustomValidity('data tidak boleh kosong')"/>
		</div>
        <div>
			<label for="no">Nomor Telepon</label>
			<input type="text" class="form-control form-control-user" name="no" placeholder="Nomor Telepon"
            required oninvalid="this.setCustomValidity('data tidak boleh kosong')"/>
		</div>
        <div>
        <label for="komentar">Komentar</label>
        <textarea class="form-control" name="komentar" rows="3"></textarea>
        </div>
        <br>
        <div>
        	<input type="submit" class="btn btn-success btn-lg btn-block" value="Daftar" name="daftar" />
		</div>

		</fieldset>

	</form>
    <br>
                <div class="text-center">
                    <a class="small" href="https://chat.whatsapp.com/Kb1NTOu8YlNJRbVjuu7fvb">Contact Via Whatsapp</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>

    </div>

    </div>
    </div>
    </div>
    </div>
    @stop
