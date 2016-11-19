<!-- Begin page content -->
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="<?= Assets . 'img/' . $photo; ?>" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <?= $_name . ' ' . $surname; ?>
                    </div>
                    <div class="profile-usertitle-job">
                        <?=$username?>
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li>
                            <a href="<?=BaseUrl.'user/profile/';?>">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview 
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= BaseUrl . 'user/update/'; ?>">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings 
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help 
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <form action="/user/saveProfile/" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?= $_name; ?>">
                    </div>

                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" name="surname" class="form-control" id="surname" value="<?= $surname; ?>">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" value="<?= $username; ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="username" value="<?= $email ?>">
                    </div>

                    <select name="gender" class="form-control">
                        <option value="<?= $gender ?>"><?= $gender ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <br>

                    <select name="role" class="form-control">
                        <option selected="selected" value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                    <br>
                    <br>

                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input name="photo" type="file" id="exampleInputFile">
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
