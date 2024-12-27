<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" target="_blank" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="display-6 fw-bold">JobHunter</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/employer/dashboard" class="nav-link active" aria-current="page">Dashboard</a></li>
        <li class="nav-item"><a href="/employer/postJobs" class="nav-link">Post Jobs</a></li>
        <li class="nav-item">

          <form method="POST" action="{{ route('employer.logout') }}">
            @csrf
        
            <x-dropdown-link :href="route('logout')" class="nav-link text-danger fw-bold fst-italic"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('LogOut') }}
            </x-dropdown-link>
          </form>
        </li>
      </ul>
    </header>
</div>