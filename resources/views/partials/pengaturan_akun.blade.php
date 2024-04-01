<div class="password mb-3 d-flex justify-content-center">
    <button class="btn btn-warning" type="submit">Ubah Password</button>
</div>
<hr>
<div class="email mb-3 d-flex justify-content-center">
    <button class="btn btn-secondary" type="submit">Ubah Email</button>
</div>
<hr>
<div class="logout d-flex justify-content-center mt-5">
    <form id="logout-form" action="{{ url('logout') }}" method="POST">
        {{ csrf_field() }}
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>
</div>
