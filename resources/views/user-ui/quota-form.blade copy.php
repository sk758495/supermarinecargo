<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quote Request - Hold Cleaning</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    body {
      background-color: #f8f9fa;
    }

    .card {
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      border-radius: 1rem;
    }

    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .form-section {
      margin-bottom: 2rem;
    }

    .hold-image-upload {
      margin-bottom: 1rem;
    }

    .section-title {
      font-size: 1.25rem;
      font-weight: bold;
      margin-bottom: 1rem;
      color: #0d6efd;
    }

    label {
      font-weight: 500;
    }

    .logo {
      max-width: 150px;
      margin-bottom: 1rem;
    }

    .map-responsive {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-responsive iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }


    .image-upload-section {
      margin-bottom: 1rem;
    }

    .image-preview {
      margin-top: 1rem;
    }

    .image-preview img {
      width: 100px;
      margin-right: 10px;
      margin-bottom: 10px;
    }
  </style>

</head>
<body>
  <div class="container py-5">
    <div class="card p-4">
      <div class="text-center mb-4">
        <h3 class="text-primary">Quote Request Form</h3>
        <p class="mb-0">For Hold Cleaning Service</p>
        <h4>Vendor: {{ $vendor->name }}</h4>
        <p>Email: {{ $vendor->email }}</p>

      </div>

      <form method="POST" action="{{ route('quota.store', ['vendor_id' => $vendor->id]) }}" enctype="multipart/form-data">
        @csrf <!-- CSRF protection -->
        <div class="form-section">
            <div class="row g-3">
                <div class="col-md-6">
                    <label>Vessel Name</label>
                    <input type="text" class="form-control" name="vessel_name" placeholder="Enter Vessel Name" required>
                </div>
                <div class="col-md-6">
                    <label>Voyage Number</label>
                    <input type="text" class="form-control" name="voyage_number" placeholder="Enter Voyage Number" required>
                </div>
                <div class="col-md-6">
                    <label>IMO Number</label>
                    <input type="text" class="form-control" name="imo_number" placeholder="Enter IMO Number" required>
                </div>
                <div class="col-md-6">
                    <label>ETA</label>
                    <input type="datetime-local" class="form-control" name="eta" required>
                </div>
                <div class="col-md-6">
                    <label>Agents</label>
                    <input type="text" class="form-control" name="agents" placeholder="Enter Agent Name" required>
                </div>
                <div class="col-md-6">
                    <label>Request Type</label>
                    <select class="form-select" name="request_type">
                        <option selected>Hold Cleaning</option>
                    </select>
                </div>
                <div class="col-12">
                    <label>Description of Service Requirement</label>
                    <textarea class="form-control" name="service_description" rows="3" placeholder="Describe the service needed" required></textarea>
                </div>
                <div class="col-12">
                    <label>TOB Cleaning</label>
                    <input type="text" class="form-control" name="tob_cleaning" placeholder="Enter TOB Cleaning Details" required>
                </div>
                <div class="col-12">
                    <label>Equipment Description</label>
                    <textarea class="form-control" name="equipment_description" rows="2" placeholder="Describe the equipment if any" required></textarea>
                </div>
                <div class="col-12">
                    <label>Last 5 Cargo Names</label>
                    <textarea class="form-control" name="last_5_cargo" rows="2" placeholder="List of last 5 cargos" required></textarea>
                </div>
            </div>
        </div>
    
        <!-- Hold Images Upload -->
        <div class="form-section">
            <div class="section-title">Hold Images Upload</div>
    
            <!-- Hold 1 -->
            <div class="image-upload-section">
                <label>Hold 1 - Upload Images (4-5 images)</label>
                <input type="file" class="form-control" name="hold_images[1][]" multiple onchange="previewImages(event, 'preview1')" required>
                <div id="preview1" class="image-preview"></div>
                <div id="preview1Error" class="error-message"></div>
            </div>
    
            <!-- Hold 2 -->
            <div class="image-upload-section">
                <label>Hold 2 - Upload Images (4-5 images)</label>
                <input type="file" class="form-control" name="hold_images[2][]" multiple onchange="previewImages(event, 'preview2')" required>
                <div id="preview2" class="image-preview"></div>
                <div id="preview2Error" class="error-message"></div>
            </div>
    
            <!-- Hold 3 -->
            <div class="image-upload-section">
                <label>Hold 3 - Upload Images (4-5 images)</label>
                <input type="file" class="form-control" name="hold_images[3][]" multiple onchange="previewImages(event, 'preview3')" required>
                <div id="preview3" class="image-preview"></div>
                <div id="preview3Error" class="error-message"></div>
            </div>
    
            <!-- Hold 4 -->
            <div class="image-upload-section">
                <label>Hold 4 - Upload Images (4-5 images)</label>
                <input type="file" class="form-control" name="hold_images[4][]" multiple onchange="previewImages(event, 'preview4')" required>
                <div id="preview4" class="image-preview"></div>
                <div id="preview4Error" class="error-message"></div>
            </div>
    
            <!-- Hold 5 -->
            <div class="image-upload-section">
                <label>Hold 5 - Upload Images (4-5 images)</label>
                <input type="file" class="form-control" name="hold_images[5][]" multiple onchange="previewImages(event, 'preview5')" required>
                <div id="preview5" class="image-preview"></div>
                <div id="preview5Error" class="error-message"></div>
            </div>
        </div>
    
        <!-- Iframe Embed Code Section -->
        <div class="form-section">
            <div class="section-title">Embed Your Iframe Code</div>
            <label>Enter your custom iframe code:</label>
            <textarea class="form-control" name="iframe_code" rows="3" placeholder="<iframe ...></iframe>"></textarea>
        </div>
    
        <!-- Company Details -->
        <div class="form-section">
            <div class="section-title">Company Details</div>
    
            <!-- Company Logo Upload -->
            <div class="image-upload-section">
                <label>Upload Company Logo</label>
                <input type="file" class="form-control" name="company_logo" accept="image/*" onchange="previewLogo(event)">
                <div id="logoPreview" class="logo-preview"></div>                
            </div>
    
            <div class="row g-3">
                <div class="col-md-6">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="company_name" placeholder="Techno Web 4 Design" required>
                </div>
                <div class="col-md-6">
                    <label>Company Address</label>
                    <input type="text" class="form-control" name="company_address" placeholder="Enter company address" required>
                </div>
                <div class="col-md-6">
                    <label>Form Filler Name</label>
                    <input type="text" class="form-control" name="form_filler_name" placeholder="Enter your name" required>
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter your name" required>
              </div>
                <div class="col-md-6">
                    <label>Mobile</label>
                    <input type="tel" class="form-control" name="mobile" placeholder="Enter mobile number" required>
                </div>
            </div>
        </div>
    
        <!-- Submit -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5 py-2">Submit Request</button>
        </div>
    </form>
    
    </div>
  </div>
