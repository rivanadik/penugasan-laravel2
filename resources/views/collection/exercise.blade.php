<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .card {
        margin: 10px;
        border: 2px solid #007BFF;
      }

      .card .card-body {
        background-color: aliceblue; 
      }

      .card .card-body h6 {
        font-size: 20px; 
        color: #333; 
      }

      .card .card-body p {
        font-size: 18px; 
      }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5">
            <h3>Selamat Datang di Halaman Exercise</h3> 
        </div>
        <!-- Awal Tabel -->
        <div class="card mt-5">
            <div class="card-header bg-info text-center">
                <h5><b>Exercise 1</b></h5>
            </div>
            <div class="card-body">
                <h6>Mata Kuliah di Semester 3:</h6>
                <p>{{ $matkulsSemester3 }}</p> 
            </div>
        </div>
        <!-- Akhir Tabel -->
        <div class="card mt-5">
            <div class="card-header bg-info text-center"> 
                <h5><b>Exercise 2</b></h5>
            </div>
            <div class="card-body">
                <h6>Mata Kuliah Urut berdasarkan Jumlah SKS:</h6>
                <p>{{ $matkulsSorted }}</p> 
            </div>
        </div>
    </div>
</body>
</html>
