@extends('layout/aplikasi')
@section('konten')
    
<body style="background: rgb(250, 247, 247)">

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Golongan Darah</th>
                                <th scope="col">Tempat Lahir</th>
                                {{-- <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Hobi</th>
                                <th scope="col">Email</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Aksi</th> --}} 
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                <tr>
                                    
                                    
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->jk }}</td>
                                    <td>{{ $post->golongandarah }}</td>
                                    <td>{{ $post->tempatlahir}}</td>
                                    {{-- <td>{{ $post->tanggallahir }}</td>
                                    <td>{{ $post->agama }}</td>
                                    <td>{{ $post->hobi }}</td>
                                    <td>{{ $post->email }}</td>
                                    <td>{{ $post->alamat }}</td>  
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/posts/').$post->image }}" class="rounded" style="width: 80px">
                                    </td>
                                     --}} 
                                    
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
@endsection