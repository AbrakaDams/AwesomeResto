
<?php 
require_once 'inc/header.php'; 
?>
   <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <h1 class="page-header text-center"> Contactez nous </h1>
                <form id="contact-form" class="form-horizontal" role="form" method="post">
                    <div> 
                        <div id="msgSubmit"></div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Nom Prénom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom & prénom">   
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                            <textarea id="message" class="form-control" rows="4" name="message"></textarea>     
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>   
    
<?php include_once 'inc/footer.php'; ?>