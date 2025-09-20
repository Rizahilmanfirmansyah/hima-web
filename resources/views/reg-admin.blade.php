@extends('layouts.layout-log')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 24rem;">
                @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('notif') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-header">
                    Add Role Admin
                </div>
                <div class="card-body">
                    <form action="{{ route('aksireg') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Role</label>
                            <input type="text" name="role" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
