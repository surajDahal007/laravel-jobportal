<nav class="navbar navbar-expand-lg bg-body-tertiary border">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <h2 class="fst-italic">JobHunter</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="btn btn-outline-secondary fst-italic fw-bold"
            >
                Dashboard
            </a>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
          
              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
          </form>
        @else
          <a
            href="{{ route('login') }}"
            class="btn btn-primary"
          >
              Login
          </a>
        &nbsp;
        <a href="/registerPage" class="btn btn-outline-secondary">Register</a>
        &nbsp;
        |
        &nbsp;
        <a href="{{ route('employer.login') }}" class="fst-italic fw-bold">Employer Zone</a>
        @endauth 
      </div>
    </div>
</nav>