<!-- multiple image preview code -->
<script>
  function previewImages(event, previewId) {
  const files = event.target.files;
  const previewContainer = document.getElementById(previewId);
  const errorContainer = document.getElementById(previewId + 'Error'); // Error message container
  errorContainer.innerHTML = '';  // Clear previous error messages

  let validFiles = [];
  let errorMessages = [];

  // Loop through all the selected files and validate them
  for (let i = 0; i < files.length; i++) {
    const file = files[i];

    // Validate file size (maximum 500KB)
    if (file.size > 500 * 1024) {
      errorMessages.push('File ' + file.name + ' is too large. Maximum size is 500KB.');
    } else {
      validFiles.push(file);

      // Preview the image
      const reader = new FileReader();
      reader.onload = function (e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.style.width = '100px'; // Adjust the image size
        img.style.marginRight = '10px';
        img.style.marginBottom = '10px';

        // Create the "X" remove link
        const removeLink = document.createElement('span');
        removeLink.textContent = 'X';
        removeLink.style.color = 'red';
        removeLink.style.fontSize = '16px';
        removeLink.style.cursor = 'pointer';
        removeLink.style.position = 'absolute';
        removeLink.style.top = '0';
        removeLink.style.right = '0';
        removeLink.style.padding = '5px';
        removeLink.style.backgroundColor = 'rgba(255, 255, 255, 0.7)';
        removeLink.style.borderRadius = '50%';

        // Wrap the image and remove link in a container to position them
        const imageWrapper = document.createElement('div');
        imageWrapper.style.position = 'relative';
        imageWrapper.style.display = 'inline-block';

        // Append the image and remove link to the container
        imageWrapper.appendChild(img);
        imageWrapper.appendChild(removeLink);
        previewContainer.appendChild(imageWrapper);

        // When the remove link (X) is clicked, remove the image and the "X"
        removeLink.addEventListener('click', function () {
          previewContainer.removeChild(imageWrapper); // Remove the image and the "X"
          const fileIndex = validFiles.indexOf(file); // Find the index of the file
          if (fileIndex > -1) {
            validFiles.splice(fileIndex, 1); // Remove the file from the valid files array
          }
        });
      };

      reader.readAsDataURL(file); // Read the file as a data URL (base64 encoded)
    }
  }

  // Show error messages if any
  if (errorMessages.length > 0) {
    errorMessages.forEach(function(message) {
      const errorDiv = document.createElement('div');
      errorDiv.classList.add('alert', 'alert-danger');
      errorDiv.innerText = message;
      errorContainer.appendChild(errorDiv);
    });
  }

  // If there are less than 5 valid images, show an error message
  if (validFiles.length < 5) {
    const errorDiv = document.createElement('div');
    errorDiv.classList.add('alert', 'alert-danger');
    errorDiv.innerText = 'You must upload at least 5 images.';
    errorContainer.appendChild(errorDiv);
  }

  // Set the valid files back to the input if needed, else prevent form submission
  event.target.files = validFiles.length >= 5 ? validFiles : []; // Only allow valid files
}

</script>


  <script>
    function previewLogo(event) {
      const file = event.target.files[0]; // Get the selected file
      const previewContainer = document.getElementById('logoPreview');
      previewContainer.innerHTML = ''; // Clear any previous preview

      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          const img = document.createElement('img'); // Create an <img> element
          img.src = e.target.result; // Set the src to the file data
          img.classList.add('logo'); // Add a class for styling
          previewContainer.appendChild(img); // Add the logo to the preview container
        };

        reader.readAsDataURL(file); // Read the file as a data URL (base64 encoded)
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
