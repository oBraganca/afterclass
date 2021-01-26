    <?php include('inc/header.php')?>

    <!-- Inicio formulario login/register -->
    
        <div class="form">
            <div class="form-move1">
                <form action="app/index.php" class="accout" method="POST">
                    <input type="email" name="email" placeholder="Insert email">
                    <input type="password" name="password" placeholder="Insert password">
                    <button type="submit" value="submit" class="btn-sub">Submit</button>
                </form>
                
            </div>
            <div class="form-move2">
                <form action="app/index.php" class="accout-2" method="POST">
                    <input type="text" name="user" placeholder="Insert user">
                    <input type="email" name="email" placeholder="Insert email">
                    <input type="password" name="password" placeholder="Insert password">
                    <button type="submit" value="submit" class="btn-sub">Submit</button>
                </form>
            </div>
            <div class="button-polymorph">    
                <button class="polymorph btn-sub">Sign Up</button>
            </div> 
        </div>
             

          
    <!-- Fim formulario login/register -->

    <?php include('inc/footer.php')?>