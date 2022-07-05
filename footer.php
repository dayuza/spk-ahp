</div> <!-- /wrapper -->

<script src="js/jquery-3.2.1.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
<script type="text/javascript">
	$('.ui.radio.checkbox')
		.checkbox()
	;
</script>
<script type="text/javascript">
	$('.message .close')
	  .on('click', function() {
	    $(this)
	      .closest('.message')
	      .transition('fade')
	    ;
	  })
	;
</script>
<script src="vendor/clipboard-1.7.1.min.js"></script>
		<script src="vendor/js.cookie-2.1.4.min.js"></script>
		<script src="vendor/cupcakes-3.1.0.min.js"></script>

		<script src="lib/mainf988.js?v=202206251943"></script>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82634666-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'UA-82634666-2');
		</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="cdn.jsdelivr.net/npm/docsearch.js%402/dist/cdn/docsearch.min.js"></script>
<script type="text/javascript" src="assets/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="assets/dist/sweetalert2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript">
			docsearch({
				apiKey: 'cb93c14bebd90678e789c946d95ea94d',
				indexName: 'bulma',
				inputSelector: '#algoliaSearch',
				debug: false // Set debug to true if you want to inspect the dropdown
			});
		</script>
</body>
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>SPK</strong> by <a href="https://yuza.fercel.app">Teguh Nugratama Dayuza</a>. Kode sumber dilisensikan
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. Silahkan cek di github
      <a href="https://github.com/Dayuza"></a>. Dengan cara klik icon ini <span class="icon has-text-love">
									<img src="images/logo-sm.svg" >
									</span>
    </p>
  </div>
</footer>
</html>
