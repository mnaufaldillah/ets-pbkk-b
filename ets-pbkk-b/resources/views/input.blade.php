<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBKK</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Formulir Rekam Medis</h3>
                            <br/>
 
                            <br/>
                             <!-- form validasi -->
                             <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="pasien">Nama Pasien</label>
                                        <select class="form-control" name="pasien" value="{{ old('pasien') }}" id="pasien">
                                            @foreach ($pasiens as $pasien)
                                                <option value="{{ $pasien->name }}">{{ $pasien->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('pasien')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="dokter">Nama Dokter</label>
                                        <select class="form-control" name="dokter" value="{{ old('dokter') }}" id="dokter">
                                            @foreach ($dokters as $dokter)
                                                <option value="{{ $dokter->name }}">{{ $dokter->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('dokter')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi">Kondisi Kesehatan</label>
                                        <textarea class="form-control" name="kondisi" type="text" value="{{ old('kondisi') }}" cols="30" rows="10" class="@error('kondisi') is-invalid @enderror"></textarea>
                                        @error('kondisi')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar Resep</label>
                                        <input class="form-control-file" type="file" name="gambar" value="{{ old('gambar') }}" class="@error('gambar') is-invalid @enderror">
                                        @error('gambar')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="suhu">Suhu Tubuh</label>
                                        <input class="form-control" type="text" name="suhu" value="{{ old('suhu') }}" class="@error('suhu') is-invalid @enderror">
                                        @error('suhu')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Proses">
                                    </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>