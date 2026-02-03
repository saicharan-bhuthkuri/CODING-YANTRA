<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Institutional & Career Services</h1>
        <p>Partnering with Schools and Colleges to Build Future Tech Leaders.</p>
    </div>
</section>

<!-- Schools & Colleges -->
<section class="section-padding">
    <div class="container">
        <div class="service-row">
            <div class="service-content">
                <div class="service-icon"><i class="fa-solid fa-school"></i></div>
                <h2>School Support</h2>
                <p class="service-text">We partner with School Parent-Teacher Organizations (PTOs) to provide custom-tailored after-school enrichment programs. Our curriculum integrates seamlessly with the existing academic framework to provide hands-on STEM education.</p>
                <ul class="check-list mt-4">
                    <li>Customized Curriculum for Grades K-12</li>
                    <li>On-site Robotics Labs</li>
                    <li>Teacher Training Workshops</li>
                </ul>
            </div>
            <div class="service-img-placeholder" style="background: #e2e8f0; border-radius: 1rem;">
                <!-- Placeholder Image -->
                <i class="fa-solid fa-chalkboard-user" style="font-size: 5rem; color: white;"></i>
            </div>
        </div>

        <div class="service-row reverse">
            <div class="service-content">
                <div class="service-icon"><i class="fa-solid fa-building-columns"></i></div>
                <h2>College Partners</h2>
                <p class="service-text">We assist colleges in achieving top performance in national competitions like the <strong>ATL (Atal Tinkering Labs) Enhancement Championship</strong>. Our technical consultants work alongside faculty to elevate the standard of student projects.</p>
                <ul class="check-list mt-4">
                    <li>ATL Lab Setup & Enhancement</li>
                    <li>Competition Mentorship</li>
                    <li>Advanced Embedded Systems Workshops</li>
                </ul>
            </div>
            <div class="service-img-placeholder" style="background: #e2e8f0; border-radius: 1rem;">
                <!-- Placeholder Image -->
                <i class="fa-solid fa-flask" style="font-size: 5rem; color: white;"></i>
            </div>
        </div>
    </div>
</section>

<!-- Internship Program -->
<section class="section-padding bg-dark text-white" style="background: var(--primary-color);">
    <div class="container text-center">
        <h2 style="color: white; margin-bottom: 3rem;">Robotics Internship Program</h2>
        
        <div class="internship-card">
            <div class="intern-badge">Now Hiring</div>
            <h3>Real-World Project Exposure</h3>
            <p style="color: #cbd5e1; max-width: 600px; margin: 1rem auto;">
                Our internship program focuses on transforming theoretical knowledge into practical skills. Interns work on live projects, gaining experience that is directly applicable to the industry.
            </p>
            
            <div class="intern-spotlight" style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 1rem; margin: 2rem auto; max-width: 500px;">
                <h4 style="color: var(--accent-color); margin-bottom: 0.5rem;">Intern Spotlight: Bangari Sri Charan</h4>
                <p style="font-size: 0.9rem;">Active participant in official business operations and expense management, gaining insights into both the technical and business sides of EdTech.</p>
            </div>

            <a href="careers.php" class="btn btn-primary">Apply for Internship</a>
        </div>
    </div>
</section>

<style>
.service-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    margin-bottom: 5rem;
}

.service-row.reverse {
    direction: rtl; /* Quick hack for swapping cols, needs text-align reset */
}

.service-row.reverse .service-content {
    direction: ltr;
    text-align: left;
}

.service-icon {
    width: 60px;
    height: 60px;
    background: var(--accent-color);
    color: white;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 1.5rem;
}

.service-img-placeholder {
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--gradient-main) !important;
}

.mt-4 { margin-top: 1.5rem; }

@media (max-width: 768px) {
    .service-row {
        grid-template-columns: 1fr;
        gap: 2rem;
        direction: ltr !important;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
