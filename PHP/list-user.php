<h1>List Users</h1>
<?php
$query = "SELECT * FROM user";
$users = $conn->prepare($query);
$users->execute();

if ($users->rowCount() > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Name</th>";
    print "<th>E-mail</th>";
    print "<th>Birthdate</th>";
    print "<th>Actions</th>";
    while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
        print "<tr>";
        print "<td>" . $row['id'] . "</td>";
        print "<td>" . $row['name'] . "</td>";
        print "<td>" . $row['email'] . "</td>";
        print "<td>" . $row['birthdate'] . "</td>";
        print "<td>
               <button onclick=\"location.href='?page=edit&id=" . $row['id'] . "';\" class='btn btn-success'>Edit</button>
               <button onclick=\"if(confirm('Are You Sure That You Want to DELETE This User?')){location.href='?page=user-action&action=delete&id=" . $row['id'] . "';}else{false;}\" class='btn btn-danger'>Delete</button>
               </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Results Not Found!</p>";
}

?>