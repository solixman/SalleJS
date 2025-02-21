
    
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body class="bg-gray-50">
  <div class="flex min-h-screen">

  <div class="flex min-h-screen">
    <div class="fixed w-64 h-full bg-white shadow-lg">
      <div class="flex items-center gap-2 p-6">
        <i class="bi bi-grid-1x2-fill text-indigo-600 text-xl"></i>
        <span class="text-xl font-bold text-indigo-600">Dashboard</span>
      </div>
      
      <nav class="mt-6 px-4">
        <a href="#" class="flex items-center px-4 py-3 text-gray-700 bg-indigo-50 rounded-lg mb-2">
          <i class="bi bi-house-door mr-3 text-lg"></i>
          <span>Dashboard</span>
        </a>
        
        <a href="/Admin/Project" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2 transition-colors">
        <i class="bi bi-star mr-3 text-lg"></i>
        <span>Validation</span>
        </a>
        
        <a href="/Admin/Tag" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2 transition-colors">
          <i class="bi bi-tag mr-3 text-lg"></i>
          <span>Tags</span>
        </a>
        
        <a href="/Categories" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2 transition-colors">
          <i class="bi bi-folder mr-3 text-lg"></i>
          <span>Categories</span>
        </a>
        
        <a href="/Admin/Projects" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2 transition-colors">
        <i class="bi bi-briefcase mr-3 text-lg"></i>
        <span>Project</span>
        </a>
        
        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2 transition-colors">
          <i class="bi bi-bell mr-3 text-lg"></i>
          <span>Notifications</span>
        </a>
        
        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2 transition-colors">
          <i class="bi bi-chat mr-3 text-lg"></i>
          <span>Chat</span>
        </a>
        <a href="/Auth/logout" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 rounded-lg mb-2 transition-colors">
  <i class="bi bi-box-arrow-right mr-3 text-lg"></i>
  <span>Logout</span>
</a>

      </nav>
    </div>

   
    <div class="ml-64 flex-1 p-8">
 
      <div class="space-y-6">
        <div class="bg-white p-6 rounded-xl shadow-sm">


        
    
        <h1>Available rooms</h1>
        <div class="div" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
        @foreach($Salles as $salle)
        
        <div class="card" style="width: 25rem; background-color:rgba(233, 227, 227, 0.5); border: 2px; ">
  <img src="{{ $salle->image }}" class="card-img-top" alt="Salle image">
  <div class="card-body">
    <h5 class="card-title">{{ $salle->name }}</h5>
    <p class="card-text">{{ $salle->price }}</p>
    <p class="card-text">{{ $salle->ID }}</p>
    <!-- Button trigger modal -->
     <form action="/ReserveRoom" method="get">
     <input type="hidden" id="salle_id" class="fadeIn second" name="id" placeholder="id" value="{{ $salle->Id }}">
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Reserve
</button>
</form>

    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
        

        @endforeach
    </div>
    </div>
       
    </div>
      </div>
    </div>
  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>


