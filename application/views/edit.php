<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book - Update User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">ADDRESS BOOK</a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
    <h3>Update User</h3>
    <hr>
    <form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo set_value('name',$user['name']);?>" class="form-control">
                    <?php echo form_error('name');?>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="<?php echo set_value('address',$user['address']);?>" class="form-control">
                    <?php echo form_error('address');?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                    <a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>