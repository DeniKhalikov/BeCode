<?php
declare(strict_types=1);

require_once 'View/includes/Header.php';
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
                    <div class="col-md-4 mb-3">
                        <label for="validationServer04">Class</label>
                        <select class="custom-select class" name="class" id="validationServer04"
                                aria-describedby="validationServer04Feedback">
                            <option selected disabled value="">Choose a class</option>
                            <?php
                            /** @var ClassModel[] $classes */
                            foreach ($classes as $class) {
                                echo "<option value='{$class->getId()}'>{$class->getName()}</option>";
                            }
                            ?>
                        </select>
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            Please select a class.
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary w-100" type="submit" name="submit" value="create">Create a new student
                </button>
            </section>
        </form>
    </section>
<?php endif; ?>
<?php require_once 'View/includes/Footer.php'; ?>