<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

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
 