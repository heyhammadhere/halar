<form action="{{ $action }}" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
        <div class="form-text text-danger"></div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <div class="form-text text-danger"></div>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>