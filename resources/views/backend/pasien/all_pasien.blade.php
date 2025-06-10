@extends('admin_dashboard')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="#" class="btn btn-primary rounded-pill waves-effect waves-light">Tambah Pasien</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Data Pasien</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Data Pasien</h4>

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>ID Pasien</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pasien as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}}</td>
                                    <td>{{$item->id_pasien}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->tgllahir}}</td>
                                    <td>{{$item->jeniskelamin}}</td>
                                     <td>{{$item->alamat}}</td>
                                     <td>{{$item->telepon}}</td>
                                    <td>
                                        <a href="#" class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>
                                        <a href="#" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete </a>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->




@endsection
