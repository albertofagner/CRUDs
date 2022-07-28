<h1>Create User</h1>

<form name="reg-user" method="POST" action="?page=user-action">
    <input type="hidden" name="action" value="register">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Birthdate</label>
        <input type="date" name="birthdate" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>