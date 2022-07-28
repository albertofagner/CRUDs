<h1>Edit User</h1>

<?php
$query = "SELECT * FROM user WHERE id=" . $_REQUEST["id"];
$user = $conn->prepare($query);
$user->execute();
$user = $user->fetch(PDO::FETCH_ASSOC);
?>

<form name="edit-user" method="POST" action="?page=user-action">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?php print $_REQUEST["id"] ?>">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php print $user['name'] ?>">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php print $user['email'] ?>">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class=" mb-3">
        <label>Birthdate</label>
        <input type="date" name="birthdate" class="form-control" value="<?php print $user['birthdate'] ?>">
    </div>
    <div class=" mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>