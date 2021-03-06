 <!-- Default Bootstrap Navbar -->
     <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>

          <a class="navbar-brand" href="#">Laravel Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/aboutme">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
          
          <ul class="nav navbar-nav navbar-right" >
            <li class="dropdown" >
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" >Hello {{ Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu" class="nav navbar-nav">
                <li><a href="{{route('posts.index')}}">Posts</a></li>
                <li role="separator" class="divider"></li>
                <li ><a href="/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>