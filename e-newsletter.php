<?php
require_once ('header.php');
?>
<div class="page">
    <section class="container">
        <header class="clearfix">
            <h1 class="h-flushTop">Health E-Newsletter</h1>
            <h3>Sign up now to Receive your free Health Newsletter! Just fill out the simple registration form below.</h3>
        </header>
    </section>
    <div class="island bg-gray clearfix">
        <form class="center-block h-max-md">
            <div class="form-group">
                <label class="sr-only">Your Information</label>
                <label class="h3" for="input-email">Your Information</label>
                <input type="email" class="form-control" id="input-email" placeholder="*Email address:">
            </div>
            <div class="form-group">
                <label class="sr-only">Re-type email address</label>
                <input type="email" class="form-control" id="input-email" placeholder="*Re-type Email address:">
            </div>
            <div class="form-group">
                <p class="pull-left">Required fields are marked with an asterisk (*)</p>
                <div class="pull-right text-right"><button type="submit" class="btn btn-primary btn-sm">Submit</button></div>
            </div>
        </form>
    </div>
</div>
<?php
require_once ('footer.php');
?>

