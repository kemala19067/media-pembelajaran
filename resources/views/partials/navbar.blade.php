<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <a class="navbar-brand" href="/home">TIK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Course
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/courses">Materi</a></li>
            <li><a class="dropdown-item" href="/file">File</a></li>
            <li><a class="dropdown-item" href="#">Bookmark</a></li>
          </ul>
        </li>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/kuis" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quiz
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/topik">Daftar Quiz</a></li>
              <li><a class="dropdown-item" href="#">Peringkat</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/postingan" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Forum
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/forumpostingan">Postingan</a></li>
              <li><a class="dropdown-item" href="/forum">Buat Forum</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="font-medium text-base text-gray-800">{{ Auth::user()->name   }}</div>
      
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Keluar') }}
                    </x-jet-responsive-nav-link>
                </form>
        </div>
    </div>
</nav>



