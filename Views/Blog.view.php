<h1>This is Blog View Page</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Login</th>
        <th>Role</th>
        <th>Slug</th>
        <th>Created_at</th>
    </tr>

    <?php
    foreach ($data as $user) {
        ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->username ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->password ?></td>
            <td><?= $user->login ?></td>
            <td><?= $user->role ?></td>
            <td><?= $user->slug ?></td>
            <td><?= $user->created_at ?></td>
        </tr>
    <?php
    }
    ?>
</table>