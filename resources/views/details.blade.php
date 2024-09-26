<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
         
            <div class="col-md-6">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-fluid">
                @else
        <img src="https://via.placeholder.com/50" alt="No Image Available" class="img-fluid" style="max-width: 50px;">
    @endif
            </div>

        
            <div class="col-md-6">
                <h2>{{$product->name}}</h2>
                <p class="text-muted">₹{{$product->amount}}</p>
                <p>{{$product->description}}</p>
                
   

                
            </div>
        </div>

    
        <div class="mt-4">
            <a href="/" class="btn btn-secondary">Back to Products</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
