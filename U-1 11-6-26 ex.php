<html lang="en">
    <body>
        <form action="" methods="get"></form>



        <input type="text" name="uname[0]"><br><br>
        <input type="text" name="uname[1]"><br><br>
        <input type="text" name="uname[2]"><br><br>

        <input type="submit" value="Add">
        </body>
        </form>
    </html>
    </form>

    </body>
</html>
<?php 
$nm = $_GET['uname'];
echo "<h3>Entered Values:</h3>";
foreach($nm as $val){
    echo $val . "<br>";
}
?>
