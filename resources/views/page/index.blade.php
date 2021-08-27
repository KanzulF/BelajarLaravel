      <x-app-main>
        <h1 class="text-center">My Time Table</h1>
        <div class="row  text-center mt-5 justify-content-around">

            <div class="card shadow-lg border-1" style="width: 18rem;">
                <a href="/show/TODO" style="text-decoration: none; color:black">
              <h1 style="font-size: 100px">{{ $todo->count() }}</h1>
              <h5>TODO</h5>
                <ul class="list-group list-group-flush">
                    @foreach ($todo as $no => $item)
                        <li class="list-group-item">{{ $item-> title }}</li>
                    @endforeach
                </ul>
            </a>
            </div>
            <div class="card shadow-lg border-1" style="width: 18rem;">
                <a href="/show/DOING" style="text-decoration: none; color:black">
              <h1 style="font-size: 100px">{{ $doing->count() }}</h1>
              <h5>DOING</h5>
                <ul class="list-group list-group-flush">
                    @foreach ($doing as $no => $item)
                        <li class="list-group-item">{{ $item-> title }}</li>
                    @endforeach
                </ul>
            </a>
            </div>
            <div class="card shadow-lg border-1" style="width: 18rem;">
                <a href="/DONE" style="text-decoration: none; color:black">
              <h1 style="font-size: 100px">{{ $done->count() }}</h1>
              <h5>DONE</h5>
                <ul class="list-group list-group-flush">
                    @foreach ($done as $no => $item)
                        <li class="list-group-item">{{ $item-> title }}</li>
                    @endforeach
                </ul>
            </a>
            </div>
          </div>
      </x-app-main>