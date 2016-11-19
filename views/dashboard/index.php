<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Dashboard Controller</h1>
    </div>
    <p class="lead">
        Index() Method ... Only logged ...
    </p>
    <form action="<?= BaseUrl; ?>dashboard/create/" method="POST">
        <div class="form-group">
            <label for="data">Text</label>
            <input type="text" name="data" class="form-control" id="data" placeholder="Data">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
