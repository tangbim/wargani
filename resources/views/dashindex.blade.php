@extends('layouts.dashlayout')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-white">Dashboard</h1>
  </div>

  <h2 class="text-white my-3">User</h2>
  @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
  <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col table-dark">#</th>
          <th scope="col table-dark">Name</th>
          <th scope="col table-dark">Email</th>
          <th scope="col table-dark">Roles</th>
          <th scope="col table-dark">Action</th>
        </tr>
      </thead>
      <tbody>
          @php($count = 1)
          @foreach ($users as $user)
          <tr class="align-middle">
              <th scope="row table-dark">{{ $count }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</td>
              <td>
                <form action="/dashboard/user/{{ $user->id }}" method="post">
                    @method('delete')
                    @csrf
                    <a class="btn btn-primary btn-sm mb-1 mb-md-0" href="/user/{{ $user->id }}"
                        role="button">View</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
          </tr>
          @php($count++)
          @endforeach
      </tbody>
    </table>
@endsection
