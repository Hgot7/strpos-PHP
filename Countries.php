<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Countres</title>
    <style>
        body{
            background-color:brown;
        }
        .card.text-center {
            width: 60%;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            top: 77px;
            --bs-card-border-color: none;
            text-align: start!important;
        }
    
    </style>
</head>

<body>
    <?php
    $Asia = array(
        "Kazakhstan", "Kyrgyzstan", "Tajikistan", "Turkmenistan",
        "Uzbekistan", "China", "China, Hong Kong Special Administrative", "Region", "China, Macao Special Administrative",
        "Region", "North Korea", "Japan", "Mongolia", "South Korea", "Afghanistan", "Bangladesh",
        "Bhutan", "India", "Iran (Islamic Republic of)", "Maldives", "Nepal", "Pakistan", "Sri Lank", "Brunei Darussalam",
        "Cambodia", "Indonesia", "Lao People's Democratic Republic", "Malaysia",
        "Myanmar", "Philippines", "Singapore", "Thailand", "Timor-Leste", "Viet Nam", "Armenia",
        "Azerbaijan", "Bahrain", "Cyprus", "Georgia", "Iraq", "Israel", "Jordan", "Kuwait", "Lebanon", "Oman", "Qatar", "Saudi Arabia",
        "State of Palestine", "Syrian Arab Republic", "Turkey", "United Arab Emirates", "Yemen"
    );
  
    $filename = array("hw-doc01.txt", "hw-doc02.txt", "hw-doc03.txt");

    for ($x = 0; $x <= 2; $x++) {
        $word = '';
        $file =  $filename[$x];  //ชื่อไฟล์สำหรับเก็บข้อมูล
        if (file_exists($file)) {  //ถ้ามีไฟล์อยู่แล้ว ให้ค่ามาใช้
            $word = file_get_contents($file);
        } else {
            echo "no file data";  //ไม่มีข้อมูลใน file  
        }

        $text = [];    //อาร์เรย์ว่างสำหรับเก็บชื่อประเทศที่พบ
        foreach ($Asia as $check) {
            if (stripos($word, $check) != null) {     //ถ้ามีคำในสตริง
                $text[] = $check;                                //ถ้าพบ ให้เก็บไว้ในอาร์เรย์
            }
        }
        array_unique($text);     // check ตัวซ้ำ
        sort($text);            // เรียงลำดับตัวอักษร
        $Countries = implode('<br>', $text);   // ใช้แบ่งข้อความ
        echo '<div class="card text-center">
                  <div class="card-header text-bg-danger">
                  <h5 class="card-title">Asia Countries</h5> 
                  </div>
               <div class="card-body">
                     <h5 class="card-title">filename : ' . $filename[$x] . '</h5>
              <p class="card-text">' . $Countries . '</p>
             </div>
            </div> ';
            } 
            ?>
</body>

</html>