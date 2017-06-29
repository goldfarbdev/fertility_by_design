<?php
require_once ('header.php');
?>
<div class="page">
    <section class="container">
        <header class="clearfix">
            <h1 class="h-flushTop">Health E-Newsletter</h1>
            <h3><b>Sign up now to Receive your free Health Newsletter! Just fill out the simple registration below.</b></h3>
        </header>

        <div class="col-md-14 col-md-offset-5">
        <form>
            <h3><b>Your Information</b></h3>
            <div class="form-group-lg">
                <p><input id="email" class="form-control" type="email" name="email" placeholder="*Email address" /></p>
            </div>
            <div class="form-group-lg">
                <p><input id="retype-email" class="form-control" type="email" name="retype-email" placeholder="*Re-type Email address" /></p>
            </div>
            <p class="pull-left">Required fields are marked with an asterisk &#40;&#42;&#41;</p>
            <button type="submit" class="pull-right btn btn-primary btn-lg">Submit</button>
        </form>
        </div>
    </section>
</div>
<?php
require_once ('footer.php');
?>

