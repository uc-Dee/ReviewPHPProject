// Get the current timestamp and update the DOM every second
function updateTimestamp() {
    const timestamp = new Date().toLocaleString();
    document.getElementById("timestamp").textContent = timestamp;
}

  setInterval(updateTimestamp, 1000);
  
  // Add event listeners for the buttons
  document.getElementById("previous").addEventListener("click", function() {
    // Handle previous button click
  });
  document.getElementById("next").addEventListener("click", function() {
    // Handle next button click
  });
  document.getElementById("list").addEventListener("click", function() {
    // Handle list button click
  });
  document.getElementById("end-test").addEventListener("click", function() {
    // Handle end test button click
  });