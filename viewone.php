<?php
include 'config.php';

    $from = $_GET['c_id'];

 
    $sql = "SELECT * from customer where c_id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    	
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}

    </style>
      
</head>

<body>
 
<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4">Customer Details</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                    <tr>
                        <td class="py-2"><?php echo $sql1['c_id'] ?></td>
                        <td class="py-2"><?php echo $sql1['name']?></td>
                        <td class="py-2"><?php echo $sql1['email']?></td>
                        <td class="py-2"><?php echo $sql1['balance']?></td>
                        <td><a href="selecteduserdetail.php?c_id= <?php echo $sql1['c_id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>

            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>