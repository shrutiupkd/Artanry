<?php  

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTNARY</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <!-- header section starts  -->

    <header>


    <div class="header-2">

<nav class="navbar">
    <a href="#" class="logo"><i class=""></i>ARTNARY</a>
    <a href="index1.html">home</a>
    <a href="about.html">about us</a>
    <a href="index.php">blog</a>
    <a href="feedback.php">Feedback</a>
    
</nav>
<div class="d-flex">
    <div class="login mr-4" data-bs-target="#login" data-bs-toggle="modal">
      <a href="login.php"><h3>Sign in</h3></a>
        
    </div>

    <div class="signup" data-bs-target="#signup" data-bs-toggle="modal">
      <a href="register.php"><h3>Sign up</h3></a>
    </div>
</div>

</div>

</header>

<!-- header section ends -->


    

<!-- home section starts  -->
<section>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>

</div>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/3672388/pexels-photo-3672388.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="d-block w-100" height="450" alt="...">
    </div>
    <div class="carousel-item">
        <img src="https://images.pexels.com/photos/574313/pexels-photo-574313.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="d-block w-100" height="450" alt="...">
    </div>
    <div class="carousel-item">
        <img src="https://images.pexels.com/photos/1583571/pexels-photo-1583571.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="d-block w-100" height="450" alt="...">
    </div>

