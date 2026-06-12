<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>While Loop - โปรแกรมแม่สูตรคูณ</title>
      <!-- นำเข้าฟอนต์ Kanit เพื่อความสวยงามอ่านง่าย -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
      
      <style>
            * {
                  box-sizing: border-box;
                  font-family: 'Kanit', sans-serif;
                  margin: 0;
                  padding: 0;
            }

            body {
                  background-color: #fdf6f6; /* พื้นหลังสีชมพูอ่อนละมุน */
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  justify-content: center;
                  min-height: 100vh;
                  padding: 20px;
            }

            .container {
                  background: #ffffff;
                  padding: 30px;
                  border-radius: 20px;
                  box-shadow: 0 10px 25px rgba(255, 182, 193, 0.3); /* เงาสีชมพูจางๆ */
                  width: 100%;
                  max-width: 450px;
                  text-align: center;
            }

            h1 {
                  font-size: 1.5rem;
                  font-weight: 600;
                  margin-bottom: 10px;
            }

            .home-btn {
                  display: inline-block;
                  color: #22d628;
                  text-decoration: none;
                  font-size: 0.9rem;
                  margin-bottom: 25px;
                  transition: color 0.3s;
                  font-weight: 500;
            }
            .home-btn:hover {
                  color: #ff6b84;
                  text-decoration: underline;
            }

            form {
                  display: flex;
                  flex-direction: column;
                  gap: 12px;
                  align-items: center;
                  margin-bottom: 25px;
            }

            label {
                  font-size: 1.1rem;
                  color: #555;
                  font-weight: 500;
            }

            input[type="number"] {
                  width: 100%;
                  padding: 12px;
                  border: 2px solid #ffe3e7;
                  border-radius: 10px;
                  outline: none;
                  font-size: 1rem;
                  text-align: center;
                  transition: border-color 0.3s;
            }
            input[type="number"]:focus {
                  border-color: #ffb6c1;
            }

            input[type="submit"] {
                  width: 100%;
                  padding: 12px;
                  background-color: #ffb6c1; /* สีชมพูพาสเทล */
                  color: white;
                  border: none;
                  border-radius: 10px;
                  font-size: 1rem;
                  font-weight: 500;
                  cursor: pointer;
                  transition: background-color 0.3s, transform 0.1s;
            }
            input[type="submit"]:hover {
                  background-color: #ff9aa9;
            }
            input[type="submit"]:active {
                  transform: scale(0.98);
            }

            .result-box {
                  margin-top: 20px;
                  padding-top: 20px;
                  border-top: 2px dashed #ffe3e7;
                  text-align: left;
                  display: inline-block;
                  width: 100%;
            }

            .result-box h2 {
                  text-align: center;
                  color: #ff6b84;
                  font-size: 1.3rem;
                  margin-bottom: 15px;
            }

            .multiplication-list {
                  background-color: #fff9fa;
                  padding: 15px;
                  border-radius: 12px;
                  font-size: 1.1rem;
                  color: #444;
                  line-height: 1.8;
                  text-align: center;
                  font-weight: 400;
            }
      </style>
</head>
<body>

      <div class="container">
            <?php
              echo "<h1 style='color:#ff8da1'>W1 - Thansita Boonthun BIT2/3 No.32</h1>";
            ?>

            <a href="index.php" class="home-btn">🏠 กลับหน้าหลัก (Home)</a>

            
            <form action="" method="GET">
                  <label for="num">เลขแม่สูตรคูณ</label>
                  <input type="number" name="a1" id="num" placeholder="กรอกตัวเลขที่นี่" required>
                  <input type="submit" value="คำนวณเลย">
            </form>
               
            <?php 
               if(isset($_GET["a1"]) && $_GET["a1"] !== ""){
                  $a1 = intval($_GET["a1"]);
                  
                  echo "<div class='result-box'>";
                  echo "<h2>สูตรคูณแม่ ". $a1 . "</h2>";
                  echo "<div class='multiplication-list'>";

            
                  $i = 1; 
                  while ($i <= 12) {
                    $i++;
                      echo $a1 . " x " . $i . " = " . ($a1 * $i) . "<br>";
                  }

                  echo "</div>";
                  echo "</div>";
               }
            ?>
      </div>

</body>
</html>