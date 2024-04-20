
<html>
    <head>
        <title>Cafe Marvelous | Latest Orders</title>
        <link href="../Public/css/home.css" rel="stylesheet" />
        <link href="../Public/css/loader.css" rel="stylesheet" />
        <script src="../Public/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="../Public/vendor/bootstrap/js/popper.min.js"></script>
        <script src="../Public/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../Public/vendor/bootstrap/js/bootstrap.min.js"></script>
        
    </head>
    <body onload="Loader()">
        <div id="loader" class="loader">
            <div id="team">BY <i class="fa fa-heart"></i> Gaurav Pardeshi </div>
        </div>
        <div id="main-div" style="display:none;" >
            <?php
                require './layout/adminHeader.php';
                $orders=new order();
                $result = $orders->displayAllOrders();
            ?>
            <div class="container">    
            <h3 class="text-center">Latest Orders</h3><br>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <!-- <th scope="col">Product</th> -->
        
                        <th scope="col">Name</th>
                        <!-- <th scope="col">Product</th> -->
                        <!-- <th scope="col">Alloted Time</th> -->
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        <!-- <td>
                            <tr> <img src="../uploads/hot-chocolate.jpg" alt="hotchoco"></tr>
                        </td>
                    </tr> -->
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) 
                    { 
                        echo "<tr>
                        <th scope='row'>{$i}</th>
                        
                        <td>{$row['user_name']}</td>

                        
                        <td>{$row['total_price']} INR</td>
                        <td><span class='badge badge-success'>".$row['state']."</span></td>
                        <td><a href='../Controller/orderController.php?state=processing&orderId={$row['order_id']}'  title='Processing Order' class='btn btn-warning'  style='color:white'><i class='fa fa-clock'></i></a>
                        <a href='../Controller/orderController.php?state=deleiverd&orderId={$row['order_id']}' class='btn btn-success'  title='Deleiverd Order' style='color:white'><i class='fad fa-box-check'></i></a>
                        <a class='btn btn-danger' title='Cancel Order' href='../Controller/orderController.php?id={$row['order_id']}'><i class='far fa-times'></i></a></td>
                        </tr>";
                        $i += 1;
                    }
                    // <td> '5 Mins'</td>
                      // <td><img src={$row['image']}></td>
                    ?>
                </tbody>
            </table>   
            </div>
        </div>
     <script src="../Public/js/loader.js"></script>
  </body> 
<html> 
