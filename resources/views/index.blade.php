<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmartStart - Young Innovator Program </title>

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css-responsive.css')}}">
    <link rel="icon" href="img/prism.png">
    <link href="https://fonts.googleapis.com/css?family=Kantumruy|Ubuntu&display=swap" rel="stylesheet">

</head>

<body id="opacity">

    <language id="english" >
        <div class="top-nav">
            <nav class="nav-bar">
                <div class="logo-top">
                    <img src="img/logo.png" onclick="changePage('change')">
                </div>
                <div class="nav-list">
                    <div class="nav-item" onclick="changePage('apply')">Apply Now</div>
                    <div class="nav-item" onclick="changePage('faq')">FAQ</div>
                    <div class="nav-item" onclick="changePage('previous-winner')">Previous Winner</div>
                    <div class="nav-item" onclick="changePage('contact-us')">Contact Us</div>
                    <div class="language">
                        <p class="current" onclick="changeLanguage('english')">EN</p>
                        <div class="dropdown">
                            <p class="item" onclick="changeLanguage('khmer')">KH</p>
                        </div>
                    </div>

            </nav>
        </div>

        <page id="change">
            <div class="slide">
                    <div class="move" id="left">
                       <img src="./img/Forward.png" alt="">
                    </div>
                    <div class="move" id="right">
                        <img src="./img/Backward.png" alt="">
                    </div>
                <div class="slider">
                    <div class="slide1">
                        <div class="slide-container">
                         <div class="info">
                             <div class="description">
                                 <div class="title-change call">About smart</div>
                             </div>
                              <div class="text">
                                  <p>SmartStart is a Young Innovator Program to enable young Cambodian university students to launch their own tech startups together with Smart and Impact Hub.
                                      The program will offer a unique learning platform along with mentorship and financial support.</p>
                              </div>
                              <div class="btns">
                                  <div class="btn-start" onclick="left()">Get Start</div>
                                  <div>
                                    <a href="https://www.youtube.com/watch?v=G_jacjlBWHA&feature=youtu.be" target="_blank"  class="watch"><img src="./img/Watch.png" alt="">
                                     <p>Watch Video</p>
                                    </a>
                                  </div>
                              </div>
                         </div>
                         <div class="img">
                             <img src="./img/Home.png" alt="">
                         </div>
                        </div>
                    </div>
                    <div class="slide2">
                        <div class="slide-container">
                                <div class="info">
                                    <div class="num">
                                       <p>1</p>
                                    </div>
                                    <div class="description">
                                        <div class="title-change call">Connect</div>
                                    </div>
                                    <div class="text">
                                        <p>Throughout the program, you will be exposed to Cambodia’s digital startup ecosystem, including experienced mentors, co-working spaces, investors and other technical support.</p>
                                    </div>
                                </div>
                                <div class="img">
                                    <img src="./img/Connect.png" alt="">
                                </div>
                        </div>
                    </div>
                    <div class="slide3">
                        <div class="slide-container">
                            <div class="info">
                                    <div class="num">
                                       <p>2</p>
                                    </div>
                                    <div class="description">
                                        <div class="title-change call">Skills</div>
                                    </div>
                                    <div class="text">
                                        <p>This program consists of business modules taught by experts in the startup sector who have trained and mentored successful startups in Cambodia.
                                            The Technopreneurship Challenge brings the successful teams to another province, a prominent source of tech, creative and business ideas in Cambodia.</p>
                                    </div>
                            </div>
                                <div class="img">
                                    <img src="./img/Skills.png" alt="">
                                </div>
                          </div>

                    </div>
                    <div class="slide4">
                        <div class="slide-container">
                            <div class="info">
                                <div class="num">
                                   <p>3</p>
                                </div>
                                <div class="description">
                                    <div class="title-change call">A headstart in inovation</div>
                                </div>
                                <div class="text">
                                    <p>Participating in the entire program will sharpen your capabilities and kick-start your journey in developing your very own digital innovative idea.
                                        You will also gain access to leading industry knowledge and seed funding to begin your own venture.</p>
                                </div>
                           </div>
                            <div class="img">
                                <img src="./img/Headstart.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index">
                    <div id="0" class="item-ch active-ch"></div>
                    <div id="1" class="item-ch"></div>
                    <div id="2" class="item-ch"></div>
                    <div id="3" class="item-ch"></div>
                </div>
            </div>
           <div class="stake">
               <div class="right-stake">
                   <div class="article">
                       <h3 class="question respon">What is at Stake?</h3>
                       <p class="descript">The 5 winning teams will receive the following:</p>
                   </div>
               </div>
               <div class="left-stake">
                   <div class="information">
                       <div class="item-ch">
                           <img src="./img/Reward.png" alt="">
                           <p>5000 USD</p>
                       </div>
                       <div class="item-ch">
                           <img src="./img/Learning.png" alt="">
                           <p>6-month funded incubator program with Impact Hub.</p>
                       </div>
                       <div class="item-ch">
                           <img src="./img/Singapore.png" alt="">
                           <p>
                            The team with the best business progress after the incubation period will be awarded a
                            fully paid trip to visit the likes of Google, Facebook and Microsoft in Singapore.</p>
                       </div>
                       <div class="txt">
                           <p>In partnership with global co-working space provider Impact Hub Phnom Penh, the winning teams will gain access to not only free space but also to an ecosystem of resources, mentorship, inspiration and collaboration opportunities.

                        </p>
                       </div>
                       <div class="note">
                           <p>Smart is also ready to further invest in your idea after the full SmartStart cycle is complete!</p>
                        </div>
                   </div>
               </div>
           </div>
           <div class="process">
            <div class="right-process">
                <div class="article">
                    <h3 class="question respon">The process</h3>
                </div>
            </div>
            <div class="left-process">
                <div class="info-process">
                    <div class="item-ch">
                        <img src="./img/Creative.png" alt="">
                        <h3 class="heading">Inspire</h3>
                        <p>120 shortlisted students participating in a Hackathon Challenge</p>
                        <button class="btn-learing" id="card1">Learning</button>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Enable.png" alt="">
                        <h3 class="heading" >Enable</h3>
                        <p class="text-resp">Top 60 students working on biz realization via a Technopreneurship Challenge </p>
                        <button class="btn-learing" id="card2">Learn More</button>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Grow.png" alt="">
                        <h3 class="heading" >Grow</h3>
                        <p>
                            Up to 5 teams incubating and accelerating their projects for 6 months</p>
                            <button class="btn-learing" id="card3">Learning</button>
                    </div>

                </div>
                <div class="card1">
                    <div class="close">
                        <div class="Green" onmouseover="Red(this)" onmouseout="Green(this)" id="first"></div>
                    </div>
                   <div class="image">
                    <img src="./img/1.png">
                    <div class="container">
                        <p>120 applicants selected from the pool of online applications to participate in a 1-day event called Hatch.</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/2.png">
                    <div class="container">
                        <p>Those identified as team leaders around the vertical of interest are invited to pitch their ideas. Teams are formed based on interests and skills.</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/3.png">
                    <div class="container">

                        <p>Teams are invited to a 2-day Hackathon Challenge where 15 teams will be selected by a panel of experts to be part of the 5-day stay-in Technopreneurship Challenge.</p>
                      </div>
                 </div>

                </div>
                <div class="card2">
                    <div class="close">
                        <div class="Green" onmouseover="Red(this)" onmouseout="Green(this)" id="second"></div>
                    </div>
                   <div class="image">
                    <img src="./img/4.png">
                    <div class="container">
                        <p>An off-site 5-day Technopreneurship Challenge shaped around the fundamentals of ideating and growing a digital startup:
                            Recognizing, evaluating, and capitalizing on opportunities;

                            Understanding the importance of rapid prototyping;

                            Market validation and experience all aspects of business creation</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/5.png">
                    <div class="container">
                        <p>nvolvement of guest speakers, network with mentors and fellow entrepreneurs with a focus on “learning by doing”. ​​​​​​​This includes high-level
                            digital training and exposure to the basics of back-end and front-end software tools.</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/6.png">
                    <div class="container">

                        <p>A pitching event in Phnom Penh will shortlist up to 5 of the most outstanding teams who will proceed to the 6-month funded incubation program.</p>
                      </div>
                 </div>

                </div>
                <div class="card3">
                    <div class="close">
                        <div class="Green" onmouseover="Red(this)" onmouseout="Green(this)" id="thrid"></div>
                    </div>
                   <div class="image">
                    <img src="./img/7.png">
                    <div class="container">
                        <p>A tailored support scheme with full access to a suite of master classes, 1-on-1 sessions with mentors and industry leaders to develop a progress plan.</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/8.png">
                    <div class="container">
                        <p>Regular check-ins to monitor progress and troubleshoot challenges, take part in demo days and meet with experts from various companies to get insights.</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/9.png">
                    <div class="container">
                        <p>Full membership at an international hub which includes full time use of facilities as well as free access to regular events, workshops and business clinics.</p>
                      </div>
                 </div>

                </div>

            </div>
        </div>
        <div class="apply-ch">
            <div class="right-apply">
                <div class="article">
                    <h3 class="question respon">What are we looking for ?</h3>
                </div>
            </div>
            <div class="left-apply">
                <div class="info-apply">
                 <div class="txt">
                        <p>
                            All university students with keen interest and curiosity in innovation, entrepreneurship, startups and digital technologies.
                             These students must possess any digital business idea in the following verticals:
                        </p>
                 </div>
                 <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Education.png" alt="">
                        <p>Digital Education</p>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Entertainment.png" alt="">
                        <p>Digital Content & Entertainment</p>

                    </div>
                </div>
                <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Trend.png" alt="">
                        <p>
                            Other Disruptive Industry Model</p>

                    </div>
                    <div class="item-ch">
                        <img src="./img/Digital-Cash.png" alt="">
                        <p>
                            Digital Commerce & Payment</p>

                    </div>
                </div>
            </div>
           </div>
         </div>
         <div class="apply-ch">
            <div class="right-apply">
                <div class="article">
                    <h3 class="question respon">What can apply ?</h3>
                </div>
            </div>
            <div class="left-apply">
                <div class="info-apply">
                    <div class="txt">
                        <p >
                            At the minimum, candidates must have:
                        </p>
                    </div>
                 <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Conversation.png" alt="">
                        <p>High English Proficiency</p>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Dreams.png" alt="">
                        <p>Massive Drive & Determination</p>

                    </div>

                </div>
                <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Solution.png" alt="">
                        <p>
                            Entrepreneurship Skills</p>
                    </div>
                </div>
            </div>
           </div>
         </div>

         <div class="pic cover">
             <div class="sub-pic design">
                 <div class="ready">
                     <p>
                        Are<br>
                        You<br>
                        Ready to<br>
                        Innovate<br>
                        with<br>
                        Smart?
                      </p>
                 </div>
                <div class="letter">
                    <p>Apply through our online application form:</p>
                </div>
                <div class="btns">
                    <div class="btn-start" id="click-apply">Apply Now</div>
                </div>
             </div>
         </div>

         <div class="sponsor">
            <div class="banner">
                <p class="sub-banner yellow">INNOVATING WITH YOU, INVESTING IN YOU!</p>
            </div>
            <div class="logos">
                <div class="logo">
                    <img src="./img/MoEYS.png" alt="">
                </div>
                <div class="logo">
                    <img src="./img/MPTC.png" alt="">
                </div>
                <div class="logo" id="CBRD">
                    <img src="./img/CBRD.png" alt="">
                </div>
                <div class="logo" >
                    <img src="./img/Impact.png" alt="">
                </div>
                <div class="logo">
                    <img src="./img/Smart.png" alt="">
                </div>

            </div>
            <div class="social">
                <p>Follow</p>
                <div class="social-img">
                    <img src="./img/Facebook.png" alt="">
                    <img src="./img/Insta.png" alt="">
                    <img src="./img/YouTube.png" alt="">
                </div>
            </div>
         </div>
        </page>

        <page id="apply">
            <div class="content-winner">
                <div class="green-layer">
                    <p class="paragraph"> Apply Now
                </div>
            </div>
            <div class="apply-banner"> </div>

            <div class="apply">
                <div class="apply-content">
                    <p class="title">So, do you want to be a tech entrepreneur?</p>
                    <p class="text">
                        SmartStart is a nine-month program that will help turn your
                        ideas into successful startup.
                        <br>
                        If you think you have what it takes,
                        <span class="highlight"
                            onclick="window.open('https://impacthubphnompenh.typeform.com/to/vPr1As')">
                            apply here</span>
                        for a life-changing exprience!
                        <br>
                        <br>
                        To view the application form beforehand, download
                        <a class="highlight" href="/resources/SmartStart_3_Application_Form.docx" download="">
                            here</a>.
                        We only accept online applications.
                        <br>
                        To get help with coming up with the next big tech innovation, use this
                        <a class="highlight" href="/resources/SmartStart-Inspiration.pdf" download="">
                            simple template</a>.
                    </p>
                </div>

                <div class="imag"></div>
            </div>




        </page>


        <page id="faq">

            <div class="content-winner">
                <div class="green-layer">
                    <p class="paragraph"> Previous <br> Winners
                </div>
            </div>
            <div class="faq">
                <p class="program-title">
                    The program
                </p>

                <div class="item">
                    <p class="question">
                        1 What is the objective of this program?
                    </p>
                    <p class="answer">
                        SmartStart is a Young Innovator Program aimed at enabling and empowering young Cambodian
                        talents to develop their tech and digital innovative ideas with Smart; the goal is to help
                        turn the best concepts into actual tech enterprises.
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        2 What are the benefits of attending this program?
                    </p>
                    <p class="answer">
                        SmartStart offers a unique learning platform along with mentorship and financial support.
                        Through this program, you will get:
                        <br>
                        <br>
                        <span class="highlight">Connected: </span>
                        You will be exposed to various elements of Cambodia’s digital startup ecosystem, such as
                        experienced mentors, inspirational speakers, co-working spaces, investors and other technical
                        support.
                        <br>
                        <br>
                        <span class="highlight">Skills: </span>
                        The program consists of business modules taught by experts in their field who have trained
                        and mentored successful startups in Cambodia. The Technoprenuership Challenge will bring
                        successful teams to a province outside Phnom Penh.
                        <br>
                        <br>
                        <span class="highlight">Funding: </span>
                        Up to five winning teams will receive 5,000 USD while undergoing a 6-month funded incubator
                        program in partnership with a global hub, where they will access not only free space but also
                        an array of resources, mentorship, inspiration, and collaboration opportunities. The team with
                        the best progress during the Grow Phase will also be awarded with a sponsored Tech Trip to visit
                        the likes of Google, Facebook and Microsoft in Singapore. Smart is also ready to further invest
                        in
                        your idea after the full SmartStart cycle is completed!
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        3 Do I have to bear any cost to participate in this program?
                    </p>
                    <p class="answer">
                        Smart will cover all program-related expenses, including meals, refreshments, program materials
                        etc.
                        Transportation and accommodation will also be provided for the Technopreneurship Challenge
                        during the Enable Phase.
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        4 What is the selection process like?
                    </p>
                    <p class="answer">
                        <span class="highlight">Inspire Phase :</span>
                        <br>
                        <p class="list">
                            120 students will be selected from the pool of applications to participate in half-day
                            events
                            called Hatch, centered around their vertical of interest to pitch ideas and form their
                            respective
                            teams based on interest and skills.
                        </p>
                        <p class="list">
                            Teams are invited to a 2-day Hackathon event, including prototyping and demo, which will
                            shortlist
                            up to 15 ideas through a pitching event to proceed to the next Phase for further
                            development.
                        </p>
                        <span class="highlight">Inspire Phase :</span>
                        <br>
                        <p class="list">
                            An off-site 5-day Technopreneurship Challenge, shaped around the fundamentals of ideating
                            and growing
                            a digital startup: recognizing, evaluating, and exploiting opportunities; understanding the
                            importance
                            of rapid prototyping; market validation; and experiencing all aspects of business creation.
                            This includes
                            high-level digital training and exposure to the basics of back-end and front-end software
                            tools.
                        </p>
                        <p class="list">
                            Involvement of guest speakers both local and international, networking with mentors and
                            fellow entrepreneurs
                            with a focus on ‘learning by doing’.
                        </p>
                        <p class="list">
                            Concludes with a public pitching event in Phnom Penh after the 5-day challenge to select up
                            to 5 of the most
                            outstanding or promising digital ideas. The respective teams will proceed to the following
                            6-month incubation
                            program.
                        </p>
                        <span class="highlight">Inspire Phase :</span>
                        <br>
                        <p class="list">
                            A 6-month funded incubation process and tailored support scheme in partnership with Impact
                            Hub Phnom Penh, to
                            turn ideas with the highest potential into actual businesses or products through an
                            ecosystem of resources,
                            mentorship, inspiration, and collaboration opportunities with business and tech consultants.
                        </p>
                        <p class="list">
                            Besides having regular check-ins to monitor progress and troubleshoot challenges, the teams
                            will take part in
                            demo days and meet with experts and mentors from various companies to get insights and
                            understand the relevance
                            of their startup.
                        </p>
                        <p class="list">
                            Teams will enjoy full membership at Impact Hub Phnom Penh which includes fulltime use of
                            facilities as well
                            as free access to regular events, workshops and business clinics.
                        </p>
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        5 What are the requirements of participation if I am selected?
                    </p>
                    <p class="answer">
                        If you are selected and continue to be shortlisted, you will be required to fully participate in
                        all events of
                        this program, carried out in 3 Phases, which include the Hatch, Hackathon, Technoprenuership
                        Challenge, and
                        respective pitching events, as outlined above. If your team advances to the Grow phase, you will
                        be required
                        to work on your business idea on a part-time basis at Impact Hub Phnom Penh.
                    </p>
                </div>

                <p class="program-title">
                    The application
                </p>

                <div class="item">
                    <p class="question">
                        When is the application deadline?
                    </p>
                    <p class="answer">
                        3rd April 2019
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        Who can apply?
                    </p>
                    <p class="answer">
                        This program is open to all university students with:
                        <p class="list">
                            Keen interest and curiosity in innovation, entrepreneurship, startups and digital
                            technologies.
                        </p>
                        <p class="list">
                            Any digital business idea in the following verticals: Digital Education, Digital Commerce
                            and Payment,
                            Digital Entertainment and Content and Other Disruptive Industry Models such as in
                            Healthcare, Agriculture
                            and Transportation.
                        </p>
                        <p class="list">
                            Digital or entrepreneurship skills that may contribute towards the development of one’s
                            ideas,
                            for example: coding, graphic/web design, marketing, writing, sales etc.
                        </p>
                        <p class="list">
                            Good English proficiency.
                        </p>
                        <p class="list">
                            Strong drive and determination to make his or her dreams come true.
                        </p>
                        <p class="list">
                            Commitment to fully participate in all sessions of the program.
                        </p>
                        <p class="list">
                            Year 3 and 4 students are strongly encouraged to apply.
                        </p>
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        How do I apply for this program?
                    </p>
                    <p class="answer">
                        We only accept online applications. To view the online document beforehand, download
                        <a class="highlight" href="./smartstart/new_ui/SmartStart_3_Application_Form.docx"
                            download="">here</a>.
                        Click
                        <span class="highlight"
                            onclick="window.open('https://impacthubphnompenh.typeform.com/to/vPr1As')">here</span>
                        to get started.
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        Are supporting materials required for the application?
                    </p>
                    <p class="answer">
                        You are required to submit a video introduction about yourself (please refer to the application
                        form
                        for details regarding the video content). You may upload your video to YouTube and provide the
                        link
                        accordingly in the application form.
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        When and how will I be notified of my admission status?
                    </p>
                    <p class="answer">
                        You will be informed of your application status by the organizers via email, on or before 12th
                        April,
                        2019. Successful applicants will be asked to confirm participation upon receiving the
                        notification;
                        failure to do so will imply that the applicant has rejected the opportunity to join this
                        program,
                        and the position will be offered to other deserving applicants.
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        What are the important dates or milestones that I need to take note of?
                    </p>
                    <div class="answer two-column">
                        <p class="list half">Application Start Date</p>
                        <p class="half">
                            20<sup>th</sup> March 2019
                        </p>

                        <p class="list half">Application Deadline</p>
                        <p class="half">
                            03<sup>rd</sup> April 2019
                        </p>

                        <p class="list half">Announcement of Successful Applicants</p>
                        <p class="half">
                            12<sup>th</sup> April 2019
                        </p>

                        <p class="list half">Hatch</p>
                        <p class="half">
                            20<sup>th</sup> April 2019
                        </p>

                        <p class="list half">Hackathon</p>
                        <p class="half">
                            27 - 28<sup>th</sup> April 2019
                        </p>

                        <p class="list half">Camp</p>
                        <p class="half">
                            11 - 16<sup>th</sup> May 2019
                        </p>

                        <p class="list half">Final Pitch</p>
                        <p class="half">
                            09<sup>th</sup> June 2019
                        </p>

                        <p class="list half">Growth Phase</p>
                        <p class="half">
                            End June onwards
                        </p>
                        <p>The organizers reserve the right to amend any of the dates above due to unforeseen
                            circumstances.</p>
                    </div>
                </div>
            </div>


        </page>


        <page id="previous-winner">


            <div class="content-winner">
                <div class="green-layer">
                    <p class="paragraph"> Previous <br> Winners
                </div>
            </div>

            <div class="top5-wrap">
                <div class="top5">
                    <div class="title-content">
                        <div class="title">
                            Top 5 Winners
                        </div>
                        <div id="cycle-1Btn" class="cycle-btn active" onclick="displayCycle('cycle-1')">
                            Cycle 1
                        </div>
                        <div id="cycle-2Btn" class="cycle-btn" onclick="displayCycle('cycle-2')">Cycle 2</div>
                    </div>
                    <cycle class="top5-list cycle" id="cycle-1">
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/go-soccer.jpg" alt="">
                            </div>
                            <div class="winner-title">
                                GoSoccer
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/ligo.png" alt="">
                            </div>
                            <div class="winner-title">
                                Ligo
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Prestige.png" alt="">
                            </div>
                            <div class="winner-title">
                                Prestige
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Propey.png" alt="">
                            </div>
                            <div class="winner-title">
                                Propey
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Spare.png" alt="">
                            </div>
                            <div class="winner-title">
                                Spare
                            </div>
                        </div>
                    </cycle>
                    <cycle id="cycle-1">
                        <div class="final-pitch">
                            <img src="img/Final-cycle-1.jpg" alt="">
                            <div>Final Pitch</div>
                        </div>
                        <div class="grand-final" style="padding-bottom: 40px;">
                            <img src="img/Grand-final-cycle-1.jpg" alt="">
                            <div>Grand Final</div>
                        </div>
                    </cycle>



                    <cycle class="top5-list cycle" id="cycle-2">

                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Haystome.png" alt="">
                            </div>
                            <div class="winner-title">
                                Haystome
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/HomeX.png" alt="">
                            </div>
                            <div class="winner-title">
                                Homex
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Malis.png" alt="">
                            </div>
                            <div class="winner-title">
                                Malis
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/SomJot.png" alt="">
                            </div>
                            <div class="winner-title">
                                SomJot
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Tosrean.png" alt="">
                            </div>
                            <div class="winner-title">
                                Tos Rean
                            </div>
                        </div>
                    </cycle>
                    <cycle id="cycle-2">

                        <div class="final-pitch">
                            <img src="img/Final-cycle-2.jpg" alt="">
                            <div>Final Pitch</div>
                        </div>
                        <div class="grand-final " style="padding-bottom: 40px;">
                            <img src="img/Grand-final-cycle-2.jpg" alt="">
                            <div>Grand Final</div>
                        </div>
                    </cycle>

                </div>
            </div>






        </page>


        <page id="contact-us">


            <div class="contact-us-banner">
                <div class="green-layer">
                    <p  class="paragraph"> Contact Us </p><br>
                    <p class="para2">   Get in touch today </p>
                </div>
            </div>
            <div class="wrap-contact">
                <div class="contact">
                    <div class="contact-us-div">
                        <div class="contact-ico1"></div>
                        <div>
                            <p>Phone</p>
                            <p>+85510234075</p>
                        </div>
                    </div>
                    <div class="contact-us-div">
                        <div class="contact-ico2"></div>
                        <div>
                            <p>Email</p>
                            <p>smartstart@smart.com.kh</p>
                        </div>
                    </div>
                    <div class="contact-us-div">
                        <div class="contact-ico3"></div>
                        <div>
                            <p>Website</p>
                            <p>smartstart.com.kh</p>
                        </div>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.1978529270696!2d104.9213514153369!3d11.53766034783437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950dbd81ec78d%3A0x8d3ccf621a2b4e1f!2sSmart%20Axiata!5e0!3m2!1sen!2skh!4v1578477212564!5m2!1sen!2skh"
                            width="100%" height="100%" frameborder="0" style="border:1px solid #ccc;"
                            allowfullscreen=""></iframe>

                    </div>
                    <div class="follow-us')">
                        <p>Follow Us:</p>
                        <div>
                            <div class="btn" onclick="window.open('https://web.facebook.com/smartforcambodia/')"></div>
                            <div class="btn" onclick="window.open('https://www.instagram.com/smartaxiata/')"></div>
                            <div class="btn" onclick="window.open('https://www.youtube.com/user/SmartAxiata')"></div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">

                     {!! Form::open(['method' => 'POST', 'action' => 'UserController@store']) !!}

                        <div class="fill-form">or fill the form</div>

                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="number" name="phonenumber" placeholder="Phone Number" value="092897070">
                        <textarea type="text" name="message" placeholder="Message"
                            style="padding-top: 10px; width: 100%; height: 240px;"></textarea>
                        <div><input type="submit" value="Submit" class="btn submit"></div>

                    {!! Form::close() !!}

                </div>
            </div>


            </div>


        </page>
    </language>
    <language id="khmer" >
        <div class="top-nav">
            <nav class="nav-bar">
                <div class="logo-top">
                    <img src="img/logo.png" onclick="changePage('change')">
                </div>
                <div class="nav-list">
                    <div class="nav-item" onclick="changePage('apply')">ដាក់ពាក្យចូលរួម</div>
                    <div class="nav-item" onclick="changePage('faq')">សំណួរ និងចម្លើយ</div>
                    <div class="nav-item" onclick="changePage('previous-winner')">អតីតជ័យលាភី</div>
                    <div class="nav-item" onclick="changePage('contact-us')">ទាក់ទងពួកយើង</div>
                    <div class="language">
                        <p class="current">KH</p>
                        <div class="dropdown">
                            <p class="item" onclick="changeLanguage('english')">EN</p>
                        </div>
                    </div>

            </nav>
        </div>

        <page id="change">
            <div class="slide">
                    <div class="move" id="left-kh">
                       <img src="./img/Forward.png" alt="">
                    </div>
                    <div class="move" id="right-kh">
                        <img src="./img/Backward.png" alt="">
                    </div>
                <div class="slider-kh">
                    <div class="slide1">
                        <div class="slide-container">
                         <div class="info">
                             <div class="description">
                                 <div class="title-change call">អំពី SmartStart</div>
                             </div>
                              <div class="text">
                                  <p>SmartStart គឺជាកម្មវិធីអ្នកច្នៃប្រឌិតវ័យក្មេងមួយដែលមាន គោលបំណងផ្តល់ឱកាសឲ្យនិស្សិតកម្ពុជាដែលមានទេពកោសល្យ និងសមត្ថភាព ដើម្បីអភិវឌ្ឍគំនិតច្នៃប្រឌិតអំពីវិស័យ បច្ចេកវិទ្យា និង ឌីជីថល របស់ពួកគេ ជាមួយនឹង ក្រុមហ៊ុន Smart និងImpact Hub Phnom Penh ។ SmartStart ជាកម្មវិធីតែមួយគត់ ដែលផ្តល់នូវវេទិកាសម្រាប់ សិក្សារៀនសូត្រ និងទទួលបានការជួយ បង្ហាត់បង្ហាញពីអ្នក ជំនាញ និងទទួលជំនួយផ្នែកហិរញ្ញវត្ថុទៀតផង។</p>
                              </div>
                              <div class="btns">
                                  <div class="btn-start" onclick="left()">Get Start</div>
                                  <div>
                                    <a href="https://www.youtube.com/watch?v=G_jacjlBWHA&feature=youtu.be" target="_blank"  class="watch"><img src="./img/Watch.png" alt="">
                                     <p>មើលវីដេអូរបស់យើង</p>
                                    </a>
                                  </div>
                              </div>
                         </div>
                         <div class="img">
                             <img src="./img/Home.png" alt="">
                         </div>
                        </div>
                    </div>
                    <div class="slide2">
                        <div class="slide-container">
                                <div class="info">
                                    <div class="num">
                                       <p>1</p>
                                    </div>
                                    <div class="description">
                                        <div class="title-change call">ទំនាក់ទំនង</div>
                                    </div>
                                    <div class="text">
                                        <p>តាមរយៈកម្មវិធីនេះ អ្នកនឹងត្រូវបាន​ស្វែងយល់ពីប្រព័ន្ធអេកូស៊ីស្ដែមនៃអាជីវកម្មទើបនឹងចាប់ផ្ដើមបែបឌីជីថលក្នុងប្រទេសកម្ពុជា រួមទាំងជួបអ្នកណែនាំដែលមានបទពិសោធន៍ កន្លែងធ្វើការរួមគ្នា អ្នកវិនិយោគ និងកាគាំទ្រផ្នែកបច្ចេកទេសផ្សេងទៀត។</p>
                                    </div>
                                </div>
                                <div class="img">
                                    <img src="./img/Connect.png" alt="">
                                </div>
                        </div>
                    </div>
                    <div class="slide3">
                        <div class="slide-container">
                            <div class="info">
                                    <div class="num">
                                       <p>2</p>
                                    </div>
                                    <div class="description">
                                        <div class="title-change call">ជំនាញ</div>
                                    </div>
                                    <div class="text">
                                        <p>កម្មវិធីនេះមានម៉ូឌុលអាជីវកម្មដែលត្រូវបានបង្រៀនដោយអ្នកឯកទេសក្នុងវិស័យអាជីវកម្មទើបនឹងចាប់ផ្ដើម និងអ្នកបង្ហាត់បង្ហាញប្រកបដោយជោគជ័យក្នុងការចាប់ផ្តើមអាជីវកម្មនៅកម្ពុជា។ កម្មវិធី Technopreneurship Challenge នឹងនាំយកក្រុមដែលទទួលបានជោគជ័យទៅកាន់ខេត្តមួយ ដែលជាប្រភពគំនិតច្នៃប្រឌិតបច្ចេកវិទ្យាគំនិតច្នៃប្រឌិតនិងអាជីវកម្មនៅក្នុងប្រទេសកម្ពុជា។</p>
                                    </div>
                            </div>
                                <div class="img">
                                    <img src="./img/Skills.png" alt="">
                                </div>
                          </div>

                    </div>
                    <div class="slide4">
                        <div class="slide-container">
                            <div class="info">
                                <div class="num">
                                   <p>3</p>
                                </div>
                                <div class="description">
                                    <div class="title-change call">ចាប់ផ្ដើមការឆ្នៃប្រឌិត</div>
                                </div>
                                <div class="text">
                                    <p>ការចូលរួមក្នុងកម្មវិធីទាំងមូលនឹងធ្វើអោយសមត្ថភាពអ្នកកាន់តែប្រសើរឡើងនិងចាប់ផ្តើមដំណើររបស់អ្នកក្នុងការអភិវឌ្ឍគំនិតឌីជីថលរបស់អ្នក។ អ្នកក៏នឹងទទួលបានចំណេះដឹងផ្នែកឧស្សាហកម្មឈានមុខនិងការផ្តល់មូលនិធិដើម្បីចាប់ផ្តើមការបណ្តាក់ទុនផ្ទាល់ខ្លួនរបស់អ្នក។</p>
                                </div>
                           </div>
                            <div class="img">
                                <img src="./img/Headstart.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="index-kh">
                    <div id="0" class="item-ch-kh active-ch-kh"></div>
                    <div id="1" class="item-ch-kh"></div>
                    <div id="2" class="item-ch-kh"></div>
                    <div id="3" class="item-ch-kh"></div>
                </div>
            </div>
           <div class="stake">
               <div class="right-stake">
                   <div class="article">
                       <h3 class="question respon">អ្វីដែលនៅភាគហ៊ុន?</h3>
                       <p class="descript">៥ ក្រុមដែលឈ្នះនឹងទទួលបាន៖</p>
                   </div>
               </div>
               <div class="left-stake">
                   <div class="information">
                       <div class="item-ch">
                           <img src="./img/Reward.png" alt="">
                           <p>ទឹកប្រាក់ ៥ ០០០ ដុល្លារ</p>
                       </div>
                       <div class="item-ch">
                           <img src="./img/Learning.png" alt="">
                           <p>កម្មវិធីបណ្តុះបណ្តាលរយៈពេល ៦ ខែ</p>
                       </div>
                       <div class="item-ch">
                           <img src="./img/Singapore.png" alt="">
                           <p>
                            ក្រុមដែលមានអាជីវកម្មរីកចំរើនលឿនជាងគេ នឹងត្រូវបានអញ្ជើញឲ្យទៅទស្សនកិច្ចសិក្សានៅ ការិយាល័យ Google, Facebook និង Microsoft នៅប្រទេសសឹង្ហបូរីដោយឥតគិតថ្លៃ។</p>
                       </div>
                       <div class="txt">
                           <p>សកម្មភាពទាំងអស់នេះនឹងត្រូវបានធ្វើឡើងក្រោមភាពជាដៃគូជាមួយនឹង បណ្ដាញអ្នកគាំទ្រអន្តរជាតិមួយ ដែលនៅទីនោះក្រុមដែលទទួលបាន ជ័យជំនះទាំង ៥ អាចទទួលបានកន្លែងធ្វើការដោយឥតគិតថ្លៃ និងជំនួយ លើធនធានផ្សេងៗរួមមាន ការហ្វឹកហាត់ ការលើកទឹកចិត្ត និងឱកាស ដៃគូជាច្រើនទៀតផងដែរ។

                        </p>
                       </div>
                       <div class="note">
                           <p>ក្រោយពេលកម្មវិធីស្មាតស្តាតបានបញ្ចប់ទៅក្រុមហ៊ុនស្មាត ក៏អាចបន្តផ្តល់ការវិនិយោគទុនទៅលើគំនិតរបស់អ្នកទៀតផង!</p>
                        </div>
                   </div>
               </div>
           </div>
           <div class="process">
            <div class="right-process">
                <div class="article">
                    <h3 class="question respon">ដំណើរការ</h3>
                </div>
            </div>
            <div class="left-process">
                <div class="info-process">
                    <div class="item-ch">
                        <img src="./img/Creative.png" alt="">
                        <h3 class="heading">វគ្គបំផុសគំនិត</h3>
                        <p>និស្សិតចំនួន ១២០ រូបចាប់ ផ្ដើមបង្កើតគម្រោង ផ្សេងៗតាមរយៈកម្មវិធី Hackathon។</p>
                        <button class="btn-learing" id="card1-kh">អានបន្ថែម</button>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Enable.png" alt="">
                        <h3 class="heading" >វគ្គបណ្តុះសមត្ថភាព</h3>
                        <p class="text-resp">និស្សិត៦០ រូបធ្វើការដើម្បី បង្កើតគម្រោងអាជីវកម្ម តាមរយៈការប្រកួត សហគ្រិនបច្ចេកវិទ្យា (Technopreneur Challenge)</p>
                        <button class="btn-learing" id="card2-kh">អានបន្ថែម</button>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Grow.png" alt="">
                        <h3 class="heading" >វគ្គលូតលាស់</h3>
                        <p>
                            ៥ ក្រុមនឹងទទួលបាន ការបណ្តុះបណ្តាល ដើម្បី ពន្លឿនគម្រោងរបស់គេ។</p>
                            <button class="btn-learing" id="card3-kh">អានបន្ថែម</button>
                    </div>

                </div>
                <div class="card1-kh">
                    <div class="close">
                        <div class="Green-kh" onmouseover="Red_kh(this)" onmouseout="Green_kh(this)" id="first-kh"></div>
                    </div>
                   <div class="image">
                    <img src="./img/1.png">
                    <div class="container">
                        <p>យើងនឹងជ្រើសរើសសិស្ស និស្សិត ចំនួន ១២០ រូបពីពាក្យស្នើរសុំ ដើម្បីឲ្យមកចូលរួមកម្មវិធីដែលមានរយៈពេលពាក់កណ្តាលថ្ងៃ មានឈ្មោះថា Hatch ។</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/2.png">
                    <div class="container">
                        <p>បេក្ខជនដែលមានគំនិតអាជីវកម្មជាក់លាក់ នឹងត្រូវបានអញ្ជើញឲ្យធ្វើបទបង្ហាញពីគំនិតរបស់ពួកគេ បន្ទាប់មកបេក្ខជននឹងជ្រើសរើសក្រុមដោយផ្អែកទៅលើចំណាប់អារម្មណ៍ និងជំនាញរបស់ពួកគេ។</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/3.png">
                    <div class="container">

                        <p>ក្រុមនីមួយៗនឹងត្រូវ ចូលរួមកម្មវិធីបង្កើតផលិតផលគម្រូ ដែលមាន រយៈពេល ២ថ្ងៃ ដែលក្នុងនោះពួក គេត្រូវធ្វើបទបង្ហាញទៅកាន់គណៈ កម្មការអំពីផលិតផលរបស់ពួកគេ។ អ្នកជំនាញនឹងជ្រើសរើសពី ១០ ទៅ ១៥ ក្រុមដែលល្អជាងគេដើម្បីបន្ត ទៅវគ្គបន្ទាប់ដែលមានឈ្មោះថា កម្មវិធីបណ្ដុះបណ្ដាលសហគ្រិន បច្ចេកវិទ្យា (Technoprenuer Challenge) ដែលនឹងប្រព្រឹត្តឡើង នៅខេត្តបាត់ដំបង ពីថ្ងៃទី ១១ ទៅ ១៥ ខែឧសភា ឆ្នាំ ២០១៧។</p>
                      </div>
                 </div>

                </div>
                <div class="card2-kh">
                    <div class="close">
                        <div class="Green-kh" onmouseover="Red_kh(this)" onmouseout="Green_kh(this)" id="second-kh"></div>
                    </div>
                   <div class="image">
                    <img src="./img/4.png">
                    <div class="container">
                        <p>កម្មវិធីការប្រកួតសហគ្រិនបច្ចេកវិទ្យា (Technoprenuer Challenge) ជាកម្មវិធីរយៈពេលប្រាំថ្ងៃ ធ្វើឡើងនៅខេត្តបាត់ដំបង ដើម្បីបង្រៀនពីការអភិវឌ្ឍន៍គំនិត និងការបង្កើតក្រុមហ៊ុនបច្ចេកវិទ្យាថ្មីដែលរួមមាន៖
                            ការ ចេះវិភាគ និងចេះប្រើប្រាស់ឱកាស

                            យល់ដឹងពីសារៈសំខាន់នៃការបង្កើតផលិតផលគម្រូឲ្យបានរហ័ស

                            យល់ដឹងសុពលភាពទីផ្សារ និងបទពិសោធន៍គ្រប់ផ្នែកនៃការបង្កើតជំនួញមួយ។</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/5.png">
                    <div class="container">
                        <p>ការចូលរួមបង្ហាត់បង្រៀនពីសំណាក់វាគ្មិនពីក្នុង និងក្រៅប្រទេស ការបង្កើតទំនាក់ទំនងជាមួយអ្នកមានបទពិសោធន៍ និង សហគ្រិនផ្សេងៗ ដោយផ្តោតសំខាន់ទៅលើ ការរៀនតាមរយៈការធ្វើ នេះរួមមាន ការហ្វឹកហាត់ឌីជីថលកម្រិតខ្ពស់ និងការរៀនសូត្រពីភាសាសាមញ្ញក្នុងការបង្កើតភាសាកុំព្យូទ័រ សម្រាប់ទាំងផ្នែកខាងក្នុង និងសម្បកក្រៅនៃសហ្វវែកុំព្យូទ័រមួយ។</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/6.png">
                    <div class="container">

                        <p>វគ្គនេះនឹងបញ្ចប់ជាមួយនឹងកម្មវិធីធ្វើបទបង្ហាញជាសាធារណៈមួយនៅទីក្រុងភ្នំពេញ ដើម្បីជ្រើសរើសក្រុមចំនួន ៥ ក្រុមដែលមានគំនិតល្អជាងគេ។ ក្រុមទទួលបានជ័យជំនះទាំង៥ នេះនឹងបន្តចូលទៅក្នុងកម្មវិធីបណ្តុះបណ្តាលរយៈពេល ៦ ខែបន្តទៀត។</p>
                      </div>
                 </div>

                </div>
                <div class="card3-kh">
                    <div class="close">
                        <div class="Green-kh" onmouseover="Red_kh(this)" onmouseout="Green_kh(this)" id="thrid-kh"></div>
                    </div>
                   <div class="image">
                    <img src="./img/7.png">
                    <div class="container">
                        <p>កម្មវិធីបណ្តុះបណ្តាលឥតគិតថ្លៃ និងការគាំទ្ររយៈពេល ៦ ខែ ដែលត្រូវបានធ្វើឡើងតាមរយៈភាពជាដៃគូជាមួយ global hub ក្នុងគោលបំណងប្រែគំនិតដែលមានសក្តានុពលល្អជាងគេ ឲ្យក្លាយទៅជាជំនួញ ឬផលិតផលពិតប្រាកដមួយ តាមរយៈការប្រើប្រាស់បណ្ដាញធនធាន ការហ្វឹកហាត់ ការលើកទឹកចិត្ត និងឱកាសធ្វើជាដៃគូជាមួយនឹង ជំនួញ និងអ្នកផ្តល់ប្រឹក្សាផ្សេងៗ។</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/8.png">
                    <div class="container">
                        <p>ក្រៅពីធ្វើការពិនិត្យជាទៀតទាត់ដើម្បីតាមដានការលូតលាស់ និងដោះស្រាយបញ្ហាផ្សេងៗ ក្រុមនឹងទទួល ឱកាសចូលរួមក្នុងថ្ងៃបង្ហាញផលិតផល និងអាជីវកម្មរបស់ពួកគេ ព្រមទាំងអាច ជួបពិភាក្សាជាមួយនឹងអ្នកជំនាញ និងអ្នកមានបទពិសោធន៍ពីក្រុមហ៊ុនផ្សេងៗដើម្បីទទួលបានពត៌មានទាក់ទងជាមួយនឹងអាជីវកម្ម របស់ពួកគេផងដែរ។</p>
                      </div>
                 </div>
                 <div class="image">
                    <img src="./img/9.png">
                    <div class="container">
                        <p>ក្លាយជាសមាជិកដោយឥតគិតថ្លៃនៅក្នុងការិយាល័យអន្តរជាតិមួយ ដែលក្នុងនោះអ្នកអាចប្រើប្រាស់សម្ភារៈ គ្រប់បែបយ៉ាង ក៏ដូចជាអាចចូលរួមកម្មវិធី សិក្ខាសាលា ទាក់ទងនឹងពត៌មាន អំពីជំនួញផ្សេងៗផងដែរ</p>
                      </div>
                 </div>

                </div>

            </div>
        </div>
        <div class="apply-ch">
            <div class="right-apply">
                <div class="article">
                    <h3 class="question respon">តើពួកយើងស្វែងរកបេក្ខជនបែបណា?</h3>
                </div>
            </div>
            <div class="left-apply">
                <div class="info-apply">
                 <div class="txt">
                        <p>
                            គ្រប់និស្សិត ដែលមានចំណាប់អារម្មណ៍ និងចង់ស្វែងយល់ពីការច្នៃប្រឌិត សហគ្រិនភាព ការបង្កើតជំនួញថ្មី និងបច្ចេកវិទ្យាឌីជីថល។ និស្សិតទាំងនេះត្រូវមានគំនិតជំនួញឌីជីថលដែលមាននៅក្នុងប្រភេទ៖
                        </p>
                 </div>
                 <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Education.png" alt="">
                        <p>ការអប់រំតាមរយៈឌីជីថល</p>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Entertainment.png" alt="">
                        <p>ការកំសាន្ត និងពត៌មានឌីជីថល</p>

                    </div>
                </div>
                <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Trend.png" alt="">
                        <p>
                            វិស័យផ្សេងទៀត</p>

                    </div>
                    <div class="item-ch">
                        <img src="./img/Digital-Cash.png" alt="">
                        <p>
                            ពាណិជ្ជកម្ម និងការបង់ប្រាក់បែបឌីជីថល</p>

                    </div>
                </div>
            </div>
           </div>
         </div>
         <div class="apply-ch">
            <div class="right-apply">
                <div class="article">
                    <h3 class="question respon">តើនរណាខ្លះអាចដាក់ពាក្យចូលរួមបាន?</h3>
                </div>
            </div>
            <div class="left-apply">
                <div class="info-apply">
                    <div class="txt">
                        <p >
                            យ៉ាងហោចណាស់ បេក្ខជនត្រូវមាន៖
                        </p>
                    </div>
                 <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Conversation.png" alt="">
                        <p>ចំនេះដឹងអង់គ្លេសល្</p>
                    </div>
                    <div class="item-ch">
                        <img src="./img/Dreams.png" alt="">
                        <p>ចំនង់​និងការប្ដេជ្ញាចិត្តដ៏រឹងមាំ</p>

                    </div>

                </div>
                <div class="container-item">
                    <div class="item-ch">
                        <img src="./img/Solution.png" alt="">
                        <p>
                            ជំនាញសហគ្រិនភាព​</p>
                    </div>
                </div>
            </div>
           </div>
         </div>

         <div class="pic cover">
             <div class="sub-pic design">
                 <div class="ready">
                     <p>
                        តើអ្នកត្រៀមខ្លួនក្លាយ <br> ទៅជាអ្នកច្នៃប្រឌិតវ័យក្មេង <br> ជាមួយស្មាតហើយឬនៅ?
                      </p>
                 </div>
                <div class="letter">
                    <p>សូមបំពេញពាក្យចូលរួមតាមអ៊ីនធឺណែត៖</p>
                </div>
                <div class="btns">
                    <div class="btn-start" id="click-apply">ដាក់ពាក្យឥលូវនេះ</div>
                </div>
             </div>
         </div>

         <div class="sponsor">
            <div class="banner">
                <p class="sub-banner yellow">INNOVATING WITH YOU, INVESTING IN YOU!</p>
            </div>
            <div class="logos">
                <div class="logo">
                    <img src="./img/MoEYS.png" alt="">
                </div>
                <div class="logo">
                    <img src="./img/MPTC.png" alt="">
                </div>
                <div class="logo" id="CBRD">
                    <img src="./img/CBRD.png" alt="">
                </div>
                <div class="logo" >
                    <img src="./img/Impact.png" alt="">
                </div>
                <div class="logo">
                    <img src="./img/Smart.png" alt="">
                </div>

            </div>
            <div class="social">
                <p>តាមដានពួកយើងតាមរយៈ៖</p>
                <div class="social-img">
                    <img src="./img/Facebook.png" alt="">
                    <img src="./img/Insta.png" alt="">
                    <img src="./img/YouTube.png" alt="">
                </div>
            </div>
         </div>
        </page>



        <page id="apply">

            <div class="content-winner">
                <div style="position: relative;" class="green-layer">
                    <p class="paragraph"> ដាក់ពាក្យចូលរួម
                </div>
            </div>
            <div class="apply-banner"> </div>

            <div class="apply">
                <div class="apply-content">
                    <p class="title">តើអ្នកចង់ក្លាយជាសហគ្រិនបច្ចេកវិទ្យាឬ?</p>
                    <p class="text">
                        SmartStart គឺជាកម្មវិធីរយៈពេលប្រាំបួនខែដែលនឹងជួយបង្វែរគំនិតរបស់អ្នក
                        ឲ្យក្លាយជាអាជីវកម្មទើបនឹងចាប់ផ្តើមថ្មីជោគជ័យបាន។ប្រសិនបើអ្នកគិតថាអ្នកអាចក្លាយជាសហគ្រិនវ័យក្មេងនោះ
                        <span class="highlight"
                            onclick="window.open('https://impacthubphnompenh.typeform.com/to/vPr1As')">សូមចុចនៅទីនេះ</span>
                        ដើម្បីទទួលបទពិសោធន៍ផ្លាស់ប្តូរជីវិតរបស់អ្នក!
                        <br><br>
                        ដើម្បីមើលឯកសារអនឡាញជាមុន
                        <a class="highlight" href="./smartstart/new_ui/SmartStart_3_Application_Form.docx"
                            download>ទាញយកនៅទីនេះ</a>។
                        យើងទទួលយកពាក្យដែលដាក់តាមអនឡាញតែប៉ុណ្ណោះ។<br>
                        ដើម្បីទទួលបានជំនួយក្នុងការបង្កើតឡើងនូវការច្នៃប្រឌិតបច្ចេកវិទ្យាដ៏ធំ សូមប្រើ
                        <a class="highlight" href="./smartstart/new_ui/SmartStart-Inspiration.pdf"
                            download>គំរូសាមញ្ញ</a> មួយនេះ។

                    </p>
                </div>

                <div class="imag"></div>
            </div>




        </page>


        <page id="faq">

            <div class="content-winner">
                <div class="green-layer">
                    <p class="paragraph"> សំណួរ និងចម្លើយ
                </div>
            </div>
            <div class="faq">
                <p class="program-title">
                    អំពីកម្មវិធី
                </p>

                <div class="item">
                    <p class="question">
                        ១. តើកម្មវិធីនេះមានគោលបំណងអ្វី?
                    </p>
                    <p class="answer">
                        ស្មាតស្តាត គឺជាកម្មវិធីអ្នកច្នៃប្រឌិតវ័យក្មេងមួយ ដែលមានគោលបំណងផ្តល់ឱកាសឲ្យកូនខ្មែរដែលមាន ទេព
                        កោសល្យ និងសមត្ថភាពសម្រាប់អភិវឌ្ឍគំនិតច្នៃប្រឌិតទាក់ទងនឹងបច្ចេកវិទ្យា និងឌីជីថលរបស់ពួកគេជា
                        មួយនឹងក្រុមហ៊ុនស្មាត ។ គោលបំណងធំបំផុតនៃកម្មវិធីនេះ គឺធ្វើយ៉ាងណាជួយឲ្យគំនិតល្អបំផុត ក្លាយទៅ
                        ជាក្រុមហ៊ុនបច្ចេកវិទ្យាពិត មួយ។
                    </p>
                </div>

                <div class="item">
                    <p class="question">
                        ២. តើការចូលរួមកម្មវិធីនេះផ្តល់ឲ្យនូវផលប្រយោជន៍អ្វីខ្លះ?
                    </p>
                    <p class="answer">
                        ស្មាតស្តាត ជាកម្មវិធីតែមួយគត់ដែលផ្តល់នូវវេទិកាសម្រាប់សិក្សារៀនសូត្រ
                        ការជួយបង្ហាត់បង្ហាញពីអ្នកមានបទ ពិសោធន៍ និងជំនួយផ្នែកហិរញ្ញវត្ថុ។ តាមរយៈការចូលរួមកម្មវិធីនេះ
                        អ្នកនឹងទទួលបាន៖
                        <br>
                        <br>
                        <span class="highlight">ទំនាក់ទំនង៖ </span>
                        អ្នកនឹងស្គាល់ និងឃើញគ្រប់ផ្នែកនៃស្ថានភាព ក្រុមហ៊ុនឌីជីថលទើបបើកថ្មីរបស់ប្រទេស កម្ពុជាដូចជា
                        បានទទួលការហ្វឹកហាត់ពីអ្នកមានបទពិសោធន៍នៅក្នុងវិស័យនេះ ជួបជាមួយវាគ្មិនដែលពូកែ
                        បំផុសគំនិតការធ្វើការក្នុង ការិយាល័យធ្វើការរួមគ្នា ទំនាក់ទំនងជាមួយអ្នកវិនិយោគទុន និងទទួលបានជំនួយ
                        ផ្នែកបច្ចេកទេសផ្សេងៗផងដែរ។
                        <br>
                        <br>
                        <span class="highlight">ជំនាញ៖ </span>អ្នកនឹងទទួលបានការហ្វឹកហាត់ពី អ្នកជំនាញក្នុងវិស័យនេះ
                        ដែលពួកគាត់ធ្លាប់បានបង្វឹក ពាណិជ្ជ កម្មបើកថ្មីឲ្យទទួលបានជោគជ័យនៅក្នុងប្រទេសកម្ពុជាពីមុនមក។
                        ការប្រកួតសហគ្រិនបច្ចេកវិទ្យា (Technoprenuer Challenge)
                        នឹងនាំក្រុមដែលទទួលបានជោគជ័យទៅខេត្តបាត់ដំបង ដែលជាប្រភពនៃគំនិត ពាណិជ្ជកម្មបច្ចេកវិទ្យា
                        និងច្នៃប្រឌិតនៅក្នុងព្រះរាជាណាចក្រកម្ពុជា។<br><br>
                        <span class="highlight">ឧបត្ថម្ភ៖ </span>ក្រុមដែលទទួលបានជ័យជំនះចំនួនប្រាំក្រុម
                        នឹងទទួលបានទឹកប្រាក់ ៥ ០០០ ដុល្លារ ព្រមទាំងការ ចូលរួម ក្នុងកម្មវិធីបណ្តុះបណ្តាលរយៈពេល ៦ ខែ
                        ធ្វើឡើងក្រោមភាពជាដៃគូជាមួយនឹង Impact Hub ភ្នំពេញ។ នៅទីនោះពួកគេ
                        នឹងទទួលបានកន្លែងធ្វើការដោយឥតគិតថ្លៃ និងធនធានផ្សេងៗ ការហ្វឹកហាត់ ការលើក ទឹកចិត្ត និងឱកាសទទួល
                        បានដៃគូជាច្រើនទៀតផងដែរ។ មិនត្រឹមតែប៉ុណ្ណោះ ក្រុមដែលមានអាជីវកម្ម លូតលាស់លឿនជាងគេ ក្នុងដំណាក់
                        កាលននេះ ក៏នឹងទទួលបានរង្វាន់ផ្សេងៗដូចជា ដំណើរកំសាន្ត បច្ចេកវិទ្យាទៅកាន់ការិយាល័យ Google, Facebook
                        និង Microsoft នៅប្រទេសសឹង្ហបូរីផងដែរ។ ក្រោយពេលកម្មវិធីស្មាតស្តាត បានបញ្ចប់ទៅក្រុមហ៊ុនស្មាត
                        ក៏អាចបន្ត ផ្តល់ការវិនិយោគទុនទៅលើគំនិត របស់អ្នកទៀតផង!
                    </p>
                </div>

                <div class="item">
                    <p class="question">៣. តើខ្ញុំត្រូវចេញថ្លៃអ្វីដើម្បីចូលរួមកម្មវិធីនេះទេ?</p>
                    <p class="answer">ក្រុមហ៊ុនស្មាតនឹងចេញថ្លៃផ្សេងៗដែលទាក់ទងនឹងកម្មវិធីដូចជា អាហារ អាហារសម្រន់
                        និងសម្ភារៈប្រើប្រាស់ ក្នុងកម្មវិធី ។-ល-។ បន្ថែមពីលើនេះទៅទៀត ការធ្វើដំណើរ និង ការស្នាក់នៅនឹងត្រូវ
                        ជាបន្ទុករបស់ស្មាតនៅក្នុង វគ្គការប្រកួតសហ គ្រិនបច្ចេកវិទ្យា (Technoprenuer Challenge)
                        ដែលនឹងប្រព្រឹត្តទៅនៅ ខេត្តបាត់ដំបង។</p>
                </div>

                <div class="item">
                    <p class="question">៤. តើដំណាក់កាលជ្រើសរើសមានសភាពយ៉ាងដូចម្តេច?</p>
                    <div class="answer">
                        <span class="highlight">ដំណាក់កាលបំផុសគំនិត៖ </span><br>
                        <p class="list">យើងនឹងជ្រើសរើសសិស្ស និស្សិត ចំនួន ១២០ រូបពីពាក្យសុំចុះឈ្មោះ ដើម្បីឲ្យមកចូលរួម
                            កម្មវិធីដែលមាន រយៈពេលពាក់កណ្តាលថ្ងៃ មានឈ្មោះថា Hatch។ បេក្ខជនដែលមានគំនិតអាជីវកម្មជាក់លាក់
                            នឹងត្រូវបាន អញ្ជើញឲ្យធ្វើបទបង្ហាញពីគំនិតរបស់ពួកគេ បន្ទាប់មកបេក្ខជននឹងជ្រើសរើសក្រុមដោយ
                            ផ្អែកទៅលើ ចំណាប់អារម្មណ៍ និងជំនាញរបស់ពួកគេ។</p>
                        <p class="list">ក្រុមនីមួយៗនឹងត្រូវបានអញ្ជើញឲ្យចូលរួមកម្មវិធី Hackathon ដែលមានរយៈពេល ២ ថ្ងៃ។
                            នៅក្នុងកម្មវិធី នេះពួកគេនឹងអភិវឌ្ឍន៍គំនិតអាជីវកម្មរបស់ពួកគេឲ្យទៅជាផលិតផលគំរូ។
                            គណៈកម្មការនឹងជ្រើសរើសពី ១៥ គំនិតដែលល្អបំផុត ដើម្បីចូលរួមដំណាក់កាលខាងក្រោយទៀត។</p>

                        <span class="highlight">ដំណាក់កាលបណ្តុះសមត្ថភាព៖ </span><br>
                        <p class="list">កម្មវិធីការប្រកួតសហគ្រិនបច្ចេកវិទ្យា (Technoprenuer Challenge)
                            រយៈពេលប្រាំមួយថ្ងៃនៅខេត្តបាត់ដំបង នឹងត្រូវធ្វើឡើងដើម្បីផ្តល់ចំនេះដឹងពីការរៀបចំគំនិត
                            បង្កើតក្រុមហ៊ុនបច្ចេកវិទ្យាថ្មីដែលរួមមាន៖ ការចេះដឹង ការចេះវិភាគ និងការចេះប្រើប្រាស់ឱកាស
                            ការយល់ដឹងពីសារៈសំខាន់នៃការបង្កើត ផលិតផលគម្រូឲ្យបាន ឆាប់រហ័ស សុពលភាពទីផ្សារ
                            និងបទពិសោធន៍គ្រប់ផ្នែកជុំវិញការបង្កើតជំនួញថ្មីមួយ។ ក្នុងនោះក៏មានការ ហ្វឹកហាត់
                            ឌីជីថលកម្រិតខ្ពស់ និងការរៀនពីភាសាសាមញ្ញក្នុងការបង្កើតភាសាកុំព្យូទ័រ សម្រាប់ទាំងផ្នែក
                            ខាងក្នុង និងសម្បក ក្រៅនៃសហ្វវែកុំព្យូទ័រមួយ។</p>
                        <p class="list">ទទួលបានការបណ្តុះបណ្តាលពីវាគ្មិនពីក្នុង និងក្រៅប្រទេស
                            ការបង្កើតទំនាក់ទំនងជាមួយអ្នកមានបទ ពិសោធន៍ និង សហគ្រិនផ្សេងៗ ដោយផ្តោតសំខាន់ទៅលើ
                            «ការរៀនតាមរយៈការធ្វើ»។</p>
                        <p class="list">ចុងក្រោយនៃវគ្គនេះ
                            យើងនឹងមានកម្មវិធីធ្វើបទបង្ហាញជាសាធារណៈមួយនៅទីក្រុងភ្នំពេញដើម្បីជ្រើសរើស ក្រុមចំនួន៥
                            ក្រុមដែលមានគំនិតល្អបំផុត។ ក្រុមទទួលបានជ័យជំនះទាំង៥ នេះនឹងបន្តចូលទៅក្នុងកម្មវិធី បណ្តុះ
                            បណ្តាលរយៈពេល ៦ ខែទៀត។</p>

                        <span class="highlight">ដំណាក់កាលលូតលាស់៖ </span><br>
                        <p class="list">កម្មវិធីបណ្តុះបណ្តាលឥតគិតថ្លៃ និងការគាំទ្ររយៈពេល ៦ ខែ
                            ដែលត្រូវបានធ្វើឡើងតាមរយៈភាពជាដៃគូជា មួយ Impact Hub ភ្នំពេញ
                            ដើម្បីអភិវឌ្ឍន៍គំនិតដែលមានសក្តានុពលល្អជាងគេ ឲ្យក្លាយទៅជាជំនួញ ឬផលិតផល ពិតប្រាកដ
                            តាមរយៈបណ្ដាញធនធាន ការហ្វឹកហាត់ ការលើកទឹកចិត្ត និងឱកាសធ្វើជាដៃគូជាមួយនឹង
                            ជំនួញនិងអ្នកផ្តល់ប្រឹក្សាផ្សេងៗ។</p>
                        <p class="list">ក្រៅពីធ្វើការពិនិត្យជាទៀតទាត់ដើម្បីតាមដានការលូតលាស់ និងដោះស្រាយបញ្ហាផ្សេងៗ
                            ក្រុមទទួលបាន ជ័យជំនះ ក៏នឹងមានឱកាសបង្ហាញផលិតផលគម្រូ និងគំនិតអាជីវកម្មរបស់ពួកគេ
                            ទៅកាន់អ្នកជំនាញ និង អ្នកមានបទ
                            ពិសោធន៍ពីក្រុមហ៊ុនផ្សេងៗដើម្បីទទួលបានពត៌មានផ្សេងៗទាក់ទងជាមួយនឹងផលិតផល របស់ខ្លួន។</p>
                    </div>
                </div>

                <div class="item">
                    <p class="question">៥. ប្រសិនបើខ្ញុំជាប់ តើមានការទាមទារអ្វីខ្លះសម្រាប់ការចូលរួម?</p>
                    <p class="answer">ប្រសិនបើអ្នកជាប់ ហើយបន្តត្រូវបានជ្រើសរើសនៅក្នុងកម្មវិធីនេះ
                        អ្នកនឹងត្រូវចូលរួមគ្រប់ព្រឹត្តិការណ៍ដែល មាននៅក្នុងកម្មវិធី។ ព្រឹត្តិការណ៍ទាំងអស់ត្រូវបានបែងចែកជា
                        ៣ ដំណាក់កាល ដែលរួមមាន Hatch, Hackathon, ការប្រកួត សហគ្រិនបច្ចេកវិទ្យា (Technoprenuer Challenge)
                        និងកម្មវិធីប្រកួត និងបង្ហាញអំពី គំនិតអាជីវកម្មផ្សេងៗដូច ដែលបានបញ្ជាក់នៅខាងលើ។
                        ប្រសិនបើក្រុមរបស់អ្នកត្រូវបានជ្រើសរើសឲ្យបន្ត ទៅកាន់វគ្គលូតលាស់ អ្នកនឹងត្រូវធ្វើ
                        ការក្រៅម៉ោងលើគំនិតជំនួញរបស់អ្នកនៅ Impact Hub ភ្នំពេញ ផងដែរ។</p><br>
                </div>

                <p class="program-title">
                    ការដាក់ពាក្យ
                </p>

                <div class="item">
                    <p class="question">តើការកំណត់ឈប់ទទួលពាក្យចុះឈ្មោះនៅពេលណា?</p>
                    <p class="answer">ថ្ងៃទី ៣ ខែមេសាឆ្នាំ ២០១៩</p>
                </div>

                <div class="item">
                    <p class="question">តើនរណាខ្លះអាចចុះឈ្មោះបាន?</p>
                    <div class="answer">
                        កម្មវិធីនេះគឺសម្រាប់គ្រប់និស្សិតដែលមាន៖<br>
                        <p class="list">ចំណាប់អារម្មណ៍ និងចង់ស្វែងយល់ពីការច្នៃប្រឌិត ភាពជាសហគ្រិន ការបង្កើតជំនួញថ្មី
                            និងបច្ចេកវិទ្យា ឌីជីថល។</p>
                        <p class="list">គំនិតជំនួញឌីជីថលដែលមាននៅក្នុងប្រភេទ៖ ការអប់រំឌីជីថល ពាណិជ្ជកម្ម
                            និងការបង់ប្រាក់ឌីជីថល ការកំសាន្ត និងពត៌មានឌីជីថល និងនៅក្នុងវិស័យផ្សេងទៀតដូចជា វិស័យសុខាភិបាល
                            វិស័យកសិកម្ម និងវិស័យដឹកជញ្ជូន។</p>
                        <p class="list">ជំនាញឌីជីថល ឬសហគ្រិនភាព ដែលអាចនឹងចូលរួមធ្វើឲ្យគំនិតមួយអាចក្លាយទៅជាការពិតបាន
                            ដូចជា ជំនាញក្នុងការសរសេរកូដ ច្នៃម៉ូតហ្គ្រាហ្វិក ឬគេហទំព័រ ទីផ្សារ ការសរសេរ ការលក់ -ល-។</p>
                        <p class="list">ចំនេះដឹងអង់គ្លេសល្អ</p>
                        <p class="list">ការប្តេជ្ញាចិត្តដើម្បីធ្វើឲ្យសុបិន្តរបស់ខ្លួនក្លាយជាការពិត</p>
                        <p class="list">ការប្តេជ្ញាចិត្តចូលរួមគ្រប់ព្រឹត្តិការណ៍ និងសកម្មភាពរបស់កម្មវិធីទាំងមូល</p>
                        <p class="list">យើងលើកទឹកចិត្តឲ្យនិស្សិតឆ្នាំទី ៣ និង ទី៤ ចុះឈ្មោះកម្មវិធីនេះ។
                            ក៏ប៉ុន្តែគ្រប់និស្សិតមកពីសាកលវិទ្យា
                            ល័យទាំងបួននឹងទទួលបានការវាយតម្លៃដោយសុក្រិតពីសំណាក់គណៈកម្មការ នៅគ្រប់ដំនាក់កាលជម្រុះ ផ្សេងៗ។
                        </p>
                    </div>
                </div>

                <div class="item">
                    <p class="question">តើខ្ញុំចុះឈ្មោះចូលរួមកម្មវិធីនេះតាមរបៀបណា?</p>
                    <p class="answer">ដើម្បីមើលឯកសារអនឡាញជាមុន ទាញយកនៅ<a class="highlight"
                            href="./smartstart/new_ui/SmartStart_3_Application_Form.docx" download>ទីនេះ</a>។ សូមចុច
                        <span class="highlight"
                            onclick="window.open('https://impacthubphnompenh.typeform.com/to/vPr1As')">ទីនេះ</span>ដើម្បីចាប់ផ្តើមដាក់ពាក្យ។
                    </p>
                </div>

                <div class="item">
                    <p class="question">តើខ្ញុំចាំបាច់ត្រូវមានឯកសារបន្ថែមសម្រាប់ពាក្យចុះឈ្មោះទេ?</p>
                    <p class="answer">នៅសំណួរទី៧ អ្នកត្រូវធ្វើវីដេអូមួយ ដោយឆ្លើយនូវសំណួរណាមួយក្នុងចំណោមសំណួរទាំង២ (
                        សូមចូលទៅ មើលពាក្យចុះឈ្មោះ ដើម្បីទទួលបានពត៌មានលម្អិតស្តីពីវីដេអូនេះ)។
                        អ្នកត្រូវបង្ហោះវីដេអូរបស់អ្នកទៅក្នុង YouTube ហើយភ្ជាប់តំណវីដេអូនោះនៅក្នុងពាក្យចុះឈ្មោះរបស់អ្នក។
                    </p>
                </div>

                <div class="item">
                    <p class="question">តើពេលណាទើបខ្ញុំអាចដឹងលទ្ធផល?</p>
                    <p class="answer">អ្នករៀបចំនឹងផ្ញើរលទ្ធផលទៅអ្នកតាមរយៈអុីម៉ែលនៅថ្ងៃ ១២ ខែមេសា ឆ្នា២០១៩។
                        យើងនឹងតម្រូវឲ្យបេក្ខជន ដែលត្រូវបានជ្រើសរើស
                        ធ្វើការសម្រេចចិត្តពីការចូលរួមរបស់ខ្លួនម្តងទៀតក្រោយពីទទួលបានលទ្ធផលហើយ ។ ប្រសិនអ្នកមិនតបឆ្លើយ
                        នោះបង្ហាញថាអ្នកសម្រេចចិត្តមិនចូលរួមទេ ដែលមានន័យថាអ្នកបោះបង់ ឱកាស ចូលរួមក្នុងកម្មវិធីនេះ។
                        ដោយហេតុនេះហើយ យើងនឹងផ្តល់ឱកាសនេះទៅកាន់បេក្ខជនដែលមានសមត្ថភាព ផ្សេងទៀត។</p>
                </div>

                <div class="item">
                    <p class="question">តើមានកាលបរិច្ឆេទសំខាន់ៗណាខ្លះដែលខ្ញុំគួរតែដឹង?</p>
                    <div class="answer two-column">
                        <p class="list half">ថ្ងៃចាប់ផ្ដើមទទួលពាក្យចូលរួម</p>
                        <p class="half">២០ មិនា ២០១៩</p>
                        <p class="list half">ថ្ងៃឈប់ទទួលពាក្យចូលរួម</p>
                        <p class="half">០៣ មេសា ២០១៩</p>
                        <p class="list half">ចេញលទ្ធផល</p>
                        <p class="half">១២ មេសា ២០១៩</p>
                        <p class="list half">វគ្គបំផុសគំនិត៖ Hatch</p>
                        <p class="half">២០ មេសា ២០១៩</p>
                        <p class="list half">វគ្គបំផុតគំនិត៖ កម្មវិធី Hackathon</p>
                        <p class="half">២៧ ដល់ ២៨ មេសា ២០១៩</p>
                        <p class="list half">វគ្គបណ្តុះសមត្ថភាព៖ ការប្រកួតសហគ្រិនបច្ចេកវិទ្យា (Technoprenuer Challenge)
                        </p>
                        <p class="half">១១ ដល់ ១៦ ឧសភា ២០១៩</p>
                        <p class="list half">វគ្គបណ្តុះសមត្ថភាព៖ ការបង្ហាញចុងក្រោយ</p>
                        <p class="half">៩ មិថុនា ២០១៩</p>
                        <p class="list half">វគ្គលូតលាស់៖ កម្មវិធីបណ្តុះបណ្តាល ៦ ខែ</p>
                        <p class="half">ពីចុងខែមិថុនាទៅ</p>

                        <p><br>អ្នករៀបចំកម្មវិធីមានសិទ្ធិក្នុងការផ្លាស់ប្តូរកាលបរិច្ឆេទទាំងនេះផ្អែកទៅលើស្ថានភាពអនាគត។
                        </p>
                    </div>
                </div>
            </div>


        </page>


        <page id="previous-winner">


            <div class="content-winner">
                <div class="green-layer">
                    <p class="paragraph"> អតីត<br>
                        ជ័យលាភី
                </div>
            </div>

            <div class="top5-wrap">
                <div class="top5">
                    <div class="title-content">
                        <div class="title">
                            ជ័យលាភីទាំង៥
                        </div>
                        <div id="cycle-1Btn-kh" class="cycle-btn active" onclick="displayCycle('cycle-1')">រដូវកាលទី ១
                        </div>
                        <div id="cycle-2Btn-kh" class="cycle-btn" onclick="displayCycle('cycle-2')">រដូវកាលទី ២</div>
                    </div>
                    <cycle class="top5-list cycle" id="cycle-1">
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/go-soccer.jpg" alt="">
                            </div>
                            <div class="winner-title">
                                GoSoccer
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/ligo.png" alt="">
                            </div>
                            <div class="winner-title">
                                Ligo
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Prestige.png" alt="">
                            </div>
                            <div class="winner-title">
                                Prestige
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Propey.png" alt="">
                            </div>
                            <div class="winner-title">
                                Propey
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Spare.png" alt="">
                            </div>
                            <div class="winner-title">
                                Spare
                            </div>
                        </div>
                    </cycle>
                    <cycle id="cycle-1">
                        <div class="final-pitch">
                            <img src="img/Final-cycle-1.jpg" alt="">
                            <div>Final Pitch</div>
                        </div>
                        <div class="grand-final" style="padding-bottom: 40px;">
                            <img src="img/Grand-final-cycle-1.jpg" alt="">
                            <div>Grand Final</div>
                        </div>
                    </cycle>



                    <cycle class="top5-list cycle" id="cycle-2">

                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Haystome.png" alt="">
                            </div>
                            <div class="winner-title">
                                Haystome
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/HomeX.png" alt="">
                            </div>
                            <div class="winner-title">
                                Homex
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Malis.png" alt="">
                            </div>
                            <div class="winner-title">
                                Malis
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/SomJot.png" alt="">
                            </div>
                            <div class="winner-title">
                                SomJot
                            </div>
                        </div>
                        <div class="top5-list-item">
                            <div class="winner">
                                <img src="img/Tosrean.png" alt="">
                            </div>
                            <div class="winner-title">
                                Tos Rean
                            </div>
                        </div>
                    </cycle>
                    <cycle id="cycle-2">

                        <div class="final-pitch">
                            <img src="img/Final-cycle-2.jpg" alt="">
                            <div>Final Pitch</div>
                        </div>
                        <div class="grand-final " style="padding-bottom: 40px;">
                            <img src="img/Grand-final-cycle-2.jpg" alt="">
                            <div>Grand Final</div>
                        </div>
                    </cycle>

                </div>
            </div>






        </page>


        <page id="contact-us">


            <div class="contact-us-banner">
                <div class="green-layer" style="position: relative;">
                    <p class="paragraph">ទំនាក់ទំនងមកកាន់ <br> យើង
                </div>
            </div>
            <div class="wrap-contact">
                <div class="contact">
                    <div class="contact-us-div">
                        <div class="contact-ico1"></div>
                        <div>
                            <p>លេខទូស័ព្ទ</p>
                            <p>+85510234075</p>
                        </div>
                    </div>
                    <div class="contact-us-div">
                        <div class="contact-ico2"></div>
                        <div>
                            <p>អ៊ីម៉ែល</p>
                            <p>smartstart@smart.com.kh</p>
                        </div>
                    </div>
                    <div class="contact-us-div">
                        <div class="contact-ico3"></div>
                        <div>
                            <p>គេហទំព័រ</p>
                            <p>smartstart.com.kh</p>
                        </div>
                    </div>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.1978529270696!2d104.9213514153369!3d11.53766034783437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950dbd81ec78d%3A0x8d3ccf621a2b4e1f!2sSmart%20Axiata!5e0!3m2!1sen!2skh!4v1578477212564!5m2!1sen!2skh"
                            width="100%" height="100%" frameborder="0" style="border:1px solid #ccc;"
                            allowfullscreen=""></iframe>

                    </div>
                    <div class="follow-us')">
                        <p>តាមដានពួកយើងតាមរយៈ៖</p>
                        <div>
                            <div class="btn" onclick="window.open('https://web.facebook.com/smartforcambodia/')"></div>
                            <div class="btn" onclick="window.open('https://www.instagram.com/smartaxiata/')"></div>
                            <div class="btn" onclick="window.open('https://www.youtube.com/user/SmartAxiata')"></div>
                        </div>
                    </div>
                </div>
                <div class="contact-form">

                    {!! Form::open(['method' => 'POST', 'action' => 'UserController@store']) !!}
                        <div class="fill-form">ឬបំពេញទំរងខាងក្រោម</div>
                        <input type="text" name="name" placeholder="ឈ្មោះ">
                        <input type="text" name="email" placeholder="អ៊ីម៉ែល">
                        <input type="text" name="phoneNumber" placeholder="លេខទូស័ព្ទ">
                        <textarea type="text" name="message" placeholder="Message"
                            style="padding-top: 10px; width: 100%; height: 240px;"></textarea>
                        <div><input type="submit" value="ដាក់ពាក្យ" class="btn submit"></div>

                  {!! Form::close() !!}

                </div>
            </div>


            </div>


        </page>
    </language>





    <footer>
        <div class="green-footer">
            <div class="footer-logo"></div>
        </div>
    </footer>

    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>


</body>

</html>
