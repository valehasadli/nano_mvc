<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Login</h1>
    </div>
    <form action="/site/login/" method="POST">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
