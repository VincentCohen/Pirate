<div class="container">
    <div class="row" id="rowIndex">
        <div class="col-md-4 form-holder first">
            <div class="panel panel-primary">
                <div class="panel-heading">Register</div>
                <form class="form-horizontal panel-body" method="post">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="username" name="username" type="text" placeholder="Username" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-small">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-4 form-holder second" style="float:right;margin-top: 60px">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Login</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="/login">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <p>Howdy Captain! Board your ship!</p>
                                    <input id="username" name="username" type="text" placeholder="Username" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center" >
                                    <button type="submit" class="btn btn-default btn-small">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>