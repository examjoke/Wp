<?php
$students = [
    ["id" => 101, "name" => "Ravi", "course" => "BCA"],
    ["id" => 102, "name" => "sneha", "course" => "BSC"],
    ["id" => 103, "name" => "Arjun", "course" => "BCA"],
    ["id" => 104, "name" => "Meera", "course" => "MCA"],
];
function searchData($students, $key, $value)
{
    foreach ($students as $student) {
        if ($student[$key] == $value) {
            return $student;
        }
    }
    return null;
}
$result1 = searchData($students, "id", 103);
$result2 = searchData($students, "name", "Meera");
$result3 = searchData($students, "course", "BCA");
echo "search by ID(103):";
print_r($result1);
echo "<br><br>";
echo "search by Name(Meera):";
print_r($result2);
echo "<br><br>";
echo "search by Course(BCA):";
print_r($result3);
?>