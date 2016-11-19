<!-- Begin page content -->
<div class="container">

    <div class="page-header">
        <h1>User List</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>EMAIL</th>
                <th>NAME</th>
                <th>SURNAME</th>
                <th>GENDER</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->password; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->surname; ?></td>
                    <td><?php echo $user->gender; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>




</div>