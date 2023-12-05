
<?php include_once "header.php" ?>

<?php include_once "carousel.php" ?>

<!-- Login form component -->
<div class="bg-dark text-white font-weight-bold text-uppercase mb-5 p-3">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="mr-3">Log in to check our services</div>
        <form method="POST" class="form-inline" id="form">
            <div class="form-group mr-3">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group mr-3">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group mr-3">
                <button type="submit" class="btn btn-danger">Login</button>
            </div>
        </form>
    </div>
</div>

<!-- Box section -->
<div id="box" class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="fab fa-html5 fa-5x text-danger"></i>
                <h4 class="text-danger">HTML 5 MARK UP</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates consectetur 
                    reiciendis ad? Ut dolores id delectus incidunt voluptatibus autem nobis exercitationem, 
                    impedit, aliquid ratione aut.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fab fa-css3 fa-5x text-danger"></i>
                <h4 class="text-danger">CSS STYLING</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates consectetur 
                    reiciendis ad? Ut dolores id delectus incidunt voluptatibus autem nobis exercitationem, 
                    impedit, aliquid ratione aut.
                </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-desktop fa-5x text-danger"></i>
                <h4 class="text-danger">GRAPHICS DESIGN</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates consectetur 
                    reiciendis ad? Ut dolores id delectus incidunt voluptatibus autem nobis exercitationem, 
                    impedit, aliquid ratione aut.
                </p>
            </div>
        </div>
    </div>
</div>

<?php include_once "footer.php" ?>