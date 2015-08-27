<script type="text/javascript">
    var urlAddComment = '<?php echo base_url('voyage/carnet/addComment'); ?>';
    var urlError = '<?php echo base_url('pages/messageErreur'); ?>';
    var urlGetComments = '<?php echo base_url('voyage/carnet/getCommentPerPage'); ?>';
    var urlSpiner = '<?php echo asset_url() . "images/spinner.gif"; ?>';
    var urlSignalComment = '<?php echo base_url('voyage/carnet/signalComment'); ?>';
</script>

<div class="content article">
    <div class="content_fiche">

        <?php if ($articles[0]->visible == 1) { ?>
            <div class="callbacks_container slider_principal">
                <?php if ($imagesCarnetVoyages) { ?>
                    <ul class="rslides" id="slider_top">
                        <?php foreach ($imagesCarnetVoyages as $imagesCarnetVoyage) { ?>
                            <li>
                                <img src="<?php echo asset_media($imagesCarnetVoyage->lien); ?>" alt="">
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="clear"></div>

            <div class="content_article">
                <div>
                    <div class="carnet_user">
                        <p>Créer par <?= $articles[0]->prenom ?> <?= $articles[0]->nom ?>, le <?= $articles[0]->date_creation ?></p>
                    </div>
                    <div class="share_carnet">
                        <p><!--Partager ce carnet de voyage :-->
                            <a href="http://www.facebook.com/share.php?u=<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>&title=<?php echo $articles[0]->titre; ?>" target="_blank" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-facebook.png" class="icone-social" alt=""></a>
                            <a href="http://twitter.com/intent/tweet?status=<?php echo $articles[0]->titre; ?>+<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-twitter.png" class="icone-social" alt=""></a>
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>&title=<?php echo $articles[0]->titre; ?>&source=[SOURCE/DOMAIN]" target="_blank"><img src="<?php echo asset_url(''); ?>images/footer/img-social-linkedin.png" class="icone-social" alt=""></a>
                        </p>
                    </div> 
                </div>

                <div class="content_article">
                    <h2 class="title"><?php echo $articles[0]->titre; ?></h2>

                    <?php echo $articles[0]->contenu; ?>
                </div>
                <legend class="legend_comment"></legend>
                <div class="form_comment">
                    <div class="alertType" >
                    </div>
                    <form class="form_add_comment">
                        <input type="hidden" name="id_article" class="id_article" value="<?= $articles[0]->id ?>" />
                        <div class="row_comment">
                            <div class="col-md-6 input_comment_left">
                                <div class="une_row">
                                    <label for="name">Nom, Prenom</label>
                                    <p>
                                        <input type="text" class="required name" id="name" placeholder="Nom, Prenom"/>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 input_comment_right">
                                <div class="une_row">
                                    <label for="mail">Adresse Mail</label>
                                    <p>
                                        <input type="email" class="required mail" id="mail" placeholder="Adresse Mail"/>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="une_row">
                            <label for="Commentaire">Commentaire</label>
                            <p>
                                <textarea class=" required commentaire" id="commentaire" placeholder="Commentaire"></textarea>
                            </p>
                        </div>
                        <input type="button" class="bgreen addComment" value="Envoyer">
                    </form>

                    <div class="list_comment">
                        <?php
                        if (isset($comments)) {
                            foreach ($comments as $comment) {
                                ?>
                                <div class="comment">
                                    <div class="titre_comment">
                                        <span class="name_comment"><?= $comment->name ?></span><span class="hour_comment"><?= $comment->date_creation ?></span>
                                    </div>
                                    <div class="texte_comment">
                                        <?= $comment->commentaire ?>
                                    </div>
                                    <div class="button_signal" >
                                        <a data-id="<?= $comment->id; ?>" class="comment_signal">
                                            SIGNALER
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>

                    </div>
                    <?php
                    if (isset($nbrPageComment) && $nbrPageComment > 1) {
                        ?>
                        <div class="pagination">
                            <?php
                            for ($i = 1; $i <= 5 && $i <= $nbrPageComment; $i++) {
                                ?>
                                <span class="casePage page-<?= $i?> <?php if ($pageCourante == $i) { ?>active<?php } ?> " data-page="<?= $i ?>"><?= $i ?></span>
                                <?php
                            }
                            ?>

                        </div>
                        <?php
                    }
                    ?>

                </div>

            </div>


        <?php } else { ?>
            <div class="content_article">
                <br/>
                <h2> En attente de validation </h2>
                <br/>
                <br/>
                Cette article est en attente de validation pour un administrateur, nous sommes désolé de la gêne.
                <br/>
                <br/>
                Le staff
                <br/>
                <br/>
            </div>

        <?php } ?>

    </div>
    <div class="clear"></div>
</div>