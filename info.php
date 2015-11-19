<?php
 if(isset($_POST['submit'])){
   $fullname= $_POST['fullname'];
   $password= $_POST['password'];
   $gender= $_POST['gender'];
   $location= $_POST['location'];
   $email= $_POST['email'];
   $emailType= $_POST['emailType'];
 }
?>
<form style="width: 700px; margin: auto">
 <fieldset>
  <legend><h1>Information Form</h1></legend>
  <table border="0" style="width: 100%;">
   <caption>List Name for Submit</caption>
   <tr>
    <th style="width: 20%;">Fullname</th>
    <th style="width: 20%;">Password</th>
    <th style="width: 15%;">Gender</th>
    <th style="width: 20%;">Location</th>
    <th style="width: 25%;">Mail</th>
   </tr>
   <tr>
    <td><?php echo $fullname; ?></td>
    <td><?php echo $password ?></td>
    <td><?php echo $gender ?></td>
    <td><?php echo $location ?></td>
    <td><?php echo $email.$emailType ?></td>
   </tr>
  </table>
 </fieldset>
</form>
