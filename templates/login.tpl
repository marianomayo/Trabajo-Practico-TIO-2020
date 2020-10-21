{include file="header.tpl"}


<div class="container-login">

<div class="form-login">
        {if $message != ""}
            <div class="alert alert-danger" role="alert">
                {$message}
            </div>
        {/if}
        <h1>Task app</h1>
        <form action="verifyUser" method="post">
                        <div class="form-group">
                            <label for="user">Usuario</label>
                            <input class="form-control" id="user" name="input_user" aria-describedby="emailHelp">
                    
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" name="input_pass">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
    </div>

</div>
{include file="footer.tpl"}