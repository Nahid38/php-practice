<?php
$emp=[
    [1,"Nahid","manager","12000","nahid"],
    [2,"Hasan","Director","18000"],
    [3,"Ham","Director","25000"]
];
echo "<table border='1px' cellpadding='5px' cellpadding='0px'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Extra</th>
    </tr>";


foreach($emp as list($id,$name,$position,$salary,$extra)){
    echo "<tr><td>$id</td> <td>$name</td><td>$position</td> <td>$salary</td> <td>$extra</td></tr>";
}
echo "</table>";
?>