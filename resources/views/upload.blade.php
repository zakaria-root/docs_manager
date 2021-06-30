<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3 ">
<form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>ajouter un document</h1>
        <input type="hidden" name="folder" value="{{ $dir->folder }}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"></label>
          <input type="file" name="doc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">ajouter</button>
      
    </form>
    </div>
    
    
    <div class="container mt-5">
        <div class="col-12">
            @foreach ($docs as $doc )
            <div class="col-4">
                
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $doc }}</h5>
                      <p class="card-text">Some quick.</p>
                      
                    </div>
                  </div>
                </div>
                @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>