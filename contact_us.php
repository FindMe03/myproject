<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Contact page</title>
  </head>
  <body>



  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">JhunieBlogs_1.0</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="contact_us.php" class="nav-link">Contact us</a></li>
        <li class="nav-item"><a href="about_us.php" class="nav-link">About us</a></li>
      </ul>
    </header>
  </div>



<div class="container-fluid">
  <div class="container">
    <div>
      <h2 class="text-center mb-5 shadow-sm p-3">Contact us:</h2>
    </div>
    <div class="row">
      <div class="col-md-7 shadow rounded p-5">
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" placeholder="First name"></div>
            
            <div class="col mb-3">
            <label class="form-label">Last name</label>
            <input type="text" class="form-control" placeholder="Last name"></div>
</div>

            <div class="col mb-3">
            <label class="form-label">Email:</label>
            <input type="text" class="form-control" placeholder="name@email.com"></div>

            <div class="col mb-3">
            <label class="form-label">Subject</label>
            <input type="text" class="form-control" placeholder="Subject"></div>
            
            <div class="col mb-3">
            <label class="form-label">Message:</label>
            <textarea name="" placeholder="Write your comment" class="form-control" rows="3"></textarea></div></div>

            <div class="col-md-5 bg-light">
              <div class="ml-5">
                <img src="assets/images/contact_us.png" alt="image" class="img-fulid">
              </div>
              </div>


              <!-- Button trigger modal -->
              <div class="col mb-3">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Submit
</button>
</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thank you,Please Come again</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>



 </div>
</div>
</div>
</div>



    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>