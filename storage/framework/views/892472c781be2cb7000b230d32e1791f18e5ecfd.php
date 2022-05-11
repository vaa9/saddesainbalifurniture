<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        .nav-item .nav-link {
         color: whitesmoke;
         font-size: 17px;
        }
        .nav-item.active .nav-link,
        .nav-item:hover .nav-link {
            color: blanchedalmond;
        }
    </style>
</head>
<body>
    <nav class="navbar" style="background-color: rgb(189, 156, 116);">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: aliceblue;font-weight: 600;">SAD</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link " href="/kategori">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pembeli">Pembeli</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Laporan</a>
              </li>
          </ul>
          <ul class="nav justify-content-center ">
            <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Nama
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
            </li>
            <li class="nav-item">
                <form class="container-fluid justify-content-start">
                    <button class="btn btn-outline-warning me-2" type="button">Log Out
                    </button>
                  </form>
            </li>
          </ul>
      </nav>
    <?php echo $__env->yieldContent('maincontainer'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\trysad\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>