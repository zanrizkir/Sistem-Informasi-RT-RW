<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.topscrip')
    <style>
        .bayangan {
            box-shadow: 5px 4px 5px;
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
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        {{-- @include('layouts/_flash') --}}
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>
                                                    Data Berita
                                                </strong>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('berita.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">judul</label>
                                                        <input type="text"
                                                            class="form-control  @error('judul') is-invalid @enderror"
                                                            name="judul">
                                                        @error('judul')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Rt</label>
                                                        <select name="id_rt" class="form-control  @error('id_rt') is-invalid @enderror">
                                                            @foreach ($rt as $data)
                                                            <option value="{{ $data->id }}">{{ $data->rt }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('id_rt')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label"><b> Isi Berita </b></label>
                                                        <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi"></textarea>
                                                        @error('deskripsi')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Foto</label>
                                                        <input type="file"
                                                            class="form-control  @error('image') is-invalid @enderror"
                                                            name="image">
                                                        @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>

                                                    


                                                    <div class="mb-3">
                                                        <div class="d-grid gap-2">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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