 // Set the countdown time in minutes and seconds
 var countdownTime = 3 * 60; // 3 minutes

 // Update the countdown every second
 var countdownTimer = setInterval(function() {
   // Calculate minutes and seconds
   var minutes = Math.floor(countdownTime / 60);
   var seconds = countdownTime % 60;

   // Display the countdown
   document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s";

   // Check if the countdown is finished
   if (countdownTime <= 0) {
     clearInterval(countdownTimer);
     document.getElementById("countdown").innerHTML = "VOTING IS CLOSED";
     //disable the voting button
     document.getElementById("voteButton").disabled=true;
   }
   
   // Decrease the countdown time by 1 second
   countdownTime--;
 }, 1000);

 // Add an event listener to the voting button
document.getElementById("voteButton").addEventListener("click", function() {
  // Perform the voting action here
  alert("Vote submitted!"); // Replace this with your actual voting logic
});