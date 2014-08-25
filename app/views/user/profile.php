<div class="container-full headline" style="height:200px">

</div>
<div class="container profile">
    <div class="row">
        <div class="col-sm-10"><h1><?= $user->username;?></h1></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="/users" class="pull-right">
                        <img title="profile image" class="img-circle img-responsive" src="http://www.placekitten.com/150/150">
                    </a>
                </div>
            </div>
            <ul class="list-group">
                <li class="list-group-item text-muted">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> 2.13.2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> Yesterday</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?= $user->username;?></li>
            </ul>

        </div><!--/col-3-->

        <div class="col-sm-9">
            <ul class="list-inline col-xs-12" id="skills">
                <li class="col-sm-3 button text-center"><strong>Kills</strong>125</li>
                <li class="col-xs-3 button text-center"><strong>Raids</strong>13</li>
                <li class="col-xs-3 button text-center"><strong>Quests</strong>37</li>
                <li class="col-xs-3 button text-center"><strong>Crew</strong>78</li>
            </ul>

            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="activity">
                    <hr/>
                    <ul class="list-group">
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Hi Joe, There has been a request on your account since that was..</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Nullam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Thllam sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Wesm sapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">For therepien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Also we, havesapien massaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                        <li class="list-group-item text-right"><a href="#" class="pull-left">Swedish chef is assaortor. A lobortis vitae, condimentum justo...</a> 2.11.2014</li>
                    </ul>
                </div>
                <div class="tab-pane" id="messages">
                    <hr/>
                    <p>No messages available..</p>
                </div>
            </div>

        </div><!--/tab-pane-->
    </div>
</div><!--/tab-content-->