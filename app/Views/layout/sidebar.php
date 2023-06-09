<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Side Bar Navigation</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- css -->
    <style>
      li {
        list-style: none;
        margin: 20px 0 20px 0;
      }

      a {
        text-decoration: none;
      }

      .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        margin-left: -300px;
        transition: 0.4s;
      }

      .active-main-content {
        margin-left: 250px;
      }

      .active-sidebar {
        margin-left: 0;
      }

      #main-content {
        transition: 0.4s;
      }

      .bg-maroon {
        background-color: #800000 !important;
        border-color: #800000 !important;
      }
      
      .sidebar ul {
        list-style: none;
        padding: 0;
      }

      .sidebar li {
        position: relative;
        padding: 2px;
        cursor: pointer;
      }

      .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #f1f1f1;
      }

      .sidebar li:hover .dropdown-menu {
        display: block;
      }

      .dropdown-menu li {
        padding: 0;
      }

      .dropdown-menu li:hover {
        background-color: #ddd;
      }
      .profile {
        float: right;
        margin-left: 20px;
      }



    </style>

  </head>

  <body>
    <div class="sidebar p-4 bg-white text-dark" id="sidebar">
      <img src="gambar.jpg" alt="logo" width="50px" height="50px" />

      <li>
        <a class="text-dark" href="#">
          <i class="bi bi-house mr-2"></i>
          Beranda
        </a>
      </li>
 
      <li class="nav-item dropdown">
        <a
          class="text-dark dropdown-toggle"
          href="#"
          id="navbarDropdownAsset"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="bi bi-bookmark mr-2"></i>
          Aset
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownAsset">
          <li><a class="dropdown-item" href="#">Dokumentasi</a></li>
          <li><a class="dropdown-item" href="#">Inventaris</a></li>
        </ul>
      </li>


            <li class="nav-item dropdown">
          <a
            class="text-dark dropdown-toggle"
            href="#"
            id="navbarDropdownAsset"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="bi bi-book mr-2"></i>
            Rekapitulasi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownAsset">
            <li><a class="dropdown-item" href="#">Aset Masuk</a></li>
            <li><a class="dropdown-item" href="#">Aset Keluar</a></li>
            <li><a class="dropdown-item" href="#">Aset Dipinjamkan</a></li>
            <li><a class="dropdown-item" href="#">Aset Dikembalikan</a></li>
          </ul>
        </li>

            <li class="nav-item dropdown">
          <a
            class="text-dark dropdown-toggle"
            href="#"
            id="navbarDropdownAsset"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="bi bi-map mr-2"></i>
            Pelacakan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownAsset">
            <li><a class="dropdown-item" href="#">Status Aset</a></li>
            <li><a class="dropdown-item" href="#">Lokasi Aset</a></li>
          </ul>
        </li>
            <li>
              <a class="text-dark" href="#">
                <i class="bi bi-calculator mr-2"></i>
                Nilai Aset (ROI)
              </a>
            </li>

            <br>
            <li>
              <a class="text-dark" href="#">
                <i class="bi bi-calendar mr-2"></i>
                Kalender
              </a>
            </li>
            <li>
              <a class="text-dark" href="#">
                <i class="bi bi-newspaper mr-2"></i>
                Linimasa
              </a>
            </li>
            <li>
              <a class="text-dark" href="#">
                <i class="bi bi-Question mr-2"></i>
                Bantuan
              </a>
            </li>
            <li>
              <a class="text-dark" href="#">
                <i class="bi bi-exit mr-2"></i>
                Keluar
              </a>
            </li>
            <br>
            <h4 class="mb-5 text-dark">SIMDA UTI</h4>
          </div>
        </div>


        <div class="p-4" id="main-content" margin= "20px">
          <div class="d-flex align-items-center bg-maroon">
            <button class="btn btn-primary bg-maroon" id="button-toggle">
              <i class="bi bi-list"></i>
            </button>
            <div class="col-md-11 text-right">
              <img src="https://via.placeholder.com/40x40" alt="Profile Picture" class="profile img-thumbnail float-right">
            </div>
          </div>
          



          
    
        <script>
    
          // event will be executed when the toggle-button is clicked
          document.getElementById("button-toggle").addEventListener("click", () => {
    
            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");
    
            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
          });
    
        </script>
      </body>
      <!-- Popper js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-rnL/bN+vK51JhLRGzV7Jy85amXuVACFieomGxxLs7sZtDIn1V7PY2hnRy1zl8h2G4ow4/uDJz4pBsqHIiLqP3w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- Bootstrap 5 js -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-XvoFXNtYJGvYlD2mRpis05VBiskFV9ltE8+AzfA1kMAd2+a19HdltT8BaN0Fkedf" crossorigin="anonymous"></script>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-4K0OMojB6eX+nKt2l/gGx2nU8Gs+kDjwvGzjoknKymDj9GUoXsPp0txhJOGk3C2Q" crossorigin="anonymous"></script>

    </html>