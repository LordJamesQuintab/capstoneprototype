const token = "{{ env('VITE_MANGADEX_JWT_TOKEN') }}"; // Make sure the token is set correctly from your backend

// Base URL for MangaDex API with CORS proxy (if needed)
const baseUrl = "https://corsproxy.io/?https://api.mangadex.org";

// Function to fetch data from the API
const fetchData = async (endpoint) => {
  try {
    // Make the API request
    const response = await fetch(`${baseUrl}${endpoint}`, {
      method: 'GET',
      headers: {
        'Authorization': `Bearer ${token}`,  // Add token to the request headers
      },
    });

    // Check if the response is successful
    if (!response.ok) {
      throw new Error("Failed to fetch data");
    }

    // Parse the response as JSON
    const result = await response.json();
    console.log(result);  // Display the result in the console
  } catch (error) {
    console.error('Error fetching data:', error.message);  // Handle errors
  }
};

// Example of using the fetchData function with an API endpoint
fetchData("/v2/manga");  // Specify your desired API endpoint
