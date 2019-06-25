<div class="modal-body">
    <form action="validation.php" method="POST" class="p-3">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">User Name</label>
            <input type="text" class="form-control" placeholder="User Name" name="user" value="<?= $user; ?>" id="recipient-name" required="">
        </div>
        <div class="form-group">
            <label for="recipient-name1" class="col-form-label">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="recipient-name1" required="">
        </div>
        <div class="right-w3l mt-4 mb-3">
            <input type="submit"  name="submit" class="form-control" value="Login">
        </div>
    </form>

</div>