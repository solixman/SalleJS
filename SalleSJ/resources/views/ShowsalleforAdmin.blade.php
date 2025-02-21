</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
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
            <div class="row">
              <div class="col-md-6">
                <h1>Available rooms</h1>
              </div>
              <div class="col-md-6" style="display: grid; justify-content: end ;">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AjoutModal">
                  Add Room
                </button>

              </div>
              <div class="modal fade" id="AjoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Add Room</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">



                    
                          <form action="/salle/add" method="get" class="w-full">


                            <div class="form-element mb-4">
                              <label for="title" class="block text-gray-700 mb-2">name</label>
                              <input type="text" name="name" required placeholder="enter name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>

                            <div class="form-element mb-4">
                              <label for="description" class="block text-gray-700 mb-2">image</label>
                              <input type="text" name="image" required placeholder=" enter image" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            
                            <div class="form-element mb-4">
                              
                              <input type="hidden" name="status" value="available" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>



                            <div class="form-element mb-4">
                              <label for="location" class="block text-gray-700 mb-2">price</label>
                              <input type="text" name="price" required placeholder="0000" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>

                            <div class="form-element mb-4">
                              <label for="phone" class="block text-gray-700 mb-2">type</label>
                              <input type="text" name="type" required placeholder="type" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div class="form-element mb-4">
                              <label for="phone" class="block text-gray-700 mb-2">capacity</label>
                              <input type="text" name="capacity" required placeholder="00" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            

                            <div class="form-element mb-4">
                              <label for="images" class="block text-gray-700 mb-2">description</label>
                              <input type="text" name="description" required placeholder="description" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                            </div>
                            <div class="flex justify-end space-x-2">
                              <button type="button" id="closeModal" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">Annuler</button>
                              <input type="submit" name="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600" value="Publier">
                            </div>
                          </form>
                        


                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="div" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
            @foreach($Salles as $salle)

            <div class="card" style="width: 23rem; background-color:rgba(233, 227, 227, 0.5); border: 2px; ">
              <img src="{{ $salle->image }}" class="card-img-top" alt="Salle image">
              <div class="card-body">
                <h5 class="card-title">{{ $salle->name }}</h5>
                <p class="card-text">Price: {{ $salle->price }}</p>
                <p>Type: {{ $salle->type }}</p>
                <p>Capacity: {{ $salle->capacity }}</p>


                <form action="/salle/update" method="get">
                  <input type="hidden" id="salle_id" class="fadeIn second" name="id" placeholder="id" value="{{ $salle->id }}">
                  <button type="button" class="btn btn-primary">
                    update
                  </button>
                </form>

              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>