<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<?php get_footer(); ?>
       <footer class="footer">
           <ul class="social">
               <li><a rel="nofollow" target="_blank" href="http://vk.com/club28768096" title="vk"><i class="fa fa-vk"></i></a></li>
               <li><a rel="nofollow" target="_blank" href="https://www.facebook.com/groups/404883239609152/" title="facebook"><i class="fa fa-facebook"></i></a></li>
           </ul>
           <div class="logo">
               <a href="<?php get_site_url(); ?>" title="">&nbsp;</a>
           </div>
           <a class="up" href="#top" title="">&nbsp;</a>
           

		<?php include('footer-text.php'); ?>
		
		
       </footer>
   </div>
   
   <!-- Yandex.Metrika counter -->
 <script type="text/javascript">
var yaParams = {ip_adress: "<? echo $_SERVER['REMOTE_ADDR'];?>"};
//объявляем параметр ip_adress и записываем в него IP посетителя
</script> 
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter36470475 = new Ya.Metrika({id:36470475, params:window.yaParams,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/36470475" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10126728-5', 'auto');
  ga('require', 'displayfeatures'); // это для ремаркетинга
  
  if (location.hostname == 'www.prostosait.com.ua') { // это для того, чтобы не ключил вебвизор
      $.ajax({
      url: '/getip.php',    // код этого скрипта ниже  
      dataType : "html",                     
      success: function (data, textStatus) {
         ga('set', 'dimension1', data); // тут мы записали IP в переменную Google.Universal 
         ga('send', 'pageview');
      } 
   });
	setTimeout (function() { // тут мы каждые 15 секунд сообщаем гуглу, что человек на сайте. Чтобы процент отказов был ближе к Яндекс.Метрике
		ga('send', 'event', 'New Visitor', location.pathname);
	}, 15000);
  } else {
      ga('send', 'pageview');
  }

</script>
</body>
</html>