</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
</section>
    <!-- home section ends -->

    <!-- banner section starts  -->
    <h1 class="heading">Places with <span>Most Tourism</span></h1>
    <section class="product" id="product">

        <div class="row">

            <div class="col-6 state-box">
                <span>Gujarat</span>
                <img src="https://www.flamingotravels.co.in/blog/wp-content/uploads/2020/07/Gujrat.jpg" alt="">
               
                    <button id="myBtn" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Music</button> 
                    <div id="myModal" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
                    <div  class="modal-content"style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;">
                        <span id="modalClose" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                        <p style="font-size:20px;">The songs and music accompanying traditional dance forms such as Garba, Dandiya Raas, Padhar, Dangi and Tippani are unique in nature. Fattanna or Lagna-geets are light form of song and music played during marriages. Bhavai and Akhyana are folk musical theatre performed in Gujarat.</p>
                            
                        </div>
                    </div>
                            <button id="myBtn1"style="width: 40%; margin-right: 2rem; margin-top: 2rem;text-align: center;border: 8px solid transparent; padding: 7px12px;font-size: 17px;font-weight: 600;background: var(--green);color: #fff;">Language</button> 
                            <div id="myModal1" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" ><div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose1" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                                <p>ગુજરાતી, romanized: Gujarātī, pronounced [ɡudʒˈɾɑːtiː], previously English: Guzerati[6]) is an Indo-Aryan language native to the Indian state of Gujarat and spoken predominantly by the Gujarati people. Gujarati is part of the greater Indo-European language family. Gujarati is descended from Old Gujarati (c. 1100–1500 CE). In India, it is the official language in the state of Gujarat, as well as an official language in the union territory of Dadra and Nagar Haveli and Daman and Diu.</p>
                                
                             </div>
                            </div>
                            <button id="myBtn2" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Food</button> 
                            <div id="myModal2" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" > <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose2" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                                <p> “Surat Nu Jaman Ane Kashi Nu Maran” a popular saying in Gujarati which means dining at Surat and dying at Varanasi, is the way to heaven. One of the thrills of traveling to Gujarat is its multi cuisine. Perhaps the best way to know a state is to cut to the heart of the extraordinary culture of Gujarat is by exploring its cuisine.</p>
                                </div>
                            </div>
                            <button id="myBtn3" style="width: 40%;margin-right: 2rem;margin-top: 2rem; text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Dance</button> 
                            <div id="myModal3" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);"> <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose3" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                                <p>Garba is a form of dance which originates from the state of Gujarat in India. The name is derived from the Sanskrit term Garbha ("womb") and Deep ("a small earthenware lamp"). Many traditional garbas are performed around centrally lit lamp or a picture or statue of the Goddess Shakti. Traditionally, it is performed during the nine-day Hindu festival Navarātrī (Gujarati નવરાત્રી Nava = 9, ratri = nights). Either the lamp (the " garbha Deep) or an image of the Goddess, Durga (also called Amba) is placed in middle of concentric rings as an object of veneration.</p>
                                 </div>
                            </div>
                     </div>
            <div class="col-6 state-box">
                <span>Karnataka</span>
                <img src="https://www.india-briefing.com/news/wp-content/uploads/2019/07/India-Briefing-The-Shops-and-Establishment-Act-Karnataka.jpg"
                    alt="">
                    <button id="myBtn4" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Music</button> 
                    <div id="myModal4" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
                    <div  class="modal-content"style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;">
                        <span id="modalClose4" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                    <p>Karnatak music, also spelled Karnatic or Carnatic, music of southern India (generally south of the city of Hyderabad in Andhra Pradesh state) that evolved from ancient Hindu traditions and was relatively unaffected by the Arab and Iranian influences that, since the late 12th and early 13th centuries, as a result of the Islamic conquest of the north, have characterized the Hindustani music of northern India. In contrast to northern styles, Karnatak music is more thoroughly oriented to the voice. Even when instruments are used alone, they are played somewhat in imitation of singing, generally within a vocal range, and with embellishments that are characteristic of vocal music.</p>
                   
                    </div>
                </div>
                    <button id="myBtn5"style="width: 40%; margin-right: 2rem; margin-top: 2rem;text-align: center;border: 8px solid transparent; padding: 7px12px;font-size: 17px;font-weight: 600;background: var(--green);color: #fff;">Language</button> 
                    <div id="myModal5" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" ><div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose5" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                        <p> Kannada (/ˈkɑːnədə, ˈkæn-/;[6][7] ಕನ್ನಡ, [ˈkɐnːɐɖa]; less commonly known as Kanarese)[8][9] is a Dravidian language spoken predominantly by the people of Karnataka in the southwestern region of India. The language is also spoken by linguistic minorities in the states of Maharashtra, Andhra Pradesh, Tamil Nadu, Telangana, Kerala and Goa; and also by Kannadigas abroad. The language had roughly 43 million native speakers by 2011.</p>
                         </div>
                    </div>
                    <button id="myBtn6" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Food</button> 
                            <div id="myModal6" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" > <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose6" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                                <p>Karnataka cuisine includes the cuisines of the different regions and communities of Karnataka, namely, North Karnataka cuisine, South Karnataka cuisine, Udupi cuisine, Saraswat cuisine, Coorg cuisine, Mangalorean Catholic cuisine and Navayath cuisine.Karnataka cuisine includes both vegetarian and non-vegetarian. Ragi, which is a staple in Kannadiga cuisine is mentioned in the works of the poet Adikavi Pampa and in the ancient Sanskrit medical text Sushruta Samhita.</p> 
                                </div>
                            </div>
                            <button id="myBtn7" style="width: 40%;margin-right: 2rem;margin-top: 2rem; text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Dance</button> 
                            <div id="myModal7" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);"> <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose7" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                                <p>The ritual dances of Karnataka are known as Kunitha. One such dance is the Dollu Kunitha, a popular dance form accompanied by singing and the beats of decorated drums. This dance is primarily performed by men from the shepherd or Kuruba caste. The Dollu Kunitha is characterized by vigorous drum beats, quick movements and synchronized group formations.</p>
                                 </div>
                            </div>
                </div>
            <div class="col-6 state-box">
                <span>Punjab</span>
                <img src="https://cdn.britannica.com/53/176353-050-5B854179/Harmandir-Sahib-Amritsar-Punjab-India.jpg" alt="">
                <button id="myBtn8" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Music</button> 
                    <div id="myModal8" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
                    <div  class="modal-content"style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;">
                        <span id="modalClose8" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                    <p>Music of Punjab (in Punjabi ਪੰਜਾਬ ਦਾ ਸੰਗੀਤ, پنجاب دی موسیقی) reflects the traditions of the Punjab region of the Indian subcontinent, currently divided into two parts: East Punjab and West Punjab. The Punjab has diverse styles of music, ranging from folk and Sufi to classical, notably the Patiala gharana. While this style of music is, obviously, most popular in Punjab, it has seen popularity in many diverse and different areas of the world, such as Southern Ontario.</p>
                    </div></div>
                    <button id="myBtn9"style="width: 40%; margin-right: 2rem; margin-top: 2rem;text-align: center;border: 8px solid transparent; padding: 7px12px;font-size: 17px;font-weight: 600;background: var(--green);color: #fff;">Language</button> 
                    <div id="myModal9" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" ><div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose9" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                        <p>Punjabi (Gurmukhi: ਪੰਜਾਬੀ, Shahmukhi: پن٘جابی /pʌnˈdʒɑːbi/;[8] Punjabi pronunciation: [pənˈdʒaːbːi]; sometimes spelled Panjabi) is an Indo-Aryan language spoken by the Punjabi people and native to the Punjab region of Pakistan and India.It has approximately 113 million native speakers. The larger part – 80.5 million as of 2017 – are in Pakistan, where Punjabi has more speakers than any other language but no official recognition at the national or provincial level. In India, Punjabi is spoken by 31.1 million people (as of 2011) and has official status in the state of Punjab.</p> 
                        </div>
            </div>
            <button id="myBtn10" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Food</button> 
            <div id="myModal10" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" > <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose10" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                <p>Punjabi cuisine is a culinary style originating in the Punjab, a region in the northern part of the Indian subcontinent, which is now divided in an Indian part and a Pakistani part. This cuisine has a rich tradition of many distinct and local ways of cooking. One is a special form of tandoori cooking that is now famous in other parts of India, UK, Canada, Hong Kong and in many parts of the world. The local cuisine of Punjab is heavily influenced by the agriculture and farming lifestyle prevalent from the times of the ancient Indus Valley Civilization. Locally grown staple foods form the major part of the local cuisine. Distinctively Punjabi cuisine is known for its rich, buttery flavours along with the extensive vegetarian and meat dishes. Main dishes include sarhon dā saâg (a stew whose main ingredient is mustard greens) and makki di roti (flatbreads made with cornmeal).</p>
                </div>
            </div>
            <button id="myBtn11" style="width: 40%;margin-right: 2rem;margin-top: 2rem; text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Dance</button> 
                            <div id="myModal11" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);"> <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose11" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                                <p>Bhaṅgṛā (Punjabi: ਭੰਗੜਾ/بھنگڑا) IPA: [ˈpə̀ŋɡɽaː] (About this soundlisten)) is a type of traditional folk dance of the Indian subcontinent, originating in the Majha area of Punjab.[1] In a typical performance, several dancers execute vigorous kicks, leaps, and bends of the body—often with upraised, thrusting arm or shoulder movements—to the accompaniment of short songs called boliyan and, most significantly, to the beat of a dhol (double-headed drum).[2] Struck with a heavy beater on one end and with a lighter stick on the other, the dhol imbues the music with a syncopated (accents on the weak beats), swinging rhythmic character that has generally remained the hallmark of bhangra music.</p>
                                 </div>
                            </div>
                </div>
            <div class="col-6 state-box">
                <span>Maharashtra</span>
                <img src="https://images.indianexpress.com/2021/07/Mumbai-rain-14.jpg"
                    alt="">
                    <button id="myBtn12" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Music</button> 
                    <div id="myModal12" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);">
                    <div  class="modal-content"style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;">
                        <span id="modalClose12" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                    <p> Maharashtra is a state of India. The region's folk heritage includes boards, Gondhals, Lavanis-(Lavani or Lavni is all about how much emotion your face can propagate into. Mastery is different in this dance form and is Maharashtra's cherished factors which are disappearing rapidly.) Shahiris and Powada. Sharang Dev, a 13th-century composer, was from Maharashtra as well.</p>
                    </div></div>
                    <button id="myBtn13"style="width: 40%; margin-right: 2rem; margin-top: 2rem;text-align: center;border: 8px solid transparent; padding: 7px12px;font-size: 17px;font-weight: 600;background: var(--green);color: #fff;">Language</button> 
                    <div id="myModal13" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" ><div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose13" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                        <p>Marathi (English: /məˈrɑːti/;[3] मराठी, Marāṭhī, Marathi is an Indo-Aryan language spoken predominantly by Marathi people of Maharashtra, India. It is the official language and co-official language in the Maharashtra and Goa states of Western India, respectively and is one of the 22 scheduled languages of India. With 83 million speakers as 2011, Marathi ranks 10th in the list of languages with most native speakers in the world. Marathi has the third largest number of native speakers in India, after Hindi and Bengali</p>
                         </div>
            </div>
            <button id="myBtn14" style="width: 40%;position:relative;float: left; margin-left: 2rem;margin-top: 2rem;text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Food</button> 
            <div id="myModal14" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);" > <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose14" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                <p>Maharashtrian or Marathi cuisine is the cuisine of the Marathi people from the Indian state of Maharashtra. It has distinctive attributes, while sharing much with other Indian cuisines. Traditionally, Maharashtrians have considered their food to be more austere than others. Maharashtrian cuisine includes mild and spicy dishes. Wheat, rice, jowar, bajri, vegetables, lentils and fruit are dietary staples. Peanuts and cashews are often served with vegetables. Meat was traditionally used sparsely or only by the well off until recently, because of economic conditions and culture.</p>
                </div>
            </div>
            <button id="myBtn15" style="width: 40%;margin-right: 2rem;margin-top: 2rem; text-align: center;font-weight: 600;background: var(--green); color: #fff;padding: .8rem 3rem;font-size: 1.7rem;">Dance</button> 
                            <div id="myModal15" class="modal" style="background-color: grey;position: fixed;padding-top: 100px; width: 100%;height: 100%;  overflow: auto;background-color: rgb(0,0,0);background-color: rgba(0,0,0,0.4);"> <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 2px; border: 1px solid #888;width: 80%;font-family: Arial, Helvetica, sans-serif;"><span id="modalClose15" class="close" style="text-align:right;font-size: 28px;font-weight: bold;">&times;</span>
                                <p>Gifted with its rich culture and traditions, Maharashtra has different types of dance forms. Povada is the dance form that showcases the lifetime achievements of the Maratha ruler Shivaji Maharaj. Lavani and Koli dance forms entertain the Maharashtrians with its mesmerizing music and rhythmic movements. Dhangri Gaja dance pays respect to their God by the Dhangars of Sholapur. Dindi and Kala are the religious folk dances, which expresses of religious ecstasy of Lord Krishna. Tamasha is the folk dance that is so popular all over the state.
