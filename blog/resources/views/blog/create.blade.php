<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>create</title>
</head>
<body>
    <div class="container">
        <form class="row g-3 needs-validation" action="{{ route('blog.store') }}" novalidate>
          <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="validationCustom01" placeholder="title" required>
          </div>
          <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="validationCustom02" placeholder="description" required>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
          </div>
        </form>
        @csrf



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
