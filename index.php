<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

        // VARIABLES 

        $int = 123456;
        $float = 1.23145678;
        $boolean = true;
        $arr = ["1", "2", "3", "4"];

        // $assoc_arr['sno'] = 1;
        // $assoc_arr['name'] = "zaryab";
        // $assoc_arr['status'] = false;

        $assoc_arr = [ 'sno' => 1, 'name' => 'zaryab', 'status' => false];
        $records = [
            [ 'sno' => 1, 'name' => 'zaryab', 'status' => false],
            [ 'sno' => 2, 'name' => 'zia', 'status' => true],
        ];


        // CONDITIONS < > == != && ||

        var_dump((1 == 1) && (2 != 3)) ;
        echo '<br>';
        

        // LOOPS
        for ($i = sizeof($arr) - 1; $i >= 0; $i--) {
            print_r($arr[$i]);
            echo '<br>';
        }

        echo '<br>';
        $i = 0;
        while($i < 4){
            print_r($arr[$i]);
            echo '<br>';
            $i++;
        }

        echo '<br>';
        $i = 0;
        do{
            print_r($arr[$i]);
            echo '<br>';
            $i++;
        }while($i < 4);

        echo '<br>';
        foreach($assoc_arr as $key => $val){
            print_r($key . ' value ye hai ' . $val);
            echo '<br>';
        }

        echo '<br>';
        foreach($records as $row){
            print_r($row);
        }

        echo '<br>';
        echo '<br>';
        foreach($records as $row){
            print_r($row['name']);
            echo '<br>';
        }


        echo '<br>';
        echo '<br>';
        
        echo '<table border="1px">';
        echo '<thead><th>SNO</th><th>NAME</th><th>STATUS</th></thead><tbody>';
        foreach($records as $row){
            $status;
            
            if($row['status'] == true ){
                $status = 'Active';
            }else{
                $status = 'Inactive';
            }
            
            echo '<tr>';
                echo '<td>' . $row['sno'] .'</td>';
                echo '<td>' . $row['name'] .'</td>';
                echo '<td>' . $status  .'</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';


        function sum($range_arr){
            $answer = 0;

            for($i = 0; $i < sizeof($range_arr); $i++){
                $answer = $answer +  $range_arr[$i];
            }

            return $answer;
        }

        $arr = [2,2,2,2,2,2,2,2,2,2, 100];
        $my_answer = sum($arr);

        print_r( $my_answer );


    ?>


</body>
</html>