<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/posts"><span class="chessMore">Chess More</span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/posts">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="/posts/create">Post</a></li>

            {{-- Check if any user is signed in else register or login --}}
            @if (auth()->check())
              <li><a href="/logout">Logout</a></li>
              <li><a class="nav-link go-right" href="#">{{ auth()->user()->name }}</a></li> 
            @else
              <li><a href="/login">Login</a></li> 
              <li><a href="/register">Register</a></li> 
            @endif
          </ul>
          
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>