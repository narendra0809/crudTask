<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Product Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
        .horizontal-scroll {
            display: flex;
            overflow-x: auto;
            padding: 10px 0;
        }
        .card {
            flex: 0 0 auto; 
            margin-right: 15px; 
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Our Products</h2>
    <div class="horizontal-scroll">
        @foreach ($data as $product) 
            <div class="card h-100" style="width: 18rem;">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                @else
        <img src="https://via.placeholder.com/50" alt="No Image Available" class="img-fluid" style="max-width: 50px;">
    @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">₹{{ number_format($product->amount, 2) }}</p>
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Details</a>

                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
