@extends('admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Karyawan</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Karyawan</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{ route('karyawan.update') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{$karyawan->id}}">
                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Edit Karyawan</h5>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Nama Karyawan:</label>
                                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$karyawan->nama}}">
                                                @error('nama')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Email:</label>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$karyawan->email}}">
                                                @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Phone:</label>
                                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$karyawan->phone}}">
                                                @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Alamat:</label>
                                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{$karyawan->alamat}}">
                                                @error('alamat')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Jenis Kelamin:</label>
                                                <select name="jenkel" class="form-select @error('jenkel') is-invalid @enderror" id="example-select">
                                                    <option selected disabled="">Pilih Jenis Kelamin</option>
                                                    <option value="Laki-Laki" {{$karyawan->jenkel == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
                                                    <option value="Perempuan" {{$karyawan->jenkel == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                                </select>
                                                @error('jenkel')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Pendidikan:</label>
                                                <input type="text" name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" value="{{$karyawan->pendidikan}}">
                                                @error('pendidikan')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Gaji :</label>
                                                <input type="text" name="gaji" class="form-control @error('gaji') is-invalid @enderror" value="{{$karyawan->gaji}}">
                                                @error('gaji')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Kota :</label>
                                                <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{$karyawan->kota}}">
                                                @error('kota')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                        <div class="mb-3">
                                                        <label for="example-fileinput" class="form-label">Admin Profile Image</label>
                                                        <input type="file" name="foto" id="image" class="form-control form-control @error('foto') is-invalid @enderror">
                                                        @error('foto')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                                    <img id="showImage" src="{{ asset('public/'.$karyawan->foto) }}" class="rounded-circle avatar-lg img-thumbnail"
                        alt="profile-image">
                                                                </div>
                                                            </div>
                                    </div> <!-- end row -->

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->

                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->



<script type="text/javascript">

	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload =  function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>


@endsection
