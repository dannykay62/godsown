<ul class="nav navbar-nav">
    <li><a href="/blog">Blog Home</a></li>
    @if (Auth::check())
    <li @if (Request::is('admin/post*')) class="active" @endif>
        <a href="/admin/post">Posts</a>
    </li>
    <li @if (Request::is('admin/tag*)) class="active" @endif>
        <a href="/admin/tag">Tags</a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
        <a href="admin/upload">Uploads</a>
    </li>
    @endif
</ul>

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
    @else
        <li class="dropdown">
            <a href=""
        </li>
</ul>