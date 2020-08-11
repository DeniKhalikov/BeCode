<?php
declare(strict_types=1);
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require_once 'includes/Header.php';
?>
    <form>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="schoolClass">Class:</label>
                <select name="schoolClass" id="schoolClass" required>
                    <option value="1">Giertz</option>
                    <option value="2">Lamarr</option>
                    <option value="3">Theano</option>
                    <option value="4">Hopper</option>
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="schoolLocation">Location:</label>
                <select name="schoolLocation" id="schoolLocation" required>
                    <option value="1">Antwerp</option>
                    <option value="2">Gent</option>
                    <option value="3">Genk</option>
                    <option value="4">Brussels</option>
                    <option value="5">Liege</option>
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="schoolTeacher">Teacher:</label>
                <select name="schoolTeacher" id="schoolTeacher" required>
                    <option value="1">Koen</option>
                    <option value="2">Tim</option>
                    <option value="3">Sicco</option>
                    <option value="4">Nick</option>
                </select>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <fieldset id="schoolStudents" name="schoolStudents">
                    <label for="schoolStudents">Students:</label><br>
                    <input type="checkbox" id="student1" name="student1" value="1">
                    <label for="student1">Hassan</label><br>
                    <input type="checkbox" id="student2" name="student2" value="2">
                    <label for="student2">Deni</label><br>
                    <input type="checkbox" id="student3" name="student3" value="3">
                    <label for="student3">Jeremia</label><br>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </fieldset>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

<?php require_once 'includes/Footer.php'; ?>