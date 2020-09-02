<main>
  <div class="container-fluid">
    <h1 class="mt-4">Songs</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Songs</li>
    </ol>
    <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table mr-1"></i>
          List of Songs
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Lyrics</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($songs as $song)
              <tr>
                <td>{{$song->title}}</td>
                <td>{{$song->artist}}</td>
                <td>{{$song->lyrics}}</td>
                <td>{{$song->created_at}}</td>
                <td>{{$song->updated_at}}</td>
                <td>
                  <a href="{{route('songs.show',$song->id)}}" class="btn btn-info btn-sm">Show</a>
                  <a href="{{route('songs.edit',$song->id)}}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{route('songs.destroy',$song->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                  </form>
                </td>
              </tr>
              @endforeach
              {{$songs->links()}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>