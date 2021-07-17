@extends('frontend.layouts.layout')
@section('content')
<div class="container">
<div class="card">
<div class="container" style="padding-top:40px; padding-bottom:40px; padding-right:115px; padding-left:100px">
    <h2>Kritik dan Saran</h2><br>
    <form action="{{ route('simpanpengguna')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input name="name" required type="text" id="name" class="form-control"  value="{{ auth()->user()->name }}">
        </div>
        <div class="form-group">
            <input name="username" required type="text" id="username" class="form-control" placeholder="Alamat">
        </div>
        <div class="form-group">
            <input name="email" required type="email" id="email" class="form-control"  value="{{ auth()->user()->email }}">
        </div>
        <div class="form-group">
            <input name="password" required type="text" id="Password" class="form-control" placeholder="Komentar">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success">Kirim Komentar</button>
        </div>
    </form>
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
    </div>
    </div>
    <br>
    @stop
