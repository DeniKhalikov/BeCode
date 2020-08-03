<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users and their sports</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>

<h1>Users and their sports</h1>

<?php if(isset($message)):?>
    <div class="alert alert-success" role="alert">
        <?php echo $message?>
    </div>
<?php endif;?>

<table class="table table-striped table-wide">
    <thead>
        <tr>
            <th width="40%">Sport</th>
            <th width="40%">Name</th>
            <td colspan="2" width="20%"></td>
        </tr>
    </thead>
    <tbody>
       <!-- <?php /*foreach($users AS $user):*/?>
        <tr>
            <td><?php /*echo htmlspecialchars($user['sport'])*/?></td>
            <td><?php /*echo htmlspecialchars($user['name'])*/?></td>
            <td>
                <a href="?id=<?php /*echo $user['id']*/?>" class="btn btn-primary">Update</a>
            </td>
            <td>
                <form method="post">
                    <input type="hidden" name="id" value="<?php /*echo $user['id']*/?>" />
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        --><?php /*endforeach;*/?>
    </tbody>
</table>

<form method="post" id="create-user">
    <h2><?php // echo $saveLabel?></h2>

    <input type="hidden" name="id" value="<?php // echo $selectedUser['id']?>" />

    <label for="firstname">First name:</label>
    <input type="text" name="firstname" id="firstname" required value="<?php // echo htmlspecialchars($selectedUser['firstname']) ?>"/>

    <label for="lastname">Last name:</label>
    <input type="text" name="lastname" id="lastname" required value="<?php // echo htmlspecialchars($selectedUser['lastname']) ?>"/>

    <fieldset>
        <legend>Interested in the following sports</legend>

        <?php foreach($sports AS $sport):?>

            <label for="<?php echo $sport?>">
                <?php // $checked = in_array($sport, $selectedUser['sports']) ? 'checked' : '';?>
                <input type="checkbox" name="sports[]" value="<?php echo $sport?>" id="<?php echo $sport?>" <?php // echo $checked?>>
                <?php echo ucfirst($sport)?>
            </label>

        <?php endforeach;?>
    </fieldset>

    <input type="submit" value="<?php // echo $saveLabel?>" />
</form>

<style>
    label {
        cursor: pointer;
    }
    label {
        display: block;
    }
    form#create-user {
        margin-left: 10px;
    }
</style>

</body>
</html>