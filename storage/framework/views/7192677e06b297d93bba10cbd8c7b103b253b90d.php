<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="signup.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  </head>
  <body>
      <?php echo $__env->make('partials.partialnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
      <form action="" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Kata Sandi</label>
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Role</label>
          <select class="form-select" aria-label="Default select example">
            <option value="1">Marketing</option>
            <option value="2">Accountant</option>
            <option value="3">Receptionist</option>
          </select>
        </div>
        <div class="col-12 text-center">
          <button class="btn btn-primary" type="submit">Simpan!</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\trysad\resources\views/welcome.blade.php ENDPATH**/ ?>