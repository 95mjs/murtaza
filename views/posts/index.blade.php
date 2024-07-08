@extends('layouts.app')
@section('hello')

      <div class="container mt-5">
<div class="text-center">
    <button type="button" class="btn btn-success">create post</button>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">nomber</th>
        <th scope="col">name</th>
        <th scope="col">date</th>
        <th scope="col">do</th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $posts as $post )

        <tr>
            <th scope="row">{{ $post['id'] }}</th>
            <td>{{ $post['name'] }}</td>
            <td>{{ $post['date'] }}</td>


            <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-info">view</a>

                <button type="button" class="btn btn-warning">delete</button>
                <button type="button" class="btn btn-success">update</button>
              </div></td>
          </tr>
        @endforeach


    </tbody>
  </table>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

@endsection
