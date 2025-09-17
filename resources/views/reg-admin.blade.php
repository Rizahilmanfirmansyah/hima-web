@extends('layouts.layout-log')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Add Role Admin
                </div>
                <div class="card-body">
                    <form action="{{ route('aksireg') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Role</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
