<form action="{{ $action }}" method="POST">
    @csrf
    @if ($errors->any())
    @foreach ($errors->get("auth") as $errorMessage)
    <div class="alert alert-danger" role="alert">
        {{ $errorMessage }}
    </div>
    @endforeach
    @endif
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
        @if ($errors->any())
        @foreach ($errors->get("email") as $errorMessage)
        <div class="form-text text-danger">{{ $errorMessage }}</div>
        @endforeach
        @endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
        @if ($errors->any())
        @foreach ($errors->get("password") as $errorMessage)
        <div class="form-text text-danger">{{ $errorMessage }}</div>
        @endforeach
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>