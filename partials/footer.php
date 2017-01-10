		<!-- formular -->
		<div id="form_contact">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="col-md-2 gray_color">
					<h3 class="thirty_size">NOUS CONTACTER</h3>
					<p>Afin de mieux répondre à vos attentes, merci de remplir le formulaire ci-dessous.</p>
				</div>
				<form action="" class="col-md-10">
					<div class="col-md-6">
						<span>
							<input type="text" name="last_name" placeholder="NOM">
						</span>

						<span>
							<input type="text" name="first_name" placeholder="PRENOM">
						</span>
						
						<span>
							<input type="email" name="email" placeholder="EMAIL">
						</span>
						
						<span class="select_holder">
							<select name="" id="" class="gray_color">
								<option value="" disabled selected>VOUS ÊTES:</option>
								<option value=""></option>
								<option value=""></option>
							</select>
						</span>
					</div>

					<div class="col-md-6">
						<span class="select_holder">
							<select name="" id="" class="gray_color">
								<option value="" disabled selected>SUJET:</option>
								<option value=""></option>
								<option value=""></option>
							</select>
						</span>

						<span>
							<textarea placeholder="MESSAGE"></textarea>
						</span>
					</div>				
				</form> <!-- end form -->
				<span class="clearfix"></span>
				
				<!-- btn -->
				<span class="col-md-2"></span>
				<span class="col-md-10">
					<span class="col-md-6"></span>
					<span class="col-md-6"><a href="" class="btn gray_color">ENVOYER</a></span>
				</span> <!-- end btn -->
				
				<span class="clearfix"></span>
				<p class="col-md-12 tiny_size gray_color">Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous bénéficiez d'un droit d'accès et de rectification aux informations qui vous concernent</p>
			</div>
			<div class="col-md-1"></div>
			<span class="clearfix"></span>
		</div>

		<!-- socials -->
		<div class="socials">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="col-md-12">
					<p class="gray_color center">SUIVEZ-NOUS SUR LES RÉSEAUX SOCIAUX</p>
					<ul class="inline-list center">
						<li><a href="//facebook.com" target="_blank"><img src="assets/img/icons/facebook.png" alt=""></a></li>
						<li><a href="//linkedin.com" target="_blank"><img src="assets/img/icons/linkedin.png" alt=""></a></li>
						<li><a href="//twitter.com" target="_blank"><img src="assets/img/icons/twitter.png" alt=""></a></li>
						<li><a href="//youtube.com" target="_blank"><img src="assets/img/icons/youtube.png" alt=""></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="no_list_style">
						<li><a href="">ACCUEIL</a></li>
						<li><a href="">L’ÉCOLE</a></li>
						<li><a href="">LE TREMA LAB</a></li>
						<li><a href="">AGENDA</a></li>
						<li><a href="">ACTUALITÉS</a></li>
						<li><a href="">CARTOGRAPHIE DES MÉTIERS</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="no_list_style formation_list">
						<li><a href="">FORMATION</a></li>
						<li><a href="">CERTIFICATIONS</a></li>
						<li><a href="">HABILITATIONS </a></li>
						<li><a href="">PREQUALIFICATIONS </a></li>
						<li><a href="">MODULES À LA CARTE</a></li>
						<li><a href="">VAE</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="no_list_style">
						<li><a href="">NEWSLETTER</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">CONTACT</a></li>
						<li><a href="">PLAN DU SITE</a></li>
						<li><a href="" class="dark_btn">GOOGLE MAP</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="no_list_style formation_list_dissoudun gray_color">
						<li>LES FORMATIONS D’ISSOUDUN</li>
						<li>PIAF rue du Bât le Tan 36100 ISSOUDUN</li>
						<li>Tel : 02 52 03 16 26</li>
						<li>Fax : 02 54 21 79 37</li>
					</ul>
				</div>
				<div class="col-md-12 center">
					<p class="mention gray_color">Mentions légales - Les formations d’Issoudun © 2016</p>
				</div>
			</div>
			<div class="col-md-1"></div>
			<span class="clearfix"></span>
		</div>
	</div> <!-- end wrapper -->

	<script src='assets/js/jquery-3.1.1.min.js'></script>
	<script src='assets/js/bootstrap.min.js'></script>
	<script>
		var t = [1, 2, 3],
			r = [1, 2, 3];

		function rev(r, t, from_end)
		{
			var tmp,
				i,
				j;

			i = r.length;
			j = 0;
			if (!from_end)
			{
				while (--i + j > 0)
				{
					console.log(r);
					ft_swap(r, (i - 1) + j, (i - 1) + 1);
					if (i == 1)
						j = 1;
				}
				ft_swap(r, r.length - 1, r.length - 2);
			}
			else
			{
				i = -1;
				j = 0;
				while (++i < r.length)
				{
					console.log(r);
					if (i == r.length - 1)
						j = 1;
					ft_swap(r, i, ((i + 1) - j));
				}	
				ft_swap(r, 0, 1);
			}
			console.log("\n");
			if (ft_is_resolve(r, t))
				return (1);
			from_end = (from_end)? 0 : 1;
			rev(r, t, from_end);
		}

		function ft_swap(r, i, j)
		{
			var	tmp;

			tmp = r[i];
			r[i] = r[j];
			r[j] = tmp;
			return (r);
		}

		function ft_is_resolve(r, t)
		{
			var	i;

			i = 0;
			while (r[i] || t[i])
			{
				if (r[i] != t[i])
					return (0);
				i++;
			}
			return (1);
		}
		// rev(r, t, 0);
	</script>
	</body>
</html>