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
                                <h2>As-tu du mal à ne pas fumer lorsque c’est interdit ?</h2>
                                <h4>(ex : lieux publics, repas...)</h4>
                            </section>


                            <!--<?php echo $_GET['result']; ?> ************************************ Affichage nb de points ***********************************************-->

                            <!--
                            ==================================================
                            Answers
                            ================================================== -->
                             <section id="feature">
                                <div class="container">
                                    <div class="row">
                                        <form role="form" id="form" action="test2_ctr.php" method="post">
                                            <div class="col-md-4 col-lg-6 col-xs-12">
                                                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                    <!--<img src="../lib/images/test/test_content/InterdictionXS.png"  id="forbidden">-->

                                                    <!--
                                                    ==================================================
                                                    Answers Yes/No
                                                    ================================================== -->
                                                    <div class="reponse-test" id="picS-test2">
                                                        <br><br><br>
                                                        <button type="submit" value="1" name="choix2" id="submit"><strong>Oui</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;</button>
                                                        <br><br>
                                                        <button type="submit" value="0" name="choix2" id="submit">&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Non</strong></button>
                                                    </div>
                                                    <div class="reponse-test2" id="picM-test2">
                                                        <br><br><br><br><br>
                                                        <button type="submit" value="1" name="choix2" id="submit"><strong>Oui</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;</button>
                                                        <br><br><br>
                                                        <button type="submit" value="0" name="choix2" id="submit">&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Non</strong></button>
                                                    </div>

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
            </div
        </section><!--/#main-slider-->

    </body>
</html>
