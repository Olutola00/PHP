<?php
$students = array(
            "Olumide Ayobami" => "60%",
             "Yusuf Aisha" => "68%",
              "Adio Funmilayo" => "49%",
              "James Daniel" => "56%",
              "Alele Segun" => "71%",
              "Oluseyi Omobobola" => "65%",
              "Valentine Bright" => "68%",
              "Olugbile Tolulope" => "76%",
              "Bassey Samuel" => "53%",
              "Oluchi Amarachi" => "39%",
              "Olofin Yemi" => "41%",
              "Aliu Danjuma" => "57%"
);
 arsort( $students);

          foreach($students as $key => $value) {
                echo "$key = $value <br>";
              };
              
          for ($i=1; $i <= 12 ; $i++) {
                echo $i."<br>";
              };




        function failed() {
          $students  = array(
                          'Olumide Ayobami' => '61%',
                          'Yusuf Aisha' => '68%',
                          'Adio Funmilayo' => '49%',
                          'James Daniel' => '56%',
                          'Alele Segun' => '71%',
                          'Oluseyi Omobobola' => '65%',
                          'Valentine Bright' => '68%',
                          'Olugbile Tolulope' => '76%',
                          'Bassey Samuel' => '53%',
                          'Oluchi Amarachi' => '39%',
                          'Olofin Yemi' => '41%',
                          'Aliyu Danjuma' => '57%'
                         );
                          arsort($students);

            foreach ($students as $key => $value) {
            if ($value <= 49 ) {
            echo "$key => $value  Failed<br>";
            }

          }
        }
  failed();
 ?>
