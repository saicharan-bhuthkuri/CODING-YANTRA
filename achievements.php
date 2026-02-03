<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Achievements & Hall of Fame</h1>
        <p>Celebrating National & Global Recognition.</p>
    </div>
</section>

<!-- RoboFest 2026 Spotlight -->
<section class="section-padding">
    <div class="container">
        <div class="robofest-spotlight">
            <div class="spotlight-content">
                <span class="spotlight-badge">Major Milestone</span>
                <h2>RoboFest 2026 Bangalore Nationals</h2>
                <p>A historic moment for Coding Yantra Learning Solutions.</p>
                <div class="achievement-highlight">
                    <i class="fa-solid fa-trophy text-accent" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                    <h3>"Clean Sweep"</h3>
                    <p>Our students bagged <strong>all three top prizes</strong> in the Exhibition Category.</p>
                </div>
            </div>
            <div class="spotlight-image">
                <!-- Placeholder for team winning -->
                <div style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); width: 100%; height: 350px; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white;">
                    <div class="text-center">
                        <i class="fa-solid fa-users-viewfinder" style="font-size: 4rem; opacity: 0.5;"></i>
                        <p style="margin-top: 1rem;">Winning Team Photo Placeholder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Spotlight: Hunterix -->
<section class="section-padding" style="background: #f8fafc;">
    <div class="container">
        <h2 class="section-title text-center">Project Spotlight: "Hunterix"</h2>
        <div class="project-card-featured">
            <div class="project-details">
                <h3>Smart Shoe for Disabled Persons</h3>
                <p>Built on the Arduino platform and programmed in C#, this innovative project helps visually impaired individuals navigate their environment safely.</p>
                <ul class="project-meta">
                    <li><i class="fa-solid fa-microchip"></i> <strong>Platform:</strong> Arduino (C#)</li>
                    <li><i class="fa-solid fa-user-tie"></i> <strong>Coach:</strong> Harsha G M</li>
                    <li><i class="fa-solid fa-award"></i> <strong>Status:</strong> National Winner</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Student Success Stories -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title text-center">Student Success Stories</h2>
        <div class="stories-grid">
            <!-- Story 1 -->
            <div class="story-card">
                <div class="story-img">
                    <i class="fa-solid fa-user-graduate"></i>
                </div>
                <h3>Alia Chambers</h3>
                <p class="story-location">Jamaica</p>
                <p class="story-desc">Completed over <strong>60 projects in 6 months</strong> to become a coding champion.</p>
            </div>

            <!-- Story 2 -->
            <div class="story-card">
                <div class="story-img">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>
                <h3>Adya</h3>
                <p class="story-location">Grade 6</p>
                <p class="story-desc">Published a custom game app to the <strong>Google Play Store</strong>.</p>
            </div>

            <!-- Story 3 -->
            <div class="story-card">
                <div class="story-img">
                    <i class="fa-solid fa-earth-americas"></i>
                </div>
                <h3>Muhammad Hamza</h3>
                <p class="story-location">HP Codewars Winner</p>
                <p class="story-desc">Rank winner for his "Deep Blue Sea" environmental awareness project.</p>
            </div>
        </div>
    </div>
</section>

<style>
/* RoboFest Spotlight */
.robofest-spotlight {
    display: flex;
    align-items: center;
    gap: 3rem;
    background: white;
    padding: 3rem;
    border-radius: 2rem;
    box-shadow: var(--shadow-lg);
    border: 1px solid #e2e8f0;
}

.spotlight-badge {
    background: #fef3c7;
    color: #d97706;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 700;
    text-transform: uppercase;
}

.spotlight-content h2 { margin-top: 0.5rem; }

.achievement-highlight {
    margin-top: 2rem;
    padding: 1.5rem;
    background: #f8fafc;
    border-radius: 1rem;
    text-align: center;
    border: 2px dashed var(--accent-color);
}

/* Project Spotlight */
.project-card-featured {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    padding: 3rem;
    border-radius: 1.5rem;
    box-shadow: var(--shadow-md);
    text-align: center;
}

.project-meta {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
    list-style: none;
}

.project-meta li {
    background: #f1f5f9;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    font-size: 0.9rem;
}

/* Stories Grid */
.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.story-card {
    background: white;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: var(--shadow-sm);
    text-align: center;
    border-top: 4px solid var(--primary-color);
}

.story-img {
    width: 60px;
    height: 60px;
    background: #e0f2fe;
    color: var(--primary-color);
    border-radius: 50%;
    margin: 0 auto 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.story-location {
    color: var(--text-gray);
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

@media (max-width: 768px) {
    .robofest-spotlight {
        flex-direction: column;
        padding: 2rem;
    }
    
    .project-meta {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
