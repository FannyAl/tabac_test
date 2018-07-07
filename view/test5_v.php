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
                                <h3>Fumes-tu plus le matin au réveil que pendant le reste de la journée ?</h3>
                            </section>

                            <!--<?php echo $_GET['result']; ?> ************************************ Affichage nb de points ***********************************************-->


                            <!--
                            ==================================================
                            Picture
                            ================================================== -->
                             <section id="feature">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12">
                                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                <img src="../lib/images/test/test_content/Waken.png" id="pic-test5">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </section>

                            <br>


                            <!--
                            ==================================================
                            Answers Yes/No
                            ================================================== -->
                            <section id="feature-submit">
                                <div class="container">
                                    <div class="row">
                                        <form role="form" id="form" action="test5_ctr.php" method="post">

                                            <!-- Yes -->
                                            <div class="col-md-6 col-lg-6 col-xs-6">
                                                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                    <button type="submit" value="1" name="choix5" id="submit"><img src="../lib/images/test/test_content/star2.png" width="40px"><br>OUI</button>
                                                </div>
                                            </div> 

                                            <!-- No -->
                                            <div class="col-md-6 col-lg-6 col-xs-6">
                                                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                    <button type="submit" value="0" name="choix5" id="submit"><img src="../lib/images/test/test_content/star2.png" width="40px"><br>NON</button>
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
