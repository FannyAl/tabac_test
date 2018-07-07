<!--Head-->
<?php include("head.php"); ?>

    <body id="test">
        <section id="hero-area-test">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            

                            <!--
                            ==================================================
                            Question
                            ================================================== -->
                            <section class="cd-intro">
                                <h2>Quelle cigarette détesterais-tu le plus de perdre ?</h2>
                            </section>

                            <!--<?php echo $_GET['result']; ?> ************************************ Affichage nb de points ***********************************************-->


                            <!--
                            ==================================================
                            Answers
                            ================================================== -->
                             <section id="feature">
                                <div class="container">
                                    <div class="row">
                                        <form role="form" action="test3_ctr.php" method="post">

                                            <!--
                                            ==================================================
                                            Answer 1
                                            ================================================== -->
                                            <div class="col-md-6 col-lg-6 col-xs-6">
                                                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                    <button type="submit" value="1" name="choix3" id="submit">
                                                        <img src="../lib/images/test/test_content/Ring.png" id="pic-test3">
                                                        <br><br>première du matin
                                                    </button>
                                                </div>
                                            </div> 

                                            <!--
                                            ==================================================
                                            Answer 2
                                            ================================================== -->
                                            <div class="col-md-6 col-lg-6 col-xs-6">
                                                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                    <button type="submit" value="0" name="choix3" id="submit">
                                                        <img src="../lib/images/test/test_content/Cigarette.png" id="pic-test3">
                                                        <br><br>Une autre
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Input invisible pour stocker le nb de point-->   
                                            <input type="hidden" name="oldResult" value="<?php echo $_GET['result']; ?>">
                                        
                                        </form> 
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#main-slider-->        
    </body>
</html>
