<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services | Fitness</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsible.css">

    <style>
        body { background: #000; color: #fff; font-family: Arial; }

        .service-page-container {
            max-width: 1100px;
            margin: 100px auto;
            padding: 20px;
        }

        .service-title {
            font-size: 3rem;
            color: #e6533c;
            margin-bottom: 20px;
            text-align: center;
        }

        .service-subtitle {
            text-align: center;
            color: #bbb;
            margin-bottom: 50px;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .service-card {
            background: #111;
            border-radius: 15px;
            padding: 20px;
            border: 1px solid #333;
            transition: 0.3s ease;
        }

        .service-card:hover {
            transform: scale(1.02);
            border-color: #e6533c;
        }

        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .service-card h2 {
            margin-bottom: 10px;
            color: #fff;
        }

        .service-card p {
            color: #bbb;
            line-height: 1.5rem;
        }

        @media (max-width: 768px) {
            .service-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<header>
    <section>
        <nav class="display-flex Nevigation-bar">
            <div><h3 class="Nav-logo-Name">Fitness</h3></div>

            <ul class="display-flex Nav-link">
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php" class="active-link">Service</a></li>
                
            </ul>
        </nav>
    </section>
</header>

<div class="service-page-container">
    <h1 class="service-title">Our Services</h1>
    <p class="service-subtitle">Explore the premium features we offer</p>

    <div class="service-grid">

        <div class="service-card">
            <img src="images/run.jpg">
            <h2>Personal Training</h2>
            <p>1-on-1 personalized training programs tailored to your fitness goals.</p>
        </div>

        <div class="service-card">
            <img src="images/runCrp.jpg">
            <h2>Nutrition Plans</h2>
            <p>Custom meal plans designed by certified nutritionists.</p>
        </div>

        <div class="service-card">
            <img src="images/runCrp.jpg">
            <h2>BMI & Health Tracking</h2>
            <p>Track your progress with smart health monitoring tools.</p>
        </div>

        <div class="service-card">
            <img src="images/runCrp.jpg">
            <h2>Group Classes</h2>
            <p>Fun and energetic fitness classes to keep you motivated.</p>
        </div>

    </div>
</div>

</body>
</html>