</p> 
                                </div>
                            </div>
                </div>

            <div class="explore">
                <a href="exploremore.html"  target="_parent" class="btn">Explore more</a>  
            </div>

    </section>
    <!-- contact section starts  -->

    
    

    <!-- contact section ends -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }

        $(function () {
        $('#modalClose').on('click', function () {
            $('#myModal').hide();
        })
    })
        </script>
         <script>
            // Get the modal
            var modal1 = document.getElementById("myModal1");
            
            // Get the button that opens the modal
            var btn1 = document.getElementById("myBtn1");
            
            // Get the <span> element that closes the modal
            var span1 = document.getElementsByClassName("close")[0];
            
            // When the user clicks the button, open the modal 
            btn1.onclick = function() {
              modal1.style.display = "block";
            }
            
            // When the user clicks on <span> (x), close the modal
            span1.onclick = function() {
              modal1.style.display = "none";
            }
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal1) {
                modal1.style.display = "none";
              }
            }
            $(function () {
        $('#modalClose1').on('click', function () {
            $('#myModal1').hide();
        })
        })
    </script>
     <script>
        // Get the modal
        var modal2 = document.getElementById("myModal2");
        
        // Get the button that opens the modal
        var btn2 = document.getElementById("myBtn2");
        
        // Get the <span> element that closes the modal
        var span2 = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn2.onclick = function() {
          modal2.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span2.onclick = function() {
          modal2.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal2) {
            modal2.style.display = "none";
          }
        }
        $(function () {
    $('#modalClose2').on('click', function () {
        $('#myModal2').hide();
    })
    })
