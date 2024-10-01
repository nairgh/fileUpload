
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Image Upload Example </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
        
<body>
<div class="container">
  
    <div class="card mt-5">
        <h3 class="card-header p-3"><i class="far fa-image"></i> Laravel 11 Image Upload Example</h3>
        <div class="card-body">
  
            @session('success')
                <div class="alert alert-success" role="alert"> 
                    {{ $value }}
                </div>
                <img src="images/{{ Session::get('image') }}" width="40%">
            @endsession
            
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="inputImage">Select Image:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="inputImage"
                        class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
      
</html>
