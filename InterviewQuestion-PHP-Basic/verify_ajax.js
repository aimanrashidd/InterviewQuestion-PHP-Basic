document.getElementById("submitButton").addEventListener("click", function() {
  // Get the username input value
  const username = document.getElementById("username").value;

  // Function to update the result text and color
  function updateResult(text, color) {
    const resultElement = document.getElementById("result");
    resultElement.textContent = text;
    resultElement.style.color = color;
  }

  // Check if the username is empty
  if (username.trim() === "") {
    updateResult("Key in username and click submit", "green");
    return;
  }

  // Define the URL and parameters for the fetch request
  const url = "info.php";
  const params = new URLSearchParams({ username: username });

  // Send a POST request using fetch
  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: params
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.text();
  })
  .then(text => {
    if (text === "Verified") {
      updateResult("Verified!", "green");  // Verified

    } else {
      updateResult("Error", "red");  // Error

    }
  })
  .catch(error => {
    console.error('There has been a problem with your fetch operation:', error);
    updateResult("Error", "red");
  });
});


