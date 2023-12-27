<form action="/login/check" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Masukkan email anda" required>
        <label for="floatingInput">Email</label>
    </div>
    <button type="submit" class="btn btn-primary w-100 py-3">Selanjutnya</button>
</form>