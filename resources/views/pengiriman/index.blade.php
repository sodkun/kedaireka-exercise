<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="{{ '/css/style.css' }}">
    <link href="{{asset('assets/bs/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="d-flex">
    <div id="sidebar-open bg-light" class="s"> 
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar-item">
            <a href="/home" class="d-flex align-items-center justify-content-center p-3 my-3 mx-3 text-decoration-none bg-primary rounded" id="logo">
                <i class="material-icons-round bi me-2 text-white">account_balance_wallet</i>
                <span class="fs-5 text-white text">Film</span>
              </a>
            <ul class="nav flex-column my-3">
              <li class="nav-item">
                <a href="/home" class="d-flex nav-link p-3 align-items-center {{ ($title === 'Film') ? 'active' : '' }}" aria-current="page">
                  <i class="material-icons-round bi me-4">dashboard</i>
                  <span class="text">Film</span>
                </a>
              </li>
              <li>
                <a href="/tipe" class="d-flex nav-link p-3 align-items-center {{ ($title === 'Tipe Film') ? 'active' : '' }}">
                  <i class="material-icons-round bi me-4">precision_manufacturing</i>
                  <span class="text">Tipe Film</span>
                </a>
              </li>
              <li>
                <a href="/pengiriman" class="d-flex nav-link p-3 align-items-center {{ ($title === 'Pengiriman') ? 'active' : '' }}">
                  <i class="material-icons-round bi me-4">precision_manufacturing</i>
                  <span class="text">Pengiriman</span>
                </a>
              </li>
            </ul>
          </div>
    </div>

    <div class="d-flex flex-column container-fluid" style="min-height: 100vh;background-color: #E6EBF5;">
      <nav class="navbar navbar-expand-lg mt-4">
        <div class=" d-flex container-fluid">
          <i class="" id="burger-menu"></i>    
          <div>
            <div class="dropdown px-4">
              <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" style="color:#5C5858;" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="52" height="52" class="rounded-circle me-2">
                <div class="d-flex flex-column">
                  <strong>mdo</strong>
                  <span>Admin</span>
                </div>
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>    
        </div>
      </nav>


      <div class="container-fluid flex-grow-1">
        <h2 class="my-4 judul">Pengiriman</h3>
        <div class="card border-light mb-3">
          <div class="card-body">
            <h5 class="my-1 mx-2">
            <i class="material-icons-round bi me-2">precision_manufacturing</i>
              Informasi Umum
            </h5>
              <div class="container">

                <div class="row">

                  <div class = "col">
                    <div class="row">
                      Tanggal
                    </div>
                    <div class="row">
                      No Quotation
                    </div>
                    <div class="row">
                      No FPPP
                    </div>
                    <div class="row">
                      Aplikator
                    </div>
                    <div class="row">
                      Nama Proyek
                    </div>
                    <div class="row">
                      Kota
                    </div>
                  </div>

                  <div class = "col">
                    <div class="row">
                      1
                    </div>
                    <div class="row">
                      2
                    </div>
                    <div class="row">
                      3
                    </div>
                    <div class="row">
                      4
                    </div>
                    <div class="row">
                      5
                    </div>
                    <div class="row">
                      6
                    </div>
                  </div>

                  <div class = "col">
                    <div class="text-center" style="color:transparent">
                      1
                    </div>

                    <div class="row">
                      <div class="float-end">
                        <table class="table table-borderless  table table-sm rounded rounded-3 overflow-hidden" style="width: 10rem">
                                <tr class="table-primary">
                                  <th>
                                  <button type="button" class="btn btn-primary" style="width:10rem;pointer-events:none; height:3rem">Produk Selesai</button>
                                  </th>
                                </tr>
                                <tr class="table-primary" >
                                  <th >
                                  <button type="button" class="btn btn-primary" style="color:black; background-color:transparent; border-color:transparent; width:10rem;pointer-events:none">35</button>
                                  </th>
                                </tr>
                        </table>
                      </div>
                      
                    </div>

                    <div class="row" style="color:transparent">
                      2
                      <div style="color:gray">
                      Silahkan Pilih Status
                      </div>
                    </div>

                    <div class="row" style="color:transparent">
                      2
                      <div style="color:black" class="font-weight-bold">
                      Status
                      </div>
                    </div>

                    <div class="row">

                      <div class="dropdown text-left">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:10.5rem">
                          Pilih Status
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#" class="dropdown-item">ACCEPT WITH NOTE</a></li>
                          <li><a href="#" class="dropdown-item">ACCEPT</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>

                  <div class = "col">
                    
                    <div class="row">
                    
                      <a href="" class="">Lihat detail item</a>
            
                    </div>

                    <div class="row">
                      
                      <table class="table table-borderless  table table-sm rounded rounded-3 overflow-hidden" style="width: 7rem">
                          <tr class="table-primary">
                            <th>
                            <button type="button" class="btn btn-primary" style="width:7rem;pointer-events:none; height:3rem">Total Item</button>
                            </th>
                          </tr>
                          <tr class="table-primary" >
                            <th >
                            <button type="button" class="btn btn-primary" style="color:black; background-color:transparent; border-color:transparent; width:7rem;pointer-events:none">100</button>
                            </th>
                          </tr>
                      </table>

                    </div>
                    
                  </div>

              </div>
                </div>
                

              </div>

              

        </div>
        <div class="card border-light mb-3">
          <div class="card-body">
            <h5 class="my-1 mx-2">
            <i class="material-icons-round bi me-2">precision_manufacturing</i>
              Catatan  
            </h5>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <textarea type="text" class="form-control" id="exampleFormControlInput1" rows="3" placeholder="Tuliskan note" disabled></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div>
          <a href="" type="button" class="btn btn-primary float-end btn-lg" style="width: 10rem">Selesai</a>        
        </div>
      </div>
      

      <div class="container-fluid">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">&copy; 2022 Allure Alumunio, Unnes</span>
          </div>
        </footer>
      </div>
    </div>  
</div>
<script src="{{asset('assets/jquery.min.js')}}"></script>  
<script src="{{asset('assets/bs/js/bootstrap.bundle.min.js')}}" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>