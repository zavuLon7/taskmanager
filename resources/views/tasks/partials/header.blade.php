<nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="150">
   <div class="container">
      <div class="navbar-translate">
         <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-bar"></span>
         <span class="navbar-toggler-bar"></span>
         <span class="navbar-toggler-bar"></span>
         </button>
      </div>
      <div class="collapse navbar-collapse"   >
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a href="{{ route('logout') }}" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>  Logout </a>
            </li>
         </ul>
      </div>
   </div>
</nav>

<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
