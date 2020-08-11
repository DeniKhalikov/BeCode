<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'View/includes/Header.php';
?>

<?php if (isset($_POST['submit'])): ?>
    <?php
    echo '
    <div class="alert alert-success text-center" role="alert">
        Your form is submitted! <a href="?page=student">Back to Form</a>
    </div>'; ?>
<?php else: ?>
    <section class="container-fluid">
        <h2 class="text-center mb-5">Create a new student</h2>
        <form method="post">
            <section class="container-fluid">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationServer01">Full Name</label>
                        <input type="text" class="form-control" name="name" id="validationServer01" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationServer02">Email</label>
                        <input type="text" class="form-control" name="email" id="validationServer02" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                </div>
            </section>
        </form>
    </section>
<?php endif; ?>
<?php require_once 'View/includes/Footer.php'; ?>