</script>
<script>
    // Get the modal
    var modal3= document.getElementById("myModal3");
    
    // Get the button that opens the modal
    var btn3 = document.getElementById("myBtn3");
    
    // Get the <span> element that closes the modal
    var span3 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn3.onclick = function() {
      modal3.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
      modal3.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal3) {
        modal3.style.display = "none";
      }
    }
    $(function () {
$('#modalClose3').on('click', function () {
    $('#myModal3').hide();
})
})
</script>
<script>
    // Get the modal
    var modal4= document.getElementById("myModal4");
    
    // Get the button that opens the modal
    var btn4 = document.getElementById("myBtn4");
    
    // Get the <span> element that closes the modal
    var span4 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn4.onclick = function() {
      modal4.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span4.onclick = function() {
      modal4.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal4) {
        modal4.style.display = "none";
      }
    }
    $(function () {
$('#modalClose4').on('click', function () {
    $('#myModal4').hide();
})
})
</script>
<script>
    // Get the modal
    var modal5= document.getElementById("myModal5");
    
    // Get the button that opens the modal
    var btn5 = document.getElementById("myBtn5");
    
    // Get the <span> element that closes the modal
    var span5 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn5.onclick = function() {
      modal5.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span5.onclick = function() {
      modal4.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal5) {
        modal5.style.display = "none";
      }
    }
    $(function () {
$('#modalClose5').on('click', function () {
    $('#myModal5').hide();
})
})
</script>
<script>
    // Get the modal
    var modal6= document.getElementById("myModal6");
    
    // Get the button that opens the modal
    var btn6 = document.getElementById("myBtn6");
    
    // Get the <span> element that closes the modal
    var span6 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn6.onclick = function() {
      modal6.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span6.onclick = function() {
      modal6.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal6) {
        modal6.style.display = "none";
      }
    }
    $(function () {
$('#modalClose6').on('click', function () {
    $('#myModal6').hide();
})
})
</script>
<script>
    // Get the modal
    var modal7= document.getElementById("myModal7");
    
    // Get the button that opens the modal
    var btn7 = document.getElementById("myBtn7");
    
    // Get the <span> element that closes the modal
    var span7 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn7.onclick = function() {
      modal7.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span7.onclick = function() {
      modal7.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal7) {
        modal7.style.display = "none";
      }
    }
    $(function () {
$('#modalClose7').on('click', function () {
    $('#myModal7').hide();
})
})
</script>
<script>
    // Get the modal
    var modal8= document.getElementById("myModal8");
    
    // Get the button that opens the modal
    var btn8 = document.getElementById("myBtn8");
    
    // Get the <span> element that closes the modal
    var span8 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn8.onclick = function() {
      modal8.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span8.onclick = function() {
      modal8.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal8) {
        modal8.style.display = "none";
      }
    }
    $(function () {
$('#modalClose8').on('click', function () {
    $('#myModal8').hide();
})
})
</script>
<script>
    // Get the modal
    var modal9= document.getElementById("myModal9");
    
    // Get the button that opens the modal
    var btn9 = document.getElementById("myBtn9");
    
    // Get the <span> element that closes the modal
    var span9 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn9.onclick = function() {
      modal9.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span9.onclick = function() {
      modal9.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal9) {
        modal9.style.display = "none";
      }
    }
    $(function () {
$('#modalClose9').on('click', function () {
    $('#myModal9').hide();
})
})
</script>
<script>
    // Get the modal
    var modal10= document.getElementById("myModal10");
    
    // Get the button that opens the modal
    var btn10 = document.getElementById("myBtn10");
    
    // Get the <span> element that closes the modal
    var span10 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn10.onclick = function() {
      modal10.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span10.onclick = function() {
      modal10.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal10) {
        modal10.style.display = "none";
      }
    }
    $(function () {
$('#modalClose10').on('click', function () {
    $('#myModal10').hide();
})
})
</script>
<script>
    // Get the modal
    var modal11= document.getElementById("myModal11");
    
    // Get the button that opens the modal
    var btn11 = document.getElementById("myBtn11");
    
    // Get the <span> element that closes the modal
    var span11 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn11.onclick = function() {
      modal11.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span11.onclick = function() {
      modal11.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal11) {
        modal11.style.display = "none";
      }
    }
    $(function () {
$('#modalClose11').on('click', function () {
    $('#myModal11').hide();
})
})
</script>
<script>
    // Get the modal
    var modal12= document.getElementById("myModal12");
    
    // Get the button that opens the modal
    var btn12 = document.getElementById("myBtn12");
    
    // Get the <span> element that closes the modal
    var span12 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn12.onclick = function() {
      modal12.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span12.onclick = function() {
      modal12.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal12) {
        modal12.style.display = "none";
      }
    }
    $(function () {
$('#modalClose12').on('click', function () {
    $('#myModal12').hide();
})
})
</script>
<script>
    // Get the modal
    var modal13= document.getElementById("myModal13");
    
    // Get the button that opens the modal
    var btn13 = document.getElementById("myBtn13");
    
    // Get the <span> element that closes the modal
    var span13 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn13.onclick = function() {
      modal13.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span13.onclick = function() {
      modal13.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal13) {
        modal13.style.display = "none";
      }
    }
    $(function () {
$('#modalClose13').on('click', function () {
    $('#myModal13').hide();
})
})
</script>
<script>
    // Get the modal
    var modal14= document.getElementById("myModal14");
    
    // Get the button that opens the modal
    var btn14 = document.getElementById("myBtn14");
    
    // Get the <span> element that closes the modal
    var span14 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn14.onclick = function() {
      modal14.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span14.onclick = function() {
      modal14.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal14) {
        modal14.style.display = "none";
      }
    }
    $(function () {
$('#modalClose14').on('click', function () {
    $('#myModal14').hide();
})
})
</script>
<script>
    // Get the modal
    var modal15= document.getElementById("myModal15");
    
    // Get the button that opens the modal
    var btn15 = document.getElementById("myBtn15");
    
    // Get the <span> element that closes the modal
    var span15 = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn15.onclick = function() {
      modal15.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span15.onclick = function() {
      modal15.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal15) {
        modal15.style.display = "none";
      }
    }
    $(function () {
$('#modalClose15').on('click', function () {
    $('#myModal15').hide();
})
})
</script>

 

   

    <!-- footer section starts  -->

    <section class="footer">

      <div class="box-container">

          <div class="box">
              <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>Artnary</a>
              <p>This website is for college PBL project
                </p>
              <div class="share">
                  <a href="#" class="btn fab fa-facebook-f"></a>
                  <a href="#" class="btn fab fa-twitter"></a>
                  <a href="#" class="btn fab fa-instagram"></a>
                  <a href="#" class="btn fab fa-linkedin"></a>
              </div>
          </div>

         
          </div>

          
          </div>

          
      </div>

  </section>

    <!-- footer section ends -->
</body>

</html>