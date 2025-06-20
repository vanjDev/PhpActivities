<?php
$names = [
    "chrisa", "jhevan", "chezka", "kinzlee", "raizelle",
    "andrei", "kyle ", "ethan", "Jose", "maria",
    "juan", "pedro", "antonio", "james", "marilyn",
    "mark", "luna", "amateo", "noah", "lucas"
];

echo '<style>
.table-container {
    width: 99vw;
    height: 90vh; 
    display: flex;
    align-items: stretch;
    justify-content: center;
}

table {
    width: 100%;
    height: 100%;
    border-collapse: collapse;
    table-layout: fixed; 
}

th, td {
    border: 1px solid #000;
    padding: 8px;
    text-align: left;
    word-break: break-word;
}
</style>';

echo '<div class="table-container">';
echo '<table border="1" cellpadding="10" cellspacing="0">';
echo '<tr><th colspan="6">List of names</th></tr>';
echo '<tr>
        <th>Name</th>
        <th>Number of characters</th>
        <th>Uppercase first character</th>
        <th>Replace vowels with @</th>
        <th>Check position of character "a"</th>
        <th>Reverse name</th>
      </tr>';

foreach ($names as $name) {
    $num_chars = strlen($name);

    $upperCaseFirst = ucfirst($name);

    $replace_vowels = preg_replace('/[aeiou]/i', '@', $name);

    $pos_a = strpos($name, 'a');
    $pos_a_display = $pos_a !== false ? $pos_a + 1 : '0';

    $reverse = strrev($name);

    echo "<tr>
            <td>$name</td>
            <td>$num_chars</td>
            <td>$upperCaseFirst</td>
            <td>$replace_vowels</td>
            <td>$pos_a_display</td>
            <td>$reverse</td>
          </tr>";
}
echo '</table>';
echo '</div>';
?>	