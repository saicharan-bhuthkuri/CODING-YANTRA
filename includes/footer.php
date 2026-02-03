<footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>Coding Yantra</h3>
                <p>Empowering the next generation of real innovators through practical, hands-on training in Robotics, AI, and Coding.</p>
                <div style="margin-top: 1rem;">
                    <a href="#" style="color: white; margin-right: 1rem; font-size: 1.2rem;"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#" style="color: white; font-size: 1.2rem;"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="about.php">Our Story</a></li>
                    <li><a href="programs.php">Programs</a></li>
                    <li><a href="student-life.php">Student Life</a></li>
                    <li><a href="careers.php">Careers</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Programs</h3>
                <ul class="footer-links">
                    <li><a href="programs.php">Robotics (LEGO/VEX)</a></li>
                    <li><a href="programs.php">AI & Machine Learning</a></li>
                    <li><a href="programs.php">Coding classes</a></li>
                    <li><a href="programs.php">RPA Training</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Contact Us</h3>
                <ul class="contact-info">
                    <li>
                        <i class="fa-solid fa-location-dot" style="margin-top: 5px; color: var(--accent-color);"></i>
                        <span>H.No 2167/4, Raghavendra Nagar Colony, Venkateswara Colony, Ring Road, Uppal, Hyderabad - 500039</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-clock" style="color: var(--accent-color);"></i>
                        <span>Opens daily at 09:00 AM</span>
                    </li>
                </ul>
                <div style="margin-top: 1rem;">
                    <a href="contact.php" class="btn btn-outline" style="font-size: 0.9rem; padding: 0.5rem 1rem;">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Coding Yantra Learning Solutions. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.innerHTML = navLinks.classList.contains('active') 
            ? '<i class="fa-solid fa-xmark"></i>' 
            : '<i class="fa-solid fa-bars"></i>';
    });
</script>
</body>
</html>
