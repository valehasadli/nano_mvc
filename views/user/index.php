<!-- Begin page content -->
<div class="container">
    <ol class="breadcrumb">
        <li>Home</li>
        <?php $i=0; foreach($breadcrumbs as $breadcrumb): ?>
        <li><?=$breadcrumb; ?></li>
        <?php $i++; endforeach; ?>
    </ol>
    <div class="page-header">
        <h1>Login Controller</h1>
    </div>
    <p class="lead">
        Index() Method
    </p>

    <form action="login/run" method="POST">
        <div class="form-group">
            <label for="name">Login</label>
            <input type="text" name="username" class="form-control" id="name" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>