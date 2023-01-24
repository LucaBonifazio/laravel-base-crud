<div class="overlay text-center d-none">
    <form class="delete_confirm p-2" action="" method="POST">
        @method('DELETE')
        @csrf
        <h2>Are u sure?</h2>
        <button type="button" class="btn btn-warning btn_close">NO</button>
        <button class="btn btn-danger btn_delete">YES</button>
    </form>
</div>
