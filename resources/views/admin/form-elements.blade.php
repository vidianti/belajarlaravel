
@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Form Elements</h1>

    <div class="card">
        <div class="card-header">
            <h5>Form Input</h5>
        </div>

        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input
                        type="text"
                        id="nama"
                        class="form-control"
                        placeholder="Masukkan nama"
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        class="form-control"
                        placeholder="Masukkan email"
                    >
                </div>

                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea
                        id="pesan"
                        class="form-control"
                        rows="4"
                        placeholder="Masukkan pesan"
                    ></textarea>
                </div>

                <button type="button" class="btn btn-primary">
                    Submit
                </button>

                <button type="reset" class="btn btn-secondary">
                    Reset
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
