<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pirate Quest</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <?= HTML::style('assets/css/global.css'); ?>

</head>
<body>
    <header class="navbar navbar-inverse" role="">
        <div class="container ">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand scroll-link" data-id="">Pirate Quest</a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse pull-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="#" class="scroll-link" data-id="signup">Sign Up</a></li>
                    <li><a href="#" class="scroll-link" data-id="pricing">Pricing</a></li>
                    <li><a href="#" class="scroll-link" data-id="location">Location</a></li>
                    <li><a href="#" class="scroll-link" data-id="comments">Comments</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container-full headline">
        <?= $content; ?>
    </div>
    <?php
    if (Session::get('message')):
        $message = Session::get('message');
    ?>
    <div class="alert alert-<?= $message['type'];?>" role="alert">
        <?= $message['text'];?>
    </div>
    <?php endif;?>
</body>
</html>