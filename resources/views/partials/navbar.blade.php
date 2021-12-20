<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Ecommerce</a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="nav navbar-nav">
<li class="{{session('active')=='home' ? 'active' : null }}"><a href="{{route('home')}}">Home</a></li>
<li class="{{session('active')=='pr' ? 'active' : null }}"><a href="{{route('products')}}">Products</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="{{session('active')=='login' ? 'active' : null }}"><a href="{{route('login')}}">Login</a></li>
</ul>
</div>
</nav>