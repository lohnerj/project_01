<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo "Joshua Lohner's Resume"; ?></title>
    <!-- http://localhost/01/JOSHUA_LOHNER.php -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
					<img class="picture" src=<?php echo "./assets/images/profile.jpg" ?> alt="">
						
						
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo "Joshua Lohner"; ?></h1>
								<?php echo "Software Engineer"; ?>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo "lohnerjosh@gmail.com" ?></a></li>
									<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo "lohnerj1@mymail.nku.edu" ?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo "859 739 1939" ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-con=tainer text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo "https://www.linkedin.com/in/josh-lohner-900487230/" ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo "https://github.com/JoshLohner" ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo "lohnerj.github.io" ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo "Applied Software Engineering student with programming experience in several languages seeking an internship in the Cincinnati area. Proficient in software development, databases, and full-stack application development" ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Steam Cook"; ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "Skyline" ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "2022 - Present" ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "Fast paced, team based collaboration in order to accurately make the food for customers"; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements:</h4>
										    <p><?php echo "Table lead"; ?></p>
										    <ul>
											    <li><?php echo "Good communication." ?></li>
											    <li><?php echo "Fast paced" ?></li>
											    <li><?php echo "Teamwork" ?></li>
										    </ul>
										    
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo "Group Project Team Lead" ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo "Northern Kentucky University" ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo "2022-2023" ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo "Created organizational documents, ran tests, scheduled meetings for fellow group members in one of Professor Cho's classes" ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Achievements</h4>
										    <p><?php echo "Delivered quality code, presentation, and tests within the given deadline" ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Github" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Javascript" ?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo "Databases" ?></span></li>
											    
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "Java" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "JavaScript" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "Python" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "MySQL" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo "HTML/CSS" ?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 96%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Github" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "OOP" ?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo "Microsoft Excel" ?></span></li>
							            
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo "BSc in Applied Software Engineering" ?></div>
								        <div class="resume-degree-org"><?php echo "Northern Kentucky University" ?></div>
								        <div class="resume-degree-time"><?php echo "2020-2024" ?></div>
								    </li>
								    <li>
								        <div class="resume-degree font-weight-bold"><?php echo "Highschool Diploma" ?></div>
								        <div class="resume-degree-org"><?php echo "Highlands Highschool" ?></div>
								        <div class="resume-degree-time"><?php echo "2016-2020" ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo "Soon" ?></div>
								        <div class="resume-award-desc"><?php echo "Very presitgious" ?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo "Scholars List" ?></div>
								        <div class="resume-award-desc"><?php echo "Having over a 3.0 GPA for some amount of semesters" ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo "English" ?></span> <small class="text-muted font-weight-normal"><?php echo "(Native)" ?></small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold"><?php echo "German" ?></span> <small class="text-muted font-weight-normal"><?php echo "(Amateur)" ?></small></li>
								    
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?php echo "Volleyball" ?></li>
								    <li class="mb-1"><?php echo "Football" ?></li>
								    <li class="mb-1"><?php echo "TCG" ?></li>
									<li class="mb-1"><?php echo "Developing" ?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
							<img src=<?php echo "./assets/images/weather.jpg" ?> alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "Weather Application" ?></h5>
									<p class="card-text"><?php echo "Group project done in class in order to show the features of a weather application" ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo "https://github.com/lohnerj/ase285group" ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
							<img src=<?php echo "./assets/images/library.jpeg" ?> alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "Library Mangement Application" ?></h5>
									<p class="card-text"><?php echo "In progress way to organize your and your friends own collection of books" ?><</p>
									<a href="btn btn-outline-primary" href="#"><?php echo "https://github.com/lohnerj/LibraryManager" ?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
							
								<img src=<?php echo "./assets/images/resume.jpeg" ?> alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo "Website Resume" ?></h5>
									<p class="card-text"><?php echo "Using my skills in HTML, CSS, and Javascript to design an interesting website with my portfolio/resume on it" ?></p>
									<a href="btn btn-outline-primary" href="#"><?php echo "https://github.com/lohnerj/lohnerj.github.io" ?></a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo "Joshua Lohner" ?></small>
    </footer>

    

</body>
</html> 

