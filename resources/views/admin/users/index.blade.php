

    <h1 class="page-header">Users</h1>
    <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered border-primary">
          <thead class="table-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Created</th>
              <th scope="col">Updated</th>
            </tr>
          </thead>
          <tbody>
            @if ($users)
              @foreach ($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td><a href="{{ route('users.edit', $user->id)}}">{{ $user->name }}</a></td>
                  <td>{{ $user->email }}</td> 
                  <td>{{ $user->created_at->diffForHumans() }}</td> 
                  <td>{{ $user->updated_at->diffForHumans() }}</td> 
                </tr>
              @endforeach
            @endif
          </tbody>
      </table>
    </div>

