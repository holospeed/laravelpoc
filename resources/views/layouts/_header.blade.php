<div class="container">
    <header class="blog-header lh-1 py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          @auth
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-sm btn-info">Log Out</button>
              </form>
            @else
            @endauth
          
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="{{ route('home') }}">
            @auth
            {{ Auth::user()->name }}
            @else
            {{ config('app.name') }}
            @endauth
          </a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
         @auth
            <a class="btn btn-sm btn-success" href="{{ route('machine.create') }}">{{ __("add machine") }}</a>

         @else
            <a class="btn btn-sm btn-success" href="{{ route('register') }}">{{ __("Sign up") }}</a>
            <a class="btn btn-sm btn-outline-secondary ms-2" href="{{ route('login') }}">{{ __("Sign in") }}</a>
         @endauth

        </div>
      </div>
    </header>
  
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" href="#">World</a>
        <a class="p-2 link-secondary" href="#">U.S.</a>
        <a class="p-2 link-secondary" href="#">Technology</a>
        <a class="p-2 link-secondary" href="#">Design</a>
        <a class="p-2 link-secondary" href="#">Culture</a>
        <a class="p-2 link-secondary" href="#">Business</a>
        <a class="p-2 link-secondary" href="#">Politics</a>
        <a class="p-2 link-secondary" href="#">Opinion</a>
        <a class="p-2 link-secondary" href="#">Science</a>
        <a class="p-2 link-secondary" href="#">Health</a>
        <a class="p-2 link-secondary" href="#">Style</a>
        <a class="p-2 link-secondary" href="#">Travel</a>
      </nav>
    </div>
</div>