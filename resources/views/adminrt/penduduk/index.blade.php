<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.topscrip')
    <style>
        .bayangan {
            box-shadow: 1px 1px 10px rgba(0,0,0, 0.9);
        }
    </style>
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('layouts.components.side')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                @include('layouts.components.navbar')
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <br><br><br>
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30 bayangan">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Data Rt</h2>
                                        </div>
                                    </div>
                                    <div class="table_section padding_infor_info">
                                        <div class="table-responsive-sm">
                                            <table class="table">
                                                <thead class='thead-dark'>
                                                    <tr>
                                                        <th>NIK</th>
                                                        <th>Nama</th>
                                                        <th>Umur</th>
                                                        <th>Tempat Lahir</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Alamat</th>
                                                        <th>Agama</th>
                                                        <th>Status Perkawinan</th>
                                                        <th>Pendidikan</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Golongan darah</th>
                                                        {{-- <th>Rt</th> --}}
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($penduduk as $data)
                                                    <tr class="table-dark text-dark">
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{$data->nik}} </td>
                                                        <td>{{$data->nama}} </td>
                                                        <td>{{$data->umur}} </td>
                                                        <td>{{$data->tempat_lahir}} </td>
                                                        <td>{{$data->tanggal_lahir}} </td>
                                                        <td>{{$data->jk}} </td>
                                                        <td>{{$data->alamat}} </td>
                                                        <td>{{$data->agama}} </td>
                                                        <td>{{$data->status_nikah}} </td>
                                                        <td>{{$data->pendidikan}} </td>
                                                        <td>{{$data->pekerjaan}} </td>
                                                        <td>{{$data->gol_darah}} </td>
                                                        {{-- <td>{{ $data->rt->rt }} </td> --}}
                                                        <td>
                                                            <form action="{{ route('rt.destroy', $data->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('rt.edit', $data->id) }}"
                                                                    class="btn btn-sm btn-outline-success fa fa-pencil-square-o">

                                                                </a> |
                                                                <a href="{{ route('rt.show', $data->id) }}"
                                                                    class="btn btn-sm btn-outline-warning fa fa-eye">

                                                                </a> |
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-outline-danger fa fa-trash-o"
                                                                    onclick="return confirm('Apakah Anda Yakin?')">
                                                                    {{-- <i class="fa fa-user blue_color2"></i> --}}

                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <a href="{{ route('rt.create') }}" class="btn btn-sm btn-primary"
                                                style="float: right">
                                                Tambah Data
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
        <!-- model popup -->
        <!-- The Modal -->
        {{-- <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- end model popup -->
    </div>
    <!-- jQuery -->
    @include('components.bottomscrip')
</body>

</html>