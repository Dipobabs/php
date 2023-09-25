<!-- login form -->
<style>
    fieldset {border-bottom-right-radius:30px; }
    input[type="email"]{margin-left: 20px;}


</style>
<div style="width:300px; margin: 20px">
    <form action="login/process-form.php" method="post">
        <fieldset>
            <legend style="color: green">LOGIN:</legend>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br /><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br /><br>
            <input type="submit" value="Login">
        </fieldset>
    </form>
</div>