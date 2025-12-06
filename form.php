<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <select name="sal">
            <option>
                <?php
                for ($x=1350; $x <= 1400; $x++) { 
                    echo "<option>$x</option>";

                } 
                ?>
            </option>
        </select>
        <select name="mah">
            <option >
                <?php
                $mah = array("farvardin","ordibehesht","khordad","tir","mordad","sharivar","mahr","aban","azar","day","bahman","esfand"); 
                foreach ($mah as $key => $mahh) {
                    echo "<option>$mahh</option>";
                }
                ?>
            </option>
        </select>
        <select name="rooz">
                <?php 
                for ($i=1; $i <30 ; $i++) { 

                    echo "<option>$i</option>";

                }
                ?>
            
        </select>

        <input type="submit">
        
    </form>
</body>
</html>