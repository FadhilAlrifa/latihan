@extends('admin.sidebar')

@section('isi')
    <link rel="stylesheet" href="css/akun.css">
    <div style="width: 100%">





        {{-- <button class="mt-3 mb-3">
        <p>Download</p>
        <svg stroke-width="4" stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linejoin="round" stroke-linecap="round"></path>
        </svg>
        </button> --}}
        <form action="/dashboard/create">
        <div>
            <button class="continue-application mt-5  " type="submit">
                <div>
                    <div class="pencil"></div>
                    <div class="folder">
                        <div class="top">
                            <svg viewBox="0 0 24 27">
                                <path
                                    d="M1,0 L23,0 C23.5522847,-1.01453063e-16 24,0.44771525 24,1 L24,8.17157288 C24,8.70200585 23.7892863,9.21071368 23.4142136,9.58578644 L20.5857864,12.4142136 C20.2107137,12.7892863 20,13.2979941 20,13.8284271 L20,26 C20,26.5522847 19.5522847,27 19,27 L1,27 C0.44771525,27 6.76353751e-17,26.5522847 0,26 L0,1 C-6.76353751e-17,0.44771525 0.44771525,1.01453063e-16 1,0 Z">
                                </path>
                            </svg>
                        </div>
                        <div class="paper"></div>
                    </div>
                </div>
                Tambah Akun
            </button>
        </div>
    </form>

        {{-- <div>
            <a href="/dashboard/create">Tambah Akun</a>
        </div> --}}
        <div class="mt-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Username</th>
                    <th scope="col">level</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($user as $akun)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $akun->name }}</td>
                        <td>{{ $akun->nik }}</td>
                        <td>{{ $akun->tlp }}</td>
                        <td>{{ $akun->username }}</td>
                        <td>{{ $akun->level }}</td>
                        <td>


                            <form class="d-flex justify-content-center" action="/dashboard/{{ $akun->id }}"
                                method="post">
                                <a href="/edit/{{ $akun->id }}" >
                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="hover"
                                        style="width:30px;height:30px">
                                    </lord-icon>
                                </a>
                                @method('delete')
                                @csrf
                                <button type="submit" class="border-0 bg-transparent d-block" href="" onclick="return confirm('Hapus Data?')">
                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="hover"
                                        style="width:30px;height:30px">
                                    </lord-icon>
                                </button>
                            </form>


                        </td>
                    </tr>
                @endforeach
                <td></td>
            </tbody>
        </table>
    </div>
@endsection
