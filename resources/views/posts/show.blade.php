
@extends('layouts.app')
@section('hello')

    <div class="container mt-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['name'] }}</td>
            <td>{{ $post['date'] }}</td>
          </tr>
        </tbody>
      </table>
    </div>

    @endsection
