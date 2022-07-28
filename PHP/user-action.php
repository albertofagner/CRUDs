<?php
switch ($_REQUEST["action"]) {
    case "register":
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birthdate = $_POST["birthdate"];
        $query_user = "INSERT INTO user (name, email, password, birthdate) VALUES (:name, :email, :password, :birthdate)";
        $reg_user = $conn->prepare($query_user);
        $reg_user->bindParam(':name', $name, PDO::PARAM_STR);
        $reg_user->bindParam(':email', $email, PDO::PARAM_STR);
        $reg_user->bindParam(':password', $password, PDO::PARAM_STR);
        $reg_user->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
        try {
            $reg_user->execute();
        } catch (Exception $e) {
            print "<script>alert('Fill All The Gaps');</script>";
            print "<script>location.href='?page=create';</script>";
        }
        if ($reg_user == true) {
            print "<script>alert('User Successfully Registred');</script>";
        } else {
            print "<script>alert('User Cant be Registred');</script>";
        }
        print "<script>location.href='?page=list';</script>";
        break;
    case "update":
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birthdate = $_POST["birthdate"];
        $id = $_REQUEST["id"];
        $query_user = "UPDATE user SET name=:name, email=:email, password=:password, birthdate=:birthdate WHERE id=:id";
        $reg_user = $conn->prepare($query_user);
        $reg_user->bindParam(':name', $name, PDO::PARAM_STR);
        $reg_user->bindParam(':email', $email, PDO::PARAM_STR);
        $reg_user->bindParam(':password', $password, PDO::PARAM_STR);
        $reg_user->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
        $reg_user->bindParam(':id', $id, PDO::PARAM_STR);
        $reg_user->execute();
        if ($reg_user == true) {
            print "<script>alert('User Successfully Updated');</script>";
        } else {
            print "<script>alert('User Cant be Updated');</script>";
        }
        print "<script>location.href='?page=list';</script>";
        break;
    case "delete":
        $id = $_REQUEST["id"];
        $query_user = "DELETE FROM user WHERE id=:id";
        $reg_user = $conn->prepare($query_user);
        $reg_user->bindParam(':id', $id, PDO::PARAM_STR);
        $reg_user->execute();
        if ($reg_user == true) {
            print "<script>alert('User Successfully Deleted');</script>";
        } else {
            print "<script>alert('User Cant be Deleted');</script>";
        }
        print "<script>location.href='?page=list';</script>";
        break;
}
