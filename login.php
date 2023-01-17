<?php
session_start();

?>

<form action="" method="POST">
<table>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" placeholder="username" name="username" required></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" placeholder="password.." name="password" required></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="login"></td>
</tr>
</table>
</form>

<?php
if (isset($_POST['submit'])) { 
    //Mengambil nilai yang diinputkan oleh user
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Membuat session
    $_SESSION['username'] = "tommy";
    $_SESSION['password'] = "12345";

    //Lakukan pengecekan 
    if ($username == $_SESSION['username'] && $password == $_SESSION['password']){
        session_start();
        header('Location:dashboard.php');    
    } else {
        echo "Username atau Passwordnya Salah Kak !";
    }
}
?>