<h1>ini halaman dashboard student</h1>
<form action="{{ route('login.logout') }}" method="POST" class="d-inline"
    onsubmit="return confirm('Are you sure you want to logout?');">
    @csrf
    <button type="submit" class="btn btn-danger btn-sm mb-0 w-100">Logout</button>
</form>
