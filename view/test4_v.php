<!--Head-->
<?php include("head.php"); ?>

<head>
<script language="javascript">
    var valeur=1;

        function modifier(increment) 
        {
        valeur+=increment;

             if(valeur<0) 
            {
                document.getElementById('text').value=0;
            }
            else if(valeur>=0 && valeur<=33) 
            {
                document.getElementById('text').value=valeur;
                document.getElementById('image').src='../lib/images/test/test4/'+valeur+'.png';
            }
            else
            {
                document.getElementById('text').value=valeur;
                document.getElementById('image').src='../lib/images/test/test4/33.png';
            }
        }

</script>
</head>


    <body id="test">
        <section id="hero-area-test">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!--<div class="block wow fadeInUp" data-wow-delay=".3s">-->
                            

                            <!--
                            ==================================================
                            Question
                            ================================================== -->
                            <section class="cd-intro">
                                <h2>Combien de cigarettes fumes-tu chaque jour ?</h2>
                            </section>

                             <!--<?php echo $_GET['result']; ?>  ************************************ Affichage nb de points ***********************************************-->


                            <!--
                            ==================================================
                            Answers : picture
                            ================================================== -->
                            <section id="feature">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12">
                                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                <img src="../lib/images/test/test4/1.png" width="100%" id="image">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </section>


                            <!--
                            ==================================================
                            Answers : count
                            ================================================== -->
                            <section id="feature">
                                <div class="container">
                                    <div class="row">
                                        <form role="form" id="form" action="test4_ctr.php" method="post">
                                            <div style="text-align:center">

                                                <!--
                                                ==================================================
                                                Answers : less
                                                ================================================== -->
                                                <div class="col-md-3 col-lg-3 col-xs-3" id="colomn-test4">
                                                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                        <input type="button" value="-" onClick="modifier(-1)" id="btnCount"> 
                                                    </div>
                                                </div>
                                            
                                                
                                                <!--
                                                ==================================================
                                                Answers : submit
                                                ================================================== -->
                                                <div class="col-md-6 col-lg-6 col-xs-6" id="colomn-test4">
                                                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                        <div class="nbCigarettes">
                                                            <button type="submit" name="choix4" id="submit">
                                                                <input type="text" name="choix4" id="text" value="1" size="3" readonly="true"> 
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                             

                                                <!--
                                                ==================================================
                                                Answers : more
                                                ================================================== -->
                                                <div class="col-md-3 col-lg-3 col-xs-3" id="colomn-test4">
                                                    <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                                        <input type="button" value="+" onClick="modifier(1)" id="btnCount">
                                                    </div>
                                                </div>
                                            </div>
                                        <input type="hidden" name="oldResult" value="<?php echo $_GET['result']; ?>">
                                        </form> 
                                    </div>
                                </div>
                            </section>

                            <!-- Affichage nombre de cigartettes comptabilisé-->
                            <script language="javascript">
                                document.getElementById('text').value=valeur;
                            </script>


                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
        </body>

    </html>

