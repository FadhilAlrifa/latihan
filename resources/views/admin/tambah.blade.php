@extends('admin.sidebar')

@section('isi')
<form method="post" action="/tambah">
    @csrf
    <div class="mb-3">
      <label class="form-label @error('name') is-invalid @enderror">Nama lengkap</label>
      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
      @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
      <label class="form-label @error('username') is-invalid @enderror">Username</label>
      <input type="text" class="form-control" name="username" value="{{ old('username') }}">
      @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
      <label class="form-label @error('nik') is-invalid @enderror">NIK</label>
      <input type="number" class="form-control" name="nik" value="{{ old('nik') }}">
      @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
      <label  class="form-label @error('tlp') is-invalid @enderror">Telepon</label>
      <input type="text" class="form-control" name="tlp" value="{{ old('tlp') }}">
      @error('tlp') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="mb-3">
      <label  class="form-label @error('password') is-invalid @enderror">password</label>
      <input type="Password" class="form-control" name="password" >
      @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <select name="level" class="form-select" aria-label="Default select example">
        <option selected>Pilih Level</option>
        <option value="admin">Admin</option>
        <option value="petugas">petugas</option>
        <option value="masyarakat">masyarakat</option>
      </select>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
