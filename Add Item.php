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
            #menu{
                position:fixed;
                top:0px;
                left:0px;
            }
        </style>
    </head>
    <body>

        <div id="main">
            <div id="field">
                <form action="Add Product.php" method="post">
                    <input type="text" name="product" id="inp" placeholder="ENTER ITEM"/>
                    <input type="submit" value="ADD" id="btn"/>
                </form>
            </div>
        </div>
        
        <label>ITEMS</label>
        <ul>


        <?php

        $conn = mysqli_connect('localhost','root','','task');

        $query = "select * from items";

        $res = mysqli_query($conn,$query);

        while($data = mysqli_fetch_array($res))
        {

        ?>
        <li>
            <?php echo $data['item_name']; ?>
        </li>

        <?php
        }
        ?>
    </body>
</html>

