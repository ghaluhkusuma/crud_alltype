@extends('layout/aplikasi')
@section('konten')
    

    <div class="row">
    <div class="container mt-5 mb-5">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
            <div class="card-body">
                <form action="{{route("posts.store")}}" method="POST" enctype="multipart/form-data">
                
                    @csrf
                    

                    <div class="form-group">
                        <label class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control" @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Anda">
                    
                        <!-- error message untuk title -->
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Laki-Laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
                        <label class="form-check-label" for="jk">
                          Perempuan
                        </label>
                      </div>
                    </div>


                    <div class="form-group">
                        <label class="font-weight-bold">Golongan Darah</label>
                    <select name="golongandarah" id="golongandarah" class="form-control">
                        <option class="form-control" value="">-- Silahkan Pilih Golongan Darah --</option>
                        <option class="form-control" value="O">O</option>
                        <option class="form-control" value="A">A</option>
                        <option class="form-control" value="B">B</option>
                        <option class="form-control" value="AB">AB</option>
                        <option class="form-control" value="Tidak Tahu">Tidak Tahu</option>

                    </select>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Tempat Lahir</label>
                        <input type="text" class="form-control" @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ old('tempatlahir') }}" placeholder="Masukkan Tempat Lahir Anda">
                    
                        <!-- error message untuk title -->
                        @error('tempatlahir')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

  {{--                   <div class="form-group">
                        <label class="font-weight-bold">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror" name="tanggallahir" value="{{ old('tanggallahir') }}" >
                    
                        <!-- error message untuk title -->
                        @error('tanggallahir')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Agama</label>
                    <select name="agama" id="agama" class="form-control">
                        <option class="form-control" value="">-- Silahkan Pilih Agama --</option>
                        <option class="form-control" value="Islam">Islam</option>
                        <option class="form-control" value="Kristen">Kristen</option>
                        <option class="form-control" value="Katholik">Katholik</option>
                        <option class="form-control" value="Hindu">Hindu</option>
                        <option class="form-control" value="Budha">Budha</option>

                    </select>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Hobi</label>
                        <div class="form-check">
                        <input name="hobi" class="btn-check" type="checkbox" value="Olahraga"> 
                        <label for="">Olahraga</label>
                        </div>
                        <div class="form-check">
                        <input name="hobi" class="btn-check" type="checkbox" value="Membaca"> 
                        <label for="">Membaca</label>
                        </div>
                        <div class="form-check">
                        <input name="hobi" class="btn-check" type="checkbox" value="Bermain Game"> 
                        <label for="">Bermain Game</label>
                        </div>
                        <div class="form-check">
                        <input name="hobi" class="btn-check" type="checkbox" value="Lainnya"> 
                        <label for="">Lainnya</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                    
                        <!-- error message untuk title -->
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan alamat">
                            {{ old('alamat') }}
                        
                        </textarea>
                    
                        <!-- error message untuk content -->
                        @error('content')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Foto</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                    
                        <!-- error message untuk title -->
                        @error('foto')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}

                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>


                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
        


@endsection