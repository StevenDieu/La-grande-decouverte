<!---------- FOOTER --------->	
<style>
	body {width:100%}
	.footer {text-align:center;width:100%;background-color:#0e1728;color:white;padding:20px auto;}
	.bloc_footer {text-align:left;width:300px;margin-left:20px;padding: 20px 30px;}
	.infoSupplementaires {display: inline-flex;margin:0 auto; width:900px;}
	.newsletter input {width:100%;margin:5px 0px;}
	.newsletter button {background-color:#0076a3;float:right;}
	
	@media screen and (max-width: 900px) {
		.infoSupplementaires {display:inline-block;width:300px;}
	}
</style>
<div class="footer">
    <div class="infoSupplementaires">
        <div class="enSavoirPlus bloc_footer">
            <b>EN SAVOIR PLUS</b>
            <ul>
                <li>- Qui sommes-nous ?</li>
                <li>- Espace presse</li>
                <li>- Nous contacter</li>
                <li>- Nous rejoindre</li>
                <li>- Mensions legales</li>
                <li>- CGV</li>
            </ul>
        </div>
        <div class="nosServices bloc_footer">
            <b>NOS SERVICES</b>
            <ul>
                <li>- Information voyages</li>
                <li>- Remboursement voyage</li>
                <li>- Paiement sécurisé</li>
                <li>- Télécharger notre RIB</li>
                <li>- FAQ</li>
            </ul>
        </div>
        <div class="newsletter bloc_footer">
            <b>S'INSCRIRE A LA NEWSLETTER</b><br/>
            <input type="text" value="votre e-mail"/><br/>
            <button>S'INSCRIRE</button>
        </div>
    </div>
</div>
<!---------- / FOOTER --------->	

<script src="<?php echo asset_url(''); ?>/librairie/js/jquery.min.js"></script>
<script src="<?php echo asset_url(''); ?>/librairie/js/bootstrap.min.js"></script>
</body> 
</html>
