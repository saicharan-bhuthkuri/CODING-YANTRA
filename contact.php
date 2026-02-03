<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="contact-header">
    <div class="container text-center">
        <span class="chat-badge"><i class="fa-regular fa-comments"></i> Let's Talk</span>
        <h1>Contact Us</h1>
        <p>Have questions? We'd love to hear from you.</p>
    </div>
</section>

<!-- Contact Cards Row -->
<section class="contact-cards-section">
    <div class="container">
        <div class="cards-grid">
            <!-- Visit -->
            <div class="contact-card">
                <div class="icon-wrapper color-1">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <h3>Visit Us</h3>
                <p>H.No 2167/4, Raghavendra Nagar, Hyderabad, TS - 500039</p>
            </div>
            
            <!-- Call -->
            <div class="contact-card">
                <div class="icon-wrapper color-2">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <h3>Call Us</h3>
                <p>+91 98765 43210</p>
                <p class="sub-text">Mon-Sat: 9am - 7pm</p>
            </div>

            <!-- Email -->
            <div class="contact-card">
                <div class="icon-wrapper color-3">
                    <i class="fa-solid fa-paper-plane"></i>
                </div>
                <h3>Email Us</h3>
                <p>info@codingyantra.com</p>
                <p class="sub-text">admissions@codingyantra.com</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Interaction Section -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="interaction-grid">
            <!-- Form Column -->
            <div class="form-col">
                <div class="form-container shadow-card">
                    <div class="form-header">
                        <h2>Send a Message</h2>
                        <p>We usually respond within 24 hours.</p>
                    </div>
                    
                    <form>
                        <div class="row-input">
                            <div class="input-group">
                                <label>Your Name</label>
                                <div class="input-field">
                                    <i class="fa-regular fa-user"></i>
                                    <input type="text" placeholder="John Doe">
                                </div>
                            </div>
                            <div class="input-group">
                                <label>Phone</label>
                                <div class="input-field">
                                    <i class="fa-solid fa-phone"></i>
                                    <input type="tel" placeholder="+91">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Email Address</label>
                            <div class="input-field">
                                <i class="fa-regular fa-envelope"></i>
                                <input type="email" placeholder="john@example.com">
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Interested In</label>
                            <div class="input-field">
                                <i class="fa-solid fa-list-check"></i>
                                <select>
                                    <option>Free Trial Class</option>
                                    <option>Admission Enquiry</option>
                                    <option>School Partnership</option>
                                    <option>Internship / Job</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Message</label>
                            <div class="input-field align-top">
                                <i class="fa-regular fa-comment-dots"></i>
                                <textarea rows="4" placeholder="Tell us how we can help..."></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn-send">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Map & Social Column -->
            <div class="info-col">
                <!-- Map Card -->
                <div class="map-card shadow-card">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15224.99684703698!2d78.548!3d17.400!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMTdswrAyNCc1My4wIk4gNjjCsDMzJzAxLjgiRQ!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" 
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="map-actions">
                        <a href="https://goo.gl/maps/placeholder" target="_blank" class="btn-map">
                            <i class="fa-solid fa-directions"></i> Get Directions
                        </a>
                    </div>
                </div>

                <!-- Connect Card -->
                <div class="connect-card shadow-card">
                    <h3>Follow Our Journey</h3>
                    <div class="social-row">
                        <a href="https://www.linkedin.com/in/praveen-ollala" class="soc-btn linkedin"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="soc-btn instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="soc-btn facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="soc-btn youtube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* CSS Reset */
.bg-light { background-color: #f8fafc; }
.shadow-card { background: white; border-radius: 1.5rem; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05); border: 1px solid #f1f5f9; }

/* Hero */
.contact-header {
    background: #0f172a;
    padding: 5rem 0 8rem; /* Large padding bottom for overlap */
    color: white;
    position: relative;
    background-image: radial-gradient(#334155 1px, transparent 1px);
    background-size: 30px 30px;
}

.chat-badge {
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    padding: 0.4rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
    display: inline-block;
}

.contact-header h1 { font-size: 3rem; margin-bottom: 0.5rem; }
.contact-header p { color: #94a3b8; font-size: 1.2rem; }

/* Contact Cards (Floating) */
.contact-cards-section {
    position: relative;
    top: -4rem;
    margin-bottom: -2rem;
}

.cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.contact-card {
    background: white;
    padding: 2.5rem;
    border-radius: 1.5rem;
    text-align: center;
    box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.contact-card:hover { transform: translateY(-10px); }

.icon-wrapper {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin: 0 auto 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
    color: white;
    box-shadow: 0 10px 15px -3px rgba(0,0,0,0.2);
}

.color-1 { background: linear-gradient(135deg, #f59e0b, #d97706); }
.color-2 { background: linear-gradient(135deg, #3b82f6, #2563eb); }
.color-3 { background: linear-gradient(135deg, #10b981, #059669); }

.contact-card h3 { margin-bottom: 0.75rem; font-size: 1.25rem; }
.contact-card p { color: #64748b; font-size: 0.95rem; line-height: 1.5; }
.sub-text { opacity: 0.8; font-size: 0.9rem; }

/* Interaction Grid */
.interaction-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 3rem;
    padding-top: 2rem;
}

/* Form Styles */
.form-container { padding: 3rem; }
.form-header { margin-bottom: 2rem; }
.form-header h2 { font-size: 1.75rem; color: #1e293b; margin-bottom: 0.25rem; }

.row-input { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem; }
.input-group { margin-bottom: 1.5rem; }
.input-group label { display: block; font-weight: 600; font-size: 0.9rem; margin-bottom: 0.5rem; color: #334155; }

.input-field {
    position: relative;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    transition: all 0.2s;
}

.input-field:focus-within {
    background: white;
    border-color: #f59e0b;
    box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.1);
}

.input-field i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
}

.input-field.align-top i { top: 1.2rem; transform: none; }

.input-field input,
.input-field select,
.input-field textarea {
    width: 100%;
    padding: 0.8rem 1rem 0.8rem 3rem;
    border: none;
    background: transparent;
    font-size: 1rem;
    color: #1e293b;
    font-family: inherit;
    outline: none;
}

.btn-send {
    width: 100%;
    background: #0f172a;
    color: white;
    padding: 1rem;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s;
    border: none;
}

.btn-send:hover { background: #1e293b; transform: translateY(-2px); box-shadow: 0 4px 10px rgba(0,0,0,0.1); }

/* Map & Social */
.map-card { overflow: hidden; margin-bottom: 2rem; }
.map-actions { padding: 1rem; text-align: center; border-top: 1px solid #f1f5f9; }
.btn-map { color: #3b82f6; font-weight: 600; font-size: 0.95rem; }
.btn-map:hover { text-decoration: underline; }

.connect-card { padding: 2rem; text-align: center; }
.connect-card h3 { font-size: 1.25rem; margin-bottom: 1.5rem; }

.social-row { display: flex; justify-content: center; gap: 1rem; }
.soc-btn {
    width: 50px; height: 50px;
    background: #f1f5f9;
    font-size: 1.25rem;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    color: #475569;
    transition: all 0.2s;
}

.soc-btn:hover { color: white; transform: rotate(5deg) scale(1.1); }
.linkedin:hover { background: #0077b5; }
.instagram:hover { background: #e4405f; }
.facebook:hover { background: #1877f2; }
.youtube:hover { background: #ff0000; }

@media (max-width: 900px) {
    .cards-grid { grid-template-columns: 1fr; }
    .interaction-grid { grid-template-columns: 1fr; }
}
</style>

<?php include 'includes/footer.php'; ?>
