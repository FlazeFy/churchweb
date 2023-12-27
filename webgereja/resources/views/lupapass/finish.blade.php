<form action="/login/check" method="POST">
    @csrf
    <div class="form mb-3">
        <label for="floatingInput">New Password</label>
        <input type="email" class="form-control" id="floatingInput" name="new-password" placeholder="Masukkan email anda" required>
        <label for="floatingInput">Re-Type Password</label>
        <input type="email" class="form-control" id="floatingInput" name="re-type-password" placeholder="Masukkan email anda" required>
        
    </div>
    <button type="submit" class="btn btn-primary w-100 py-3">Done</button>
</form>