<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Ben Thomson C3508658</h1> 
      </header>
      
      <section id="container">
         <h1>Further Fundamentals of PHP</h1>
         <?php
        echo '<h1> Arrays </h1>';
        echo '<strong> Simple Arrays </strong>';
        echo '<br>';
        $product = array('tshirt','cap','mug');
        print_r ($product);
        echo '<br>';
        $product1 = array('tshirt','shirt','mug');
        print_r($product1);
        echo '<br>';
        $product2 = array('tshirt','shirt','mug','skirt');
        echo '<br>';
        print_r($product2);
        echo '<br>';
        echo 'The item at index[2] is:';
        echo $product[2];
        echo '<br>';
        echo 'The item at index[3] is:';
        echo $product2[3];
        echo '<br>';
        echo '<strong> Associative Arrays </strong>';
        echo '<br>';
        $customer = array('CustID'=> 12,'CustName'=> Sarah,'CustAge'=> 32,'CustGender'=> F);
        print_r ($customer);
        echo '<br>';
        $customer1 = array('CustID'=> 12,'CustName'=> Sarah,'CustAge'=> 32,'CustGender'=> F,'CustEmail'=>'sarah@gmail.com');
        print_r ($customer1);
        echo '<br>';
        echo 'Items in my customer array';
        echo '<br>';
        echo 'The item at index[CustName] is: ';
        echo $customer[CustName];
        echo '<br>';
        echo 'The item at index[CustEmail] is: ';
        echo $customer1[CustEmail];
        echo '<h1> Loops </h1>';
        echo '<strong> While Loop';
        echo '<br>';
        $counter = 1;
        while ($counter<=6) {
        echo 'Count = '.$counter.'<br />';
        $counter++;
        }
        $shirt_price = 9.99;
        $counter =1;
        while ($counter <=10) {
            $total =$counter*$shirt_price;
            $counter++;
            echo ''.$counter.' = '.$total.'</br>';
        }
      
         echo '<strong> For Loops </strong>';
         echo '<br>';
         $names = array ('Peter','Kat','Laura','Ali','Popacatapetal');
         for ($i = 0; $i<=5 ; $i++) {
         echo $names[$i].'<br>';
         }
       
        //echo '<strong> Foreach Loops </strong>';
      //  echo '<br>'; 
         //$namess = array ('Peter'=> c123425, 'Kat'=>c335353,'Laura'=>c457832,'Ali'=>c41325,'Popacatapetal'=> c785223);
        // foreach($namess as $element => $inner_array){
            // echo $element.'<br>';
             //foreach($inner_array as $item) {
                // echo $item. '<br>';
        
        // }
        // } 
		?>
      </section>
      <footer>   
         <small> <a href="../watIndex.html">Home</a></small>
      </footer>
   </body>
</html>
