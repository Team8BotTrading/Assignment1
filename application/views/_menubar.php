<?php
/*
 * Menu navbar, just an unordered list
 * style="list-style:none; "
 * style=" float:left; "
 */
?>
<ul class="nav" >
    {menudata}
    <li ><a href="{link}">{name}</a></li>
    {/menudata}
</ul>
<br/>
<br/>
<?php echo form_open('VerifyLogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="text" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
