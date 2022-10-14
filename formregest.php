<html>
  <head>
<style>

    form {
            max-width: 500px;

            margin: auto;
         }
    input {
        
        border: 3px solid #555;

    }
    #name {
      width: 100%;
    }
    #email {
      width: 100%;
    }
</style>
  </head>
  <body>

<form action = "addnew.php" method="post">
     
      <p class="p1"><b>USER REGISTRATOIN FORM </p><hr>
      <p>please fill this form and submit to add user record to the database .</p>

            <label  for="name" > Name: </label><br>
           <input id="name" type ="text" name="name" ><br>

           <label  for="email" > E-mail: </label><br>
           <input id="email" type ="email" name="email"><br>

           <label  for="radio" value="gender"> Gender </label><br>
           <input type ="radio" name="gender" value="F">female <br>
           <input id="radio" type ="radio" name="gender" value="M">Male <br>

           <input id="agree" type="checkbox" name="agree" value="yes" value="no">
           <label for= "agree" >Receive Emails from us . </label><br>
            

            <input type="submit" name="submit"> <input type="reset" value="Cancel">

</form>

</body>
</html>