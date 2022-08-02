@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- @include('layouts/_flash') --}}
            <div class="card">
                <div class="card-header">
                    Data rt
                </div>
                <div class="card-body">
                    <form action="{{ route('rt.update', $rt->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label">Rt</label>
                            <input type="number" class="form-control  @error('rt') is-invalid @enderror" name="rt"
                                value="{{ $rt->rt }}">
                            @error('rt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                name="nama" value="{{ $rt->nama }}">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" value="Laki-laki" @if ($rt->jk == 'Laki-laki') checked @endif>
                                <label class="form-check-label">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" value="Perempuan" @if ($rt->jk == 'Perempuan') checked @endif>
                                <label class="form-check-label">
                                    Perempuan
                                </label>
                            </div>
                            @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                name="tanggal_lahir" value="{{ $rt->tanggal_lahir }}">
                            @error('tanggal_lahir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <select class="form-control" name="agama">
                                <option selected disabled>Pilih Salah Satu</option>
                                <option value="Islam" {{ $rt->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $rt->agama == 'Kristen' ? 'selected' : '' }}>Kristen
                                </option>
                                <option value="Budha" {{ $rt->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Hindu" {{ $rt->agama == 'Hindu' ? 'selected' : '' }}>Hindu
                                </option>
                                <option value="Katolik" {{ $rt->agama == 'Katolik' ? 'selected' : '' }}>Katolik
                                </option>
                            </select>
                            @error('agama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            @if (isset($rt) && $rt->image)
                            <p>
                                <img src="{{ asset('image/rt/' . $rt->image) }}" class="img-rounded img-responsive"
                                    style="width: 75px; height:75px;" alt="">
                            </p>
                            @endif
                            <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" value="{{ $rt->image }}">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mx-auto" type="submit">Save</button>
                            <a href="{{ route('rt.index') }}" class="btn cur-p btn-outline-primary">Kembali</a>
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection