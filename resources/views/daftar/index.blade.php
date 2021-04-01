@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><strong>Daftar</strong></h4>
                            </div>
                            <!-- Button trigger modal -->
                            <div class="col-md-6">
                                <button type="button" class="btn float-right btn-tambah" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square mr-3" ></i>TAMBAH DATA</button>
                            </div>    
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class=" modal-title" id="exampleModalLabel"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('daftar.store')}}" method="POST" >
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="nis" class="col-md-4 col-form-label text-md-right">NIS</label>
                                            <div class="col-md-6">
                                                <input id="nis" type="number" class="form-control" name="nis" placeholder="masukkan nis" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                                            <div class="col-md-6">
                                                <input id="nama" type="text" class="form-control" name="nama" placeholder="masukkan nama" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="nama" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
                                            <div class="col-md-6">
                                                <select name="jk" id="jk" class="custom-select" required>
                                                    <option selected disable value="">pilih..</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="temp_lahir" class="col-md-4 col-form-label text-md-right">Tempat Lahir</label>
                                            <div class="col-md-6">
                                                <input id="temp_lahir" type="text" class="form-control" name="temp_lahir" placeholder="masukkan tempat lahir" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                                            <div class="col-md-6">
                                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" placeholder="masukkan tanggal lahir" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                            <div class="col-md-6">
                                                <textarea name="alamat" class="form-control" id="" cols="30" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="asal_sekolah" class="col-md-4 col-form-label text-md-right">Asal Sekolah</label>
                                            <div class="col-md-6">
                                                <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah" placeholder="masukkan asal sekolah" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>
                                            <div class="col-md-6">
                                                <select name="kelas" id="kelas" class="custom-select" required>
                                                    <option selected disable value="">pilih..</option>
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII">XII</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kelas" class="col-md-4 col-form-label text-md-right">Jurusan</label>
                                            <div class="col-md-6">
                                                <select name="jurusan" id="jurusan" class="custom-select" required>
                                                    <option selected disable value="">pilih..</option>
                                                    <option value="Rekayasa Perangkat Lunak" >Rekayasa Perangkat Lunak</option>
                                                    <option value="Multimedia" >Multimedia</option>
                                                    <option value="Otomasisasi Tata Kelola Perkantoran">Otomasisasi Tata Kelola Perkantoran</option>
                                                    <option value="Perhotelan">Perhotelan</option>
                                                    <option value="Tata boga" >Tata boga</option>
                                                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                                    <option value="Bisnis Daring dan Pemasaran" >Bisnis Daring dan Pemasaran</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-body -->

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div><!-- /.modal-footer -->
                                        </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal fade --> 
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        @if(session('sukses'))
                            <div class="alert alert-success">{{session('sukses')}}</div>
                        @endif
                        @if(session('gagal'))
                            <div class="alert alert-danger center">{{session('gagal')}}</div>
                        @endif
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br/>
                                @endforeach
                            </div>
                        @endif
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="10%">ID Daftar</th>
                                    <th width="20%">NIS</th>
                                    <th width="20%">Nama</th>
                                    <th width="20%">Jenis Kelamin</th>
                                    <th width="20%">Tempat Lahir</th>
                                    <th width="20%">Tanggal Lahir</th>
                                    <th width="20%">ALamat</th>
                                    <th width="20%">Asal Sekolah</th>
                                    <th width="20%">Kelas</th>
                                    <th width="20%">Jurusan</th>
                                    <th width="10%">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($daftar as $daftars)
                                <tr>
                                    <td width="10%">{{$daftars->id}}</td>
                                    <td width="20%">{{$daftars->nis}}</td>
                                    <td width="20%">{{$daftars->nama}}</td>
                                    <td width="20%">{{$daftars->jk}}</td>
                                    <td width="20%">{{$daftars->temp_lahir}}</td>
                                    <td width="20%">{{$daftars->tgl_lahir}}</td>
                                    <td width="20%">{{$daftars->alamat}}</td>
                                    <td width="20%">{{$daftars->asal_sekolah}}</td>
                                    <td width="20%">{{$daftars->kelas}}</td>
                                    <td width="20%">{{$daftars->jurusan}}</td>
                                    <td width="10%">
                                        <button type="button" class="btn btn-warning" title="Edit" data-target="#exampleModal-{{ $daftars->id }}" data-toggle="modal"><i class=" fas fa-edit text-white "></i></button>
                                        <a href="/daftar/{{ $daftars->id }}/delete" class="btn btn-danger" data-toggle="tooltip" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data?');"><i class="fas fa-trash-alt text-with"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary text-md-right" target="blank_ " onclick="cetak()">Cetak</button>
                    </div><!-- /.card-body -->
                </div><!-- /.card -->


            <!-- modal edit ------------------------------------------------------------------------>
                @foreach($daftar as $data)
                <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class=" modal-title" id="exampleModalLabel"><i class="fas fa-edit mr-2"></i>EDIT DATA</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/daftar/{{$data->id}}/update" method="POST" >
                                {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label for="nis" class="col-md-4 col-form-label text-md-right">NIS</label>
                                        <div class="col-md-6">
                                            <input id="nis" type="number" class="form-control" name="nis" value="{{ $data->nis }}" placeholder="masukkan nis" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                                        <div class="col-md-6">
                                            <input id="nama" type="text" class="form-control" name="nama" value="{{ $data->nama }}" placeholder="masukkan nama" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>
                                        <div class="col-md-6">
                                            <select name="jk" id="jk" class="custom-select" required>
                                                <option selected disable value="">pilih..</option>
                                                <option value="Laki-laki" @if($data->jk == "Laki-laki") selected @endif>Laki-laki</option>
                                                <option value="Perempuan" @if($data->jk == "Perempuan") selected @endif>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="temp_lahir" class="col-md-4 col-form-label text-md-right">Tempat Lahir</label>
                                        <div class="col-md-6">
                                            <input id="temp_lahir" type="text" class="form-control" name="temp_lahir" value="{{ $data->temp_lahir }}" placeholder="masukkan tempat lahir" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                                        <div class="col-md-6">
                                            <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ $data->tgl_lahir }}" placeholder="masukkan tanggal lahir" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                        <div class="col-md-6">
                                            <textarea name="alamat" class="form-control" id="" cols="30" rows="5" required>{{ $data->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="asal_sekolah" class="col-md-4 col-form-label text-md-right">Asal Sekolah</label>
                                        <div class="col-md-6">
                                            <input id="asal_sekolah" type="text" class="form-control" name="asal_sekolah" value="{{ $data->asal_sekolah }}" placeholder="masukkan asal sekolah" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kelas" class="col-md-4 col-form-label text-md-right">Kelas</label>
                                        <div class="col-md-6">
                                            <select name="kelas" id="kelas" class="custom-select" required>
                                                <option selected disable value="">pilih..</option>
                                                <option value="X" @if($data->kelas == "X") selected @endif>X</option>
                                                <option value="XI" @if($data->kelas == "XI") selected @endif>XI</option>
                                                <option value="XII" @if($data->kelas == "XII") selected @endif>XII</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>
                                        <div class="col-md-6">
                                            <select name="jurusan" id="jurusan" class="custom-select" required>
                                                <option selected disable value="">pilih..</option> 
                                                <option value="Rekayasa Perangkat Lunak" @if($data->jurusan == "Rekayasa Perangkat Lunak") selected @endif >Rekayasa Perangkat Lunak</option>
                                                <option value="Multimedia" @if($data->jurusan == "Multimedia") selected @endif >Multimedia</option>
                                                <option value="Otomasisasi Tata Kelola Perkantoran" @if($data->jurusan == "Otomasisasi Tata Kelola Perkantoran") selected @endif >Otomasisasi Tata Kelola Perkantoran</option>
                                                <option value="Perhotelan" @if($data->jurusan == "Perhotelan") selected @endif >Perhotelan</option>
                                                <option value="Tata boga" @if($data->jurusan == "Tata boga") selected @endif >Tata boga</option>
                                                <option value="Teknik Komputer dan Jaringan" @if($data->jurusan == "Teknik Komputer dan Jaringan") selected @endif >Teknik Komputer dan Jaringan</option>
                                                <option value="Bisnis Daring dan Pemasaran" @if($data->jurusan == "Bisnis Daring dan Pemasaran") selected @endif >Bisnis Daring dan Pemasaran</option>

                                            </select>
                                        </div>
                                    </div>
                            </div><!-- /.modal-body -->

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div><!-- /.modal-footer -->
                                </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal fade -->
                @endforeach
            </div>
        </div>
    </div>
<script>
    // window.print();
    function cetak(){
        window.print();
    }
</script>
@endsection