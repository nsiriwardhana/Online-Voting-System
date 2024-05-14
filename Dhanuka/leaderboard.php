<!DOCTYPE html>
<html>
<head>
  <title>Voting Leaderboard</title>
  <link rel="stylesheet" type="text/css" href="leaderboardStyle.css">
</head>
<body>
  <h1>Voting Leaderboard</h1>
  <table>
    <thead>
      <tr>
        <th>Contestant Number</th>
        <th>Contestant Name</th>
        <th>Vote Percentage</th>
      </tr>
    </thead>
    <tbody>
      <?php include 'get_leaderboard.php'; 
      ?>
    </tbody>
  </table>
</body>
</html>
