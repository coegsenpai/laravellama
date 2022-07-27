<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha3841BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrСEXSU10Boqy12QvZ6jIW3"
crossorigin="anonymous">

    <title>Data Mahasiswa</title>
</head>

<body>
     <div class="container" style="margin-top: 80px">
        <div class="row">
             <div class="col-md-12">
                  <div class="card">
                       <div class="card-header">
                           Tambah Mahasiswa
                        </div>
                        <div class="card-body">
                        <form action="simpan.php" method="POST">
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="number" class="form-control" id="nim" name="nim_mhs" placeholder="isikan NIM" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama"
name="nama_mhs" placeholder="isikan Nama" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan"
name="jurusan_mhs" placeholder="isikan Jurusan" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
                                
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Skoln4gmtz2MlQnikTlwXgYsOg+OMhuP+I1RH9SENBOOLRn5q+8nb Tov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>