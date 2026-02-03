<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Join Our Team</h1>
        <p>Build your career with Hyderabad's leading EdTech innovator.</p>
    </div>
</section>

<!-- Why Join Us -->
<section class="section-padding">
    <div class="container text-center">
        <h2 class="section-title">Why Work at Coding Yantra?</h2>
        <div class="benefits-grid">
            <div class="benefit-item">
                <i class="fa-solid fa-chart-line"></i>
                <h3>Growth</h3>
                <p>Work with cutting-edge tech like ROS 2, AI, and RPA.</p>
            </div>
            <div class="benefit-item">
                <i class="fa-solid fa-users"></i>
                <h3>Impact</h3>
                <p>Directly influence the next generation of engineers.</p>
            </div>
            <div class="benefit-item">
                <i class="fa-solid fa-certificate"></i>
                <h3>Certification</h3>
                <p>Get certified by Carnegie Mellon Robotics Academy.</p>
            </div>
        </div>
    </div>
</section>

<!-- Current Openings -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container">
        <h2 class="section-title">Current Openings</h2>
        
        <div class="job-list">
            <!-- Job 1 -->
            <div class="job-card">
                <div class="job-info">
                    <h3>STEM Trainer (Robotics & AI)</h3>
                    <span class="job-type">Full-time</span>
                    <span class="job-loc"><i class="fa-solid fa-location-dot"></i> Uppal, Hyderabad</span>
                </div>
                <div class="job-desc">
                    <p>We are looking for passionate engineers to train students in LEGO Robotics, Python, and C++. Must have good communication skills and a passion for teaching.</p>
                </div>
                <a href="contact.php?subject=Job Application - STEM Trainer" class="btn btn-outline" style="font-size: 0.9rem;">Apply Now</a>
            </div>

            <!-- Job 2 -->
            <div class="job-card">
                <div class="job-info">
                    <h3>Business Development Associate</h3>
                    <span class="job-type">Part-time / Full-time</span>
                    <span class="job-loc"><i class="fa-solid fa-location-dot"></i> Uppal, Hyderabad</span>
                </div>
                <div class="job-desc">
                    <p>Drive partnerships with schools and colleges. Help us expand our reach to more institutions across Telangana.</p>
                </div>
                <a href="contact.php?subject=Job Application - BDA" class="btn btn-outline" style="font-size: 0.9rem;">Apply Now</a>
            </div>

            <!-- Internship -->
            <div class="job-card featured">
                <div class="job-info">
                    <h3>Robotics Intern</h3>
                    <span class="job-type">Internship</span>
                    <span class="job-loc"><i class="fa-solid fa-location-dot"></i> On-site</span>
                </div>
                <div class="job-desc">
                    <p>Perfect for B.E./B.Tech students. Gain hands-on experience with commercial projects and classroom management.</p>
                </div>
                <a href="contact.php?subject=Internship Application" class="btn btn-primary" style="font-size: 0.9rem;">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<style>
.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 3rem;
    margin-top: 3rem;
}

.benefit-item i {
    font-size: 2.5rem;
    color: var(--accent-color);
    margin-bottom: 1rem;
}

.job-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    max-width: 900px;
    margin: 0 auto;
}

.job-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: var(--shadow-sm);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 2rem;
    border: 1px solid #e2e8f0;
}

.job-card.featured {
    border: 2px solid var(--accent-color);
    background: #fffbeb;
}

.job-info h3 {
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
}

.job-type {
    background: #e0f2fe;
    color: #0369a1;
    padding: 0.2rem 0.6rem;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-right: 0.5rem;
}

.job-loc {
    color: var(--text-gray);
    font-size: 0.9rem;
}

.job-desc {
    flex: 1;
    color: var(--text-dark);
}

@media (max-width: 768px) {
    .job-card {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
