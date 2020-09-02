<!-- List Creator -->

<html>
    <head>
        <style>
            #field{
                margin-top:100px;
                margin-left:500px;
            }
            #inp{
                height:40px;
                width:400px;
                outline:none;
                border:none;
                border-bottom:2px solid black;
            }
            #btn{
                height:40px;
                width:120px;
                background:black;
                color:white;
                border:none;
                outline:none;
                border-radius:20px;
            }
            ul{
                font-family:arial;
                font-size:15px;
                margin-left:100px;
            }
            label{
                font-family:arial;
                font-size:30px;
                margin-left:120px;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
       
        

<div class="container">
  <h2>USER LIST</h2>
  <table class="table">
    <thead>
      <tr>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>DOB</th>
        <th>MOBILE</th>
        <th>ADDRESS</th>
      </tr>
    </thead>
    <tbody>
    <?php

        $conn = mysqli_connect('localhost','root','','task');

        $query = "select * from user_registration";

        $res = mysqli_query($conn,$query);

        while($data = mysqli_fetch_array($res))
        {

        ?>
      <tr>
        <td><?php echo $data['user_name']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['dob']; ?></td>
        <td><?php echo $data['mobile']; ?></td>
        <td><?php echo $data['address']; ?></td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>

    </body>
</html>

