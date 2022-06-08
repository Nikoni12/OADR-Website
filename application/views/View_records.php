	<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            body, html{
				 
				font-family: 'Oxygen', sans-serif;
				background-image: url("https://i2.wp.com/i.pinimg.com/originals/fa/dc/b2/fadcb24075acb650de29f258af69d830.gif"); 
			}
            #users {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 95%;
              margin-left:3%;
            }

            #users td, #users th {
              border: 1px solid #ddd;
              padding: 8px;
            }

            #users th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: center;
              color: white;
            }

        </style>
    </head>
    <body>
        <br>
        <div style = 'margin-left:3%;'><ul class='pagination' style="float:right; margin-right:2%;"><?php echo $this->pagination->create_links();?></ul>
          
             <a href="<?php echo base_url();?>User/updateUser"><button  style="font-family:Courier New;background:#A40E57;" class="btn btn-dark">Click here to update user</button></a>
            <a href="<?php echo base_url();?>User/deleteUser"> <button  style="font-family:Courier New;background:#A40E57;" class="btn btn-dark">Click here to delete user</button></a>
        </div><br><br>
        <table id="users" style="background: -webkit-linear-gradient(#E5147A, #37018A);border-style: solid;
			 border-width: 1px;border-color: #543884; box-shadow: 0px 0px 20px #E805F4;color:white;font-family:Courier New;">
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Profile Picture</th>
            <th>Active</th>
          </tr>
              <?php
                foreach($list as $lp){
                    echo "<tr align = 'center'>";
                    echo "<td align = 'center'>".$lp->id."</td>";
                    echo "<td align = 'center'>".$lp->fname."</td>";
                    echo "<td align = 'center'>".$lp->mname."</td>";
                    echo "<td align = 'center'>".$lp->lname."</td>";
                    echo "<td align = 'center'>".$lp->uname."</td>";
                    echo "<td align = 'center'>".$lp->pass."</td>";
                    echo "<td align = 'center'>".$lp->birthday."</td>";
                    echo "<td align = 'center'>".$lp->email."</td>";
                    echo "<td align = 'center'>".$lp->contact_num."</td>";
                    echo "<td align = 'center'><img style = 'width: 100px; height: 100px;' src = 'http://localhost/CODE_IGN/uploads/".$lp->profile_pic."'></td>";
                    echo "<td align = 'center'>".$lp->active."</td>";
					echo "</tr>";
                }
            ?>
            
        </table>
</body>
</html>