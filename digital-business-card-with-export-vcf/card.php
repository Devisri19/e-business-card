<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Dynamic E-Visiting Card Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color:rgba(178, 180, 182, 0.48);
      
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .form-group {
      margin: 20px;
      text-align: center;
    }
    .form-group input, .form-group select {
      margin: 10px 0;
      padding: 10px;
      width: 80%;
      max-width: 400px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group button {
      margin: 10px;
      padding: 10px 20px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    .form-group button:hover {
      background-color: #2980b9;
    }
    .container {
      margin: 20px;
      text-align: center;
    }
    .card {
      width: 350px;
      padding: 20px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
      text-align: center;
      overflow: hidden;
      color: white;
      position: relative;
    }
    .container-card {
  width: 500px;
  padding: 20px;
  background: linear-gradient(45deg, #3498db, #e74c3c); /* Diagonal gradient from blue to red */
  border-radius: 15px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  text-align: center;
  overflow: hidden;
  color: white;
  position: relative;
}



    .card-content {
      position: relative;
      z-index: 2;
    }
    .card img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-top: -40px;
      border: 3px solid white;
    }
    .logo img {
      width: 100px;
      margin-bottom: 10px;
    }
    .card h4 {
      font-size: 1.5rem;
      margin: 10px 0 5px;
    }
    .card p {
      font-size: 0.9rem;
    }
    .buttons, .share-buttons {
      margin-top: 15px;
    }
    .buttons button, .share-buttons button {
      margin: 5px;
      padding: 8px 15px;
      border-radius: 20px;
      background-color: white;
      color: #3498db;
      cursor: pointer;
      border: none;
      font-weight: bold;
      transition: all 0.3s;
    }
    .buttons button:hover, .share-buttons button:hover {
      background-color: #2980b9;
      color: white;
    }
    /* Layout Styles */
    .style1 {
      background: linear-gradient(135deg, #3498db, #8e44ad);
    }
    .style2 {
      background: #f1c40f;
      color: black;
      border-radius: 10px;
    }
    .style3 {
      background: #2ecc71;
      border-radius: 50px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }
    .header {
      width: 100%;
      background: #3498db;
      color: white;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    .header button {
      margin: 0 10px;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      background-color: #2980b9;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }
    .header button:hover {
      background-color: #1c6ea4;
    }
  </style>
</head>
<body>
<div class="header">
<a href="index.php">

<i class="fa fa-arrow-circle-left"aria-hidden="true" ></i> Preview
</a>
<div style="text-align: center;">
    <h3>Dynamic E-Visiting Card Generator</h3>
</div>
    <div>
     
    </div>
  </div>

  <div class="form-group">
 

  <div class="container">
  <div class="container-card">
  <input type="text" id="name" placeholder="Enter your name" />
  <br>
    <input type="text" id="contact" placeholder="Contact (e.g., +1 234 567 890)" />
    <br>
    <input type="text" id="address" placeholder="Business Address" />
    <br>
    <label for="profile-picture">Upload Profile Picture:</label>
    <br>
    <input type="file" id="profile-picture" accept="image/*" />
    <br>
    <label for="logo-picture">Upload Logo:</label>
    <br>
    <input type="file" id="logo-picture" accept="image/*" />
    <br>
    <label for="layout-style">Choose Layout Style:</label>
    <br>
    <select id="layout-style">
      <option value="style1">Classic</option>
      <option value="style2">Modern</option>
      <option value="style3">Elegant</option>
    </select>
    <label for="custom-color">Custom Background Color:</label>
    <input type="color" id="custom-color" value="#ffffff">
    <button id="generate-card">Generate Card</button>
  </div>
  </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script>
    const container = document.querySelector('.container');
    const generateButton = document.getElementById('generate-card');
    const nameInput = document.getElementById('name');
    const contactInput = document.getElementById('contact');
    const addressInput = document.getElementById('address');
    const profilePictureInput = document.getElementById('profile-picture');
    const logoPictureInput = document.getElementById('logo-picture');
    const themeColorSelector = document.getElementById('theme-color');
    const layoutSelector = document.getElementById('layout-style');
    const customColorInput = document.getElementById('custom-color');

    generateButton.addEventListener('click', () => {
      const name = nameInput.value || "John Doe";
      const contact = contactInput.value || "+1 234 567 890";
      const address = addressInput.value || "123 Business Street, City";
      const themeColor = customColorInput.value || themeColorSelector.value;
      const layoutStyle = layoutSelector.value;

      const readerProfile = new FileReader();
      const readerLogo = new FileReader();

      readerProfile.onload = (e) => {
        const profilePicURL = e.target.result;
        readerLogo.onload = (eLogo) => {
          const logoPicURL = eLogo.target.result;

          const cardHTML = `
            <div class="card ${layoutStyle}" id="business-card" style="background: ${themeColor}">
              <div class="card-content">
                <div class="logo">
                  <img src="${logoPicURL}" alt="Logo" />
                </div>
                <img src="${profilePicURL}" alt="Profile Picture">
                <h4>${name}</h4>
                <p>${contact}</p>
                <p>${address}</p>
                <div class="buttons">
                  <button onclick="window.location.href='mailto:' + '${contact}'">
                    <i class="fa fa-envelope" aria-hidden="true"></i>Email
                  </button>
                </div>
                <div class="share-buttons">
                  <button id="download-card">
                    <i class="fa fa-download" aria-hidden="true"></i>Download
                  </button>
                  <button id="share-card">
                    <i class="fa fa-share" aria-hidden="true"></i>Share
                  </button>
                </div>
              </div>
            </div>
          `;
          container.innerHTML = cardHTML;

          document.getElementById('download-card').addEventListener('click', () => {
            html2canvas(document.getElementById('business-card')).then(canvas => {
              const link = document.createElement('a');
              link.href = canvas.toDataURL('image/png');
              link.download = 'e-visiting-card.png';
              link.click();
            });
          });

          document.getElementById('share-card').addEventListener('click', () => {
            if (navigator.share) {
              navigator.share({
                title: `${name}'s Business Card`,
                text: `Check out my business card! Contact: ${contact}, Address: ${address}`,
                url: window.location.href
              }).catch(err => console.log('Sharing failed:', err));
            } else {
              alert("Sharing is not supported on this device.");
            }
          });
        };

        if (logoPictureInput.files[0]) {
          readerLogo.readAsDataURL(logoPictureInput.files[0]);
        } else {
          alert("Please upload a logo.");
        }
      };

      if (profilePictureInput.files[0]) {
        readerProfile.readAsDataURL(profilePictureInput.files[0]);
      } else {
        alert("Please upload a profile picture.");
      }
    });
  </script>
</body>
</html>
