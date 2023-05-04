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
                            <!-- <li><a class="dropdown-item" href="#">Input User</a></li> -->
                            <li><a class="dropdown-item" href="#">Order</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Product</a></li> -->
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
            <div class="container mt-5 col-8">
                <form action="order" method="post">
                    <div class="mb-3">
                        <label for="date" class="flex-col">Date</label>
                        <input type="text" class="form-control datepicker" id="date" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control"id="quantity" name="quantity">
                    </div>
                    <div class="mb-3">
                        <label for="product_id"></label>
                        <select name="product_id" id="product_id" class="form-control">
                            <option value="">Select Product</option>
                            <option value="1">INDOMIE KALDU</option>
                            <option value="2">INDOMILK BANANA</option>
                            <option value="3">Teh Botol Anggur</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="user_id"></label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Select User</option>
                            <option value="111">WISDA SARI</option>
                            <option value="114">FREYA JAYAWARDANA</option>
                            <option value="123">ACHA PATRIA</option>
                            <option value="135">AHMAD ENO</option>
                            <option value="145">FADLI CUY</option>
                            <option value="173">AVIVA</option>
                            <option value="178">HABIB REZA</option>
                            <option value="180">LA CAU</option>
                        </select>
                    </div>
                </form>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                  </div>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>