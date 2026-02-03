<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch for admissions, partnerships, or free trials.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-details">
                <div class="info-card">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <h3>Visit Us</h3>
                        <p>H.No 2167/4, Raghavendra Nagar Colony,<br>Venkateswara Colony, Ring Road,<br>Uppal, Hyderabad, Telangana - 500039</p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-clock"></i>
                    <div>
                        <h3>Opening Hours</h3>
                        <p>Daily: 09:00 AM - 07:00 PM</p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <h3>Email & Phone</h3>
                        <p>info@codingyantra.com</p>
                        <p>+91 98765 43210</p> <!-- Placeholder number -->
                    </div>
                </div>

                <div class="social-connect">
                    <h3>Connect With Us</h3>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/in/praveen-ollala" target="_blank" title="Founder Profile"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-container">
                <h2>Send Us a Message</h2>
                <form class="contact-form">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <select>
                            <option>Free Trial Class</option>
                            <option>Admission Enquiry</option>
                            <option>School Partnership</option>
                            <option>Job Application</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="5" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map (Placeholder for now) -->
<section style="height: 400px; background: #e2e8f0; display: flex; align-items: center; justify-content: center;">
    <p class="text-gray-500"><i class="fa-solid fa-map-location-dot"></i> Google Maps Integration Placeholder</p>
</section>

<style>
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 4rem;
}

.info-card {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.info-card i {
    width: 50px;
    height: 50px;
    background: #f1f5f9;
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.info-card h3 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.social-icons {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-icons a {
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.social-icons a:hover {
    background: var(--accent-color);
}

.contact-form-container {
    background: white;
    padding: 3rem;
    border-radius: 1.5rem;
    box-shadow: var(--shadow-lg);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: var(--text-dark);
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-family: inherit;
    font-size: 1rem;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--accent-color);
    box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
