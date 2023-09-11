<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  {{-- logout --}}
      <div class="container">
        <h1>   Welcome , {{ session('loginname')}}</h1>
      </div>
 {{-- logout Button --}}
       @if (session('loginname'))
          <a href="{{ route('adminLogout') }}">
  <button type="submit" class="btn btn-danger" style="width: 150px;">Log out</button>
</a>
 @endif

  </nav>
