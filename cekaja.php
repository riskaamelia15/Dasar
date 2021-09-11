<?php
// rata atas kiri

for($i=1; $i<=10; $i++){
for($x=1; $x<=$i; $x++){
echo "*";
}
echo "<br />";
}

// rata bawah kanan

echo '<p style="float: left; text-align: right;">';
for($i=10; $i>=1; $i--){
for($x=$i; $x>=1; $x--){
echo "+";
}
echo "<br />";
}
echo '</p>';

// rata bawah kiri

for($i=10; $i>=1; $i--){
for($x=1; $x<=$i; $x++){
echo "*";
}
echo "<br />";
}

// rata atas kanan

echo '<p style="float: left; text-align: right;">';
for($i=1; $i<=10; $i++){
for($x=$i; $x>=1; $x--){
echo "+";
}
echo "<br />";
}
echo '</p>';

?>