
                      









                      <?php  

                            $num=1;
                            $sql="SELECT items_order.*, items.name as item_name,items.discount as price  FROM items_order INNER JOIN items ON items_order.item_id=items.id WHERE items_order.order_id=:id";
                                $stmt=$pdo->prepare($sql);
                                $stmt->bindParam(':id',$id);
                                $stmt->execute();
                                $orderdetails= $stmt->fetchAll();

    

                            $j=1;
                            foreach ($orderdetails as $orderdetail) {

                                ?>

                                <tr>
                                    <td><?php echo $j++; ?></td>
                                    <td><?=$orderdetail['item_name']?></td>
                                    <td><?=$orderdetail['price']?></td>
                                    <td><?=$orderdetail['qty']?></td>

                                    <td><? $orderdetail['total']  ?></td>
                                   


                                </tr>

                                <?php  
                            }   
                            ?>

