 <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.9/css/intlTelInput.css" />
</head>
 
 <?php include 'includes/config.php';

// Connection file 
$successMsg = "";
$errorMsg = "";

if (isset($_POST['submit'])) {

    // Form data receive karo
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name  = $conn->real_escape_string($_POST['last_name']);
    $email      = $conn->real_escape_string($_POST['email']);
    $phone      = $conn->real_escape_string($_POST['phone'] ?? '');
    $company    = $conn->real_escape_string($_POST['company'] ?? '');
    $budget     = $conn->real_escape_string($_POST['budget'] ?? '');
    $message    = $conn->real_escape_string($_POST['message']);

    // Checkbox (services[]) ko comma separated string me convert karo
    $services = isset($_POST['services']) ? implode(", ", $_POST['services']) : '';

    // Current date & time (jab query submit ho tab ka)
    $created_at = date('Y-m-d H:i:s');

    // Insert query
    $sql = "INSERT INTO contact_submissions 
            (first_name, last_name, email, phone, company, budget, services, message, created_at) 
            VALUES 
            ('$first_name', '$last_name', '$email', '$phone', '$company', '$budget', '$services', '$message', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        $successMsg = "Your form has been submitted successfully.";
    } else {
          $errorMsg = "Something went wrong. Please try again.";
    }

    $conn->close();
}
?>
 

 <div class="col-lg-7" data-aos="fade-right">
          <div class="contact-form-wrap">
            <div class="section-tag">Send a Message</div>
            <h2 class="section-title mb-2">Start the Conversation</h2>
            <p class="section-subtitle mb-4">Fill in the form and one of our senior engineers will review your project
              and respond personally &mdash; not a template, not a bot.</p>

            <form  action="" method="POST">
              <div class="row g-4">
                <div class="col-sm-6">
                  <label class="contact-form-label" for="contact-fname">First Name *</label>
                  <input type="text" id="contact-fname" name="first_name" class="contact-form-input" placeholder="Name" required />
                </div>
                <div class="col-sm-6">
                  <label class="contact-form-label" for="contact-lname">Last Name *</label>
                  <input type="text" id="contact-lname" name="last_name" class="contact-form-input" placeholder="Last Name" required />
                </div>
                <div class="col-sm-6">
                  <label class="contact-form-label" for="contact-email">Work Email *</label>
                  <input type="email" id="contact-email" name="email" class="contact-form-input" placeholder="info@company.com"
                    required />
                </div>
                <div class="col-sm-6">
                  <label class="contact-form-label" for="contact-phone">Phone</label>
<input type="tel" id="contact-phone" name="phone" class="contact-form-input" placeholder="+1 (415) 000-0000" />
                </div>
                <div class="col-sm-6">
                  <label class="contact-form-label" for="contact-company">Company</label>
                  <input type="text" id="contact-company" name="company" class="contact-form-input" placeholder="Your Company" />
                </div>
                <div class="col-sm-6">
                  <label class="contact-form-label" for="contact-budget">Budget Range</label>
                  <select id="contact-budget" name="budget" class="contact-form-input contact-form-select">
                    <option value="">Select a range&hellip;</option>
                    <option value="under-3k">Under $3000</option>
                    <option value="2k-5k">$2,500 &ndash; $5,000</option>
                    <option value="3k-4k">$3,000 &ndash; $4,500</option>
                    <option value="custom">Custom</option>
                    <option value="not-sure">Not sure yet</option>
                  </select> 
</div>
                <div class="col-12">
                  <label class="contact-form-label" id="services-label">Service(s) Needed</label>
                  <div class="contact-checkbox-grid">
                    <label class="contact-checkbox-item"><input type="checkbox" name="services[]" value="web-dev" /><span>Web  Development</span></label>
                    <label class="contact-checkbox-item"><input type="checkbox" name="services[]" value="Digital-Marketing" /><span>Digital Marketing
                        </span></label>
                    <label class="contact-checkbox-item"><input type="checkbox" name="services[]" value="Affiliate Marketing" /><span>Affiliate Marketing</span></label>
                    <label class="contact-checkbox-item"><input type="checkbox" name="services[]" value="Performance Marketing" /><span>Performance Marketing</span></label>
                    <label class="contact-checkbox-item"><input type="checkbox" name="services[]" value="Graphic-Design" /><span>Graphic Design
                        </span></label>
                    <label class="contact-checkbox-item"><input type="checkbox" name="services[]"
                        value="Hosting-Server" /><span>Hosting & Server</span></label>
                  </div>
                </div>
                <div class="col-12">
                  <label class="contact-form-label" for="contact-message">Tell us about your project *</label>
                  <textarea id="contact-message" name="message" class="contact-form-input contact-form-textarea" rows="6"
                    placeholder="Share your goals, timeline, technical constraints, or anything else relevant&hellip;"
                    required></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" name="submit" class="btn-primary-custom">Send Message <i
                      class="fa-solid fa-arrow-right"></i></button>
                  
                </div>
              </div>
              <!-- Messages -->
             <?php if ($successMsg): ?>
               <p style="color:green; margin-top:10px; font-weight:bold;">
              <?= $successMsg ?>
                   </p>
                 <?php endif; ?>

                <?php if ($errorMsg): ?>
             <p style="color:red; margin-top:10px; font-weight:bold;">
               <?= $errorMsg ?>
              </p>
               <?php endif; ?>
            </form>
          </div>
        </div>
                </div>
                 <!-- Sabse pehle library load ho -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.9/js/intlTelInputWithUtils.min.js"></script>

<!-- Uske baad apna init code -->
<script>
  const phoneInput = document.querySelector("#contact-phone");
  const iti = window.intlTelInput(phoneInput, {
    initialCountry: "in",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.9/js/utils.js"
  });
</script>
             </bodY>