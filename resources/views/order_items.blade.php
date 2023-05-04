<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
        <div class="">
            <nav class="navbar bg-dark" data-bs-theme="dark">
                <div class="container">
                    <a class="" href="/" >
                        <img src="https://logowik.com/content/uploads/images/lawson6393.jpg"class="img-thumbnail" width="150"></a>
                    </a>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Form Input
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/input-order">Input User</a></li>
                            <li><a class="dropdown-item" href="#">Order</a></li>
                            <li><a class="dropdown-item" href="#">Product</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Sales
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="">Per Bulan</a></li>
                          <li><a class="dropdown-item" href="#">Per Product</a></li>
                          <li><a class="dropdown-item" href="#">Per Kota</a></li>
                        </ul>
                      </div>
                </nav>
            </div>
            <div class="container m-4 flex item-center justify-center">
                <div class="table-responsive card">
                    <table class="table table-hover m-4">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col"> Quantity</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">User ID</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($orderList as $data)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$data->date}}</td>
                            <td>{{$data->quantity}}</td>
                            <td>{{$data->products['name']}}</td>
                            <td>{{$data->user_id}}</td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                    <button class="btn btn-primary">Export to Excel</button>
                  </div>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>