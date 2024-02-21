@extends('layouts.admin')
@section('title','Tambah Data Siswa')


@section('content')

   <!-- Main Content -->
   <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah Data Siswa</h1>
      </div>
      
      <div class="section-body">
        <div class="row">
          <div class="col-5">
            <div class="card">
              <div class="card-header">
                <a href="{{route('data-siswa.index')}}" class="btn btn-primary"> Kembali </a>
              </div>
              <div class="card-body p-0">
                <form action="{{route('data-siswa.store')}}"  method="POST">
                  @csrf
                  <div class="card-body">
                <div class="form-group">
                  <label for="">Nisn</label>
                  <input type="text" name="nisn" class="form-control" value="{{old ('nisn')}}" required>
                </div>
                <div class="form-group">
                  <label for="">Nis</label>
                  <input type="text" name="nis" class="form-control" value="{{old ('nis')}}" required>
                </div>
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama" class="form-control" value="{{old ('nama')}}" required>
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" class="form-control" value="{{old ('password')}}" required>
                </div>
                <div class="form-group">
                  <label for="">Kelas</label>
                  <select name="kelas" id="" class="form-select" {{count($kelas)== 0 ? 'disabled' : ''}}>
                  @if(count($kelas)==0)
                   <option value="">Pilihan Tidak Ada</option>   
                   @else
                   <option value="">Silahkan Pilih</option>
                   @foreach ($kelas as $kls)
                       <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                   @endforeach
                   @endif
                </select>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="{{old ('alamat')}}" required>
                </div>
                <div class="form-group">
                  <label for="">No Telepon</label>
                  <input type="text" name="no_telp" class="form-control" value="{{old ('no_telp')}}" required>
                </div>
                <div class="form-group">
                  <label for="">Spp</label>
                  <select name="spp" id="" class="form-select" {{count($spp)== 0 ? 'disabled' : ''}}>
                    @if(count($spp)==0)
                     <option value="">Pilihan Tidak Ada</option>   
                     @else
                     <option value="">Silahkan Pilih</option>
                     @foreach ($spp as $spp)
                         <option value="{{ $spp->id_spp }}">{{' Bulan '.$spp->bulan.' - '.'Rp.'.number_format
                         ($spp->nominal)}}</option>
                     @endforeach
                     @endif
                  </select>
                </div>
              </div>
                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>

@endsection

@push('addon-script')
   
@endpush