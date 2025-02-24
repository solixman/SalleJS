<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <img src="{{$salle->image}}" class="card-img-top" alt="{{ $salle->type }}">
        <div class="card-body">
            <h5 class="card-title">{{ $salle->type }}</h5>
            <p class="card-text"><strong>Status:</strong> {{ $salle->status }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $salle->description }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ number_format($salle->price, 2) }}</p>
            <p class="card-text"><strong>Capacity:</strong> {{ $salle->capacity }} guests</p>
        </div>
        <div class="card-footer">
            <a href="/client/salle" class="btn btn-secondary">retourne au catalog des salles</a>
            <a href="/salle/reserve" class="btn btn-primary">Book Now</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>