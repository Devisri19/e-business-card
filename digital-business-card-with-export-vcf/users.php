<?php
// Fetch users
$query = "SELECT * FROM users";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>
                <a href='edit_user.php?id={$row['id']}'>Edit</a>
                <a href='delete_user.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
?>
<?php
include('includes/config.php');
$query = "SELECT * FROM users";
$result = $conn->query($query);
$users = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($users);
?>

