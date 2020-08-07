<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class="container">
    <h2 class="text-center">Login</h2>
    <form method="post">
        <div class="input-group">
            <input type="text" name="firstName" placeholder="First Name" class="form-control">
            <input type="text" name="lastName" placeholder="Last Name" class="form-control">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Sign in</button>
            </div>
        </div>
    </form>
</section>
<?php require 'includes/footer.php' ?>
