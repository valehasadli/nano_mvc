<!-- Begin page content -->
<div class="container">

    <div class="page-header">
        <h1>Create User</h1>
    </div>
    <form action="/user/create/" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="name">
        </div>

        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname" placeholder="surname">
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="password">
        </div>


        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="username" placeholder="Email">
        </div>

        <select name="gender" class="form-control">
            <option selected="selected">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <select name="role" class="form-control">
            <option selected="selected" value="0">User</option>
            <option value="1">EDITOR</option>
            <option value="2">Admin</option>
        </select>
        <br>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input name="photo" type="file" id="exampleInputFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


</div>