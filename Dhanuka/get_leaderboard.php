<?php
// Retrieve leaderboard data from a database or an API
$leaderboardData = [
  ['01', 'John', '90%'],
  ['02', 'Stathm', '83%'],
  ['03', 'Harry', '71%'],
  ['04', 'Adonis', '58%'],
  ['05', 'Ellen', '49%']
];

// Display leaderboard data
foreach ($leaderboardData as $row) {
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "</tr>";
}
